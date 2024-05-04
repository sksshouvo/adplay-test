<?php

namespace App\Http\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ValidateBidRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Assuming no specific authorization is required
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
                'imp' => ['required', 'array'],
                'app.name' => ['required', 'string'],
                'device.geo.country' => ['required', 'string'],
                'device.geo.city' => ['required', 'string'],
                'device.model' => ['nullable', 'string'],
                'device.os' => ['required', 'string'],
                'imp.*.banner.format' => ['required', 'array']
                
            ];
    }

    
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}
