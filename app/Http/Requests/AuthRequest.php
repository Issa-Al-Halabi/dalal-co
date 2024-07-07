<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class AuthRequest extends FormRequest
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
    public function rules()
    {

        return match ($this->route()->getActionMethod()) {
            'login'   =>  $this->getLoginRule(),
            'signup'   =>  $this->getSignupRule(),
        };
    }

    public function getLoginRule()
    {
        return [
            "password" => "required|string|max:32",
            'email' => 'required|email',
        ];
    }

    public function getSignupRule()
    {
        return [
            'name' => 'required|string|max:255',
            "password" => "required|string|max:32",
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|digits_between:3,14',
            'terms' => 'required|in:1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __("messages.name_required"),
            'name.max' => __("messages.name_max"),
            'password.required' => __("messages.password_required"),
            'password.max' => __("messages.password_max"),
            'email.required' => __("messages.email_required"),
            'email.email' => __("messages.email_email"),
            'email.unique' => __("messages.email_unique"),
            'phone.required' => __("messages.phone_required"),
            'phone.numeric' => __("messages.phone_numeric"),
            'phone.digits_between' => __("messages.phone_digits_between"),
            'terms.required' => __("messages.terms_required"),
        ];
    }
}
