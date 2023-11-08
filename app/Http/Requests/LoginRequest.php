<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

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
            'name' => 'required',
            'password' => 'required'
        ];
    }

    // ! VALIDAR DATOS INGRESADOS
    public function getCredentials()
    {
        $username = $this->get('name');

        if ($this->isEmail($username)) {
            return [
                'email' => $username,
                'password' => $this->get('password'),
            ];
        }
        return $this->only('name', 'password');
    }

    // ! VALIDAR SI EL VALOR USERNAME ES UN CORREO
    public function isEmail($value)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['name' => $value], ['name' => 'email'])->fails();
    }
}