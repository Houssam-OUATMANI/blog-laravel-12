<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "firstname" => ["string", "required", "max:15"],
            "lastname" => ["string", "required", "max:15"],
            "email" => ["string", "email", "required", "unique:users"],
            "password" => ["string", "min:8", "max:15"]
        ];
    }
}
