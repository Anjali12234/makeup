<?php

namespace App\Http\Requests\Service;

use App\ServiceType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
class StoreServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'category' => ['required', new Enum(ServiceType::class)],
            'description' => ['required'],
            'image' => ['required', 'image'],
        ];
    }
}
