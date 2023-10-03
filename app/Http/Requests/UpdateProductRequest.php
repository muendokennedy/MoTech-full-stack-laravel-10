<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'categoryEdit' => 'required | string',
            'productNameEdit'=> 'required | string',
            'initialPriceEdit' => 'required | numeric',
            'discountPriceEdit' => 'required | numeric',
            'firstImageEdit' => 'required | file | mimes:jpg,jpeg,png',
            'secondImageEdit' => 'required | file | mimes:jpg,jpeg,png',
            'thirdImageEdit' => 'required | file | mimes:jpg,jpeg,png',
            'fourthImageEdit' => 'required | file | mimes:jpg,jpeg,png',
            'specificationsEdit'  => 'required | string',
            'brandNameEdit' => 'required | string',
            'productDescriptionEdit' => 'required | string'
        ];
    }
}
