<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'beds' => 'required|integer|min:0|max:20',
            'baths' => 'required|integer|min:0|max:20',
            'area' => 'required|integer|min:0|max:1500',
            'city' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'street_nr' => 'required|min:1|max:1000',
            'price' => 'required|integer|min:0|max:200000000',
        ];
    }
}
