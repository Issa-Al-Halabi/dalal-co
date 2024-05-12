<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ContactUsRequest extends FormRequest
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
            'submitForm'   =>  $this->getsubmitFormRule(),
            'sendOrderMail'   =>  $this->getSendMailRule(),
        };
    }

    public function getsubmitFormRule()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'max:255',
            'email' => 'nullable|email',
            'phone' => 'required|numeric|digits_between:3,14',
            'subject' => 'max:255',
            'message' => '',
        ];
    }


    public function getSendMailRule()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'maid_id' => 'required|exists:maids,id',
        ];
    }
}
