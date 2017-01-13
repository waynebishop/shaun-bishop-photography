<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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

//     protected function getValidatorInstance()
// {
//     $validator = parent::getValidatorInstance();


//     $validator->each('files', ['images']);

//     return $validator;
// }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'intro' => 'required|min:3',
            'body' => 'required|min:3',
            'published_at' => 'required|date',
            // 'images' => 'required|image',
            // 'gallery_title' => 'required|min:3',
            // 'gallery_cat' => 'required',

        ];
    }
}
