<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CustomerRegisterRequest;
use App\Models\Customer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class CustomerAuthController extends Controller
{
    public function registerPage()
    {
        return view('customerAuth.register');
    }
    public function loginPage()
    {
        return view('customerAuth.login');
    }
    public function customerRegister(CustomerRegisterRequest $request)
    {
        $customer = Customer::create($request->validated());
        event(new Registered($customer));

        Auth::guard('customer')->login($customer, true);

        Alert::success('Customer added successfully');
        return redirect(route('booking', absolute: false));
    }
    public function customerLogin(Request $request): RedirectResponse|string
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if (Auth::guard('customer')->attempt(
        ['email' => $request->email, 'password' => $request->password],
        $request->get('remember')
    )) {
        return redirect(route('customer.dashboard'));
    }

    return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('customerLogin')->with('success', 'You have been logged out!');
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $customer = auth('customer')->user();

        // Update the password
        $customer->update([
            'password' => $validated['password'],
        ]);

        return back()->with('status', 'password-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $customer = Auth::guard('customer')->user();

        if ($customer) {
            $customer->delete();
    
            Auth::guard('customer')->logout();
    
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect('/')->with('status', 'Profile deleted successfully');
        }
    }
}
