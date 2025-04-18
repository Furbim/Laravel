<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            "email" => 'required|email',
            "password" => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'=> "O campo email é obrigatório!",
            'email.unique'=> "Este email já está sendo utilizado!",
            'email.email'=> "Email inválido!",
            'password.required'=> 'O campo senha é obrigatório!',
        ];

    }
}
