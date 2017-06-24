<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'name'=>'required|unique:films,name_films',
            'title'=>'required',
            'content'=>'required',
            'image'=>'required'
        ];
    }

    public function messages(){

        return [
            'name.required'=>'Please Enter Your Name Film',
            'name.unique'=>'Name Film already exists',
            'title.required'=>'Please Enter Your Title',
            'content.required'=>'Please Enter Your Content',
            'image.required'=>'Please Choice Image'

        ];
    }
}
