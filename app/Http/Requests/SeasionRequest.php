<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeasionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'seasion'=>'required|unique:seasions,seasion'
        ];
    }

    public function messages(){
        return [
            'seasion.required'=>"PLease Enter Your Seasion",
            'seasion.unique'=>'Seasion already exists'
        ];
    }
}
