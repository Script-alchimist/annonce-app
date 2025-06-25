<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required|string|min:3|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:8|max:40',
            'content' => 'required|string|min:10|max:10777215',
            'captcha' => 'required|captcha'
        ];
    }

    public function messages() : array
    {
        return [
            'required' => __('Ce champs est obligatoire.'),
            'fullname.min' => __('Le titre doit être de 5 lettres au minimum.'),
            'fullname.max' => __('Le titre doit être de 255 lettres au maximum.'),
            'phone.min' => __('Le contact doit être de 8 chiffres au minimum.'),
            'phone.max' => __('Le contact doit être de 13 chiffres au maximum.'),
            'phone.numeric' => __('Le contact ne doit conténir que des chiffres.'),
            'content.min' => __('Le contenu doit être de 10 lettres au minimum.'),
            'content.max' => __('Le titre doit être de 160777215 lettres au maximum.'),
        ];
    }
}
