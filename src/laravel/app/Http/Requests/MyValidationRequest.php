<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use App\Http\Requests\ValidationFailedTrait;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class MyValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        $validate = [];
        $validate += [
            'name' => ['required','max:5']
        ];
        $validate += [
            'email' => ['required','email','unique:users','max:255']
        ];
        $validate += [  
            'password' => ['required','min:8','max:255']       

        ];

        // $validate +=[
        //     'title' => ['required','unique:posts'],
        //     'body' =>['required'],
        // ];

        return $validate;

        
    }

    protected function failedValidation( Validator $validator )
    {
        $res = response()->json([
            'error' => $validator->errors(),
            ],
            400);
        throw new HttpResponseException($res);

    }

}
