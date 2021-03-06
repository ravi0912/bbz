<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PreparePageMakeRequest extends Request
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
            'pages_category_id'      => 'required|integer',
            'pages_subcategory_id'   => 'required|integer',
            'type_id'                => 'required|integer',
            'name'                   => 'required',
            'specialities'           => '',
            'headquarter'            => '',
            'content'                => '',
        ];
    }
}
