<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBookingRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'email' => ['required','email'],
            'phone_number' => ['required','digits_between:7,10'],
            'service_id' => ['required','string'],
            'preferred_date' => ['required','date'],
            'preferred_time' => ['required','string', Rule::unique('bookings','preferred_time')->where('preferred_date',$this->input('preferred_date'))],
        ];
    }
}
