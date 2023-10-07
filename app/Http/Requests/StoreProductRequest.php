<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'category' => 'required | string',
            'productName'=> 'required | string',
            'initialPrice' => 'required | numeric',
            'discountPrice' => 'required | numeric',
            'firstImage' => 'required | file | mimes:jpg,jpeg,png',
            'secondImage' => 'required | file | mimes:jpg,jpeg,png',
            'thirdImage' => 'required | file | mimes:jpg,jpeg,png',
            'fourthImage' => 'required | file | mimes:jpg,jpeg,png',
            'specifications'  => 'required | string',
            'avgRating' => 'required | numeric',
            'productWarranty' => 'required | string',
            'brandName' => 'required | string',
            'productDescription' => 'required | string'
         ];
    }

    public function messages(): array
    {
        return [
            'avgRating.required' => 'The average rating field is required',
            'avgRating.numeric' => 'The avarage rating field must be a number'
        ];
    }
}
