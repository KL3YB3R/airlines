<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,name',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function addStatusToUser()
    {
        return [
            'email' => $this->get('email'),
            'name' => $this->get('username'),
            'password' => $this->get('password'),
            'password_confirmation' => $this->get('password_confirmation'),
            'user_type' => 'Airline',
            'status' => 'Active',
        ];
    }

    public function addEmailToAirline()
    {
        return [
            'email' => $this->get('email')
        ];
    }
}
