<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'bail|required|string|min:6|max:255',
            'email' => [
                'bail',
                'required',
                'email',
                Rule::unique('users', 'email')->ignore(auth()->id()),
            ],
            'password' => [
                'bail',
                'nullable',
                'confirmed',
                Password::min(8)
                ->max(16)
                ->letters()
                ->symbols()
                ->numbers()
            ],
        ];
    }
}
