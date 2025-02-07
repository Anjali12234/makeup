<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\StoreBookingRequest;
use App\Mail\WelcomeMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('service')->get();
        return view('admin.booking.index',compact('bookings'));
    }
    public function store(StoreBookingRequest $request)
    {
        $customerId = auth('customer')->id();
        Booking::create($request->validated()+ [
            'customer_id' => $customerId,
            
        ]
    );
        Alert::success('Booking added successfully');
        return redirect(route('welcome'));

    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $booking->update([
            'status' => !$booking->status,
        ]);
        $statusText = $request->status == 1 ? 'Verified' : 'Rejected';
        Mail::to($booking->email)->send(new WelcomeMail($booking, $statusText));

        // Success alert
        Alert::success('Account verification status has been updated successfully.');
        return back();
    }
}
