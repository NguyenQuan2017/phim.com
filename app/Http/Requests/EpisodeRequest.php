<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EpisodeRequest extends FormRequest
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
            'episode'=>'required|unique:episodes,episode',
            'link_video'=>'required'
        ];
    }

    public function messages(){

        return [
            'episode.required'=>'Please Enter Your Episode',
            'episode.unique'=>'Episode Already Exists',
            'link_video.required'=>'Please Enter Your Link Video'
        ];
    }
}
