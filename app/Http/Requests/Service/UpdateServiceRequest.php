<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\ServiceType;
use Illuminate\Validation\Rules\Enum;

class UpdateServiceRequest extends FormRequest
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
            'image' => ['nullable', 'image'],
            'slug' => ['nullable', 'alpha_dash', Rule::unique('services', 'slug')->ignore($this->service)],
        ];
    }
}
