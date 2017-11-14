<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLecture extends FormRequest
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
    public function wantsJson()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name'=>'required|max:100',
            'last_name'=>'required|max:100',
            'title'=>'required|max:50',
            'email'=>'required|email',
            'introduction'=>'required'

            //
        ];
    }
}
