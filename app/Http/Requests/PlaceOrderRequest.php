<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceOrderRequest extends FormRequest
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
            //
            'fname' => 'required | string',
            'lname' => 'required | string',
            'email' => 'required | email',
            'phone' => 'required | numeric',
            'address1' => 'required | string',
            'address2' => 'required | string',
        ];
    }
}
