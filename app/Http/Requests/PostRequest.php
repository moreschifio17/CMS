<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        
    return  [
		'image_name' => 'required',
		'image_extention' => 'required',
    ];

    }
    
    public function rulesPageRed()
    {
        
         return  [
		    'page_id' => 'required',
		    'social_net_id' => 'required',
		    'description' => 'required|max:255',
         ];

    }

    public function messages()
    {
        return [
            'image_name.required' => 'A name is required',
            'image_extention.required' => 'A extention is required',
        ];
    }
}
