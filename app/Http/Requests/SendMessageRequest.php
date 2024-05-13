<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Request;

class SendMessageRequest extends FormRequest
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
    public function rules(Request $request)
    {

        $array= [
            "organization_name" =>'required',
            "number_guest" =>'required',
            "message" =>'required',

        ];

        if($this->get('email')!=null){

            $array['email']='required|email';
        }
      return $array;
    }
    public function messages(): array
    {
        $message = [
            'organization_name' => 'Կազմակերպության դաշտը պարտադիր է',
            'number_guest' => 'Հյուրերի քանակ դաշտը պարտադիր է',
            'message' =>'Հաղորդագրության դաշտը պարտադիր է',
        ];
        if($this->get('email')!=null){

            $message['email']='Էլ․հասցե դաշտը պետք է լինի վավեր';
        }
        return $message;
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([

        'errors' => $validator->errors(),

        ], 422));
    }
}
