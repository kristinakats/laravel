<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddBlogPostRequest extends Request
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
            'first_name' => 'required|max:5',
            'last_name' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'telephone_number' => 'required|numeric',
            'card_number' => 'required|numeric',
        ];
    }
}
