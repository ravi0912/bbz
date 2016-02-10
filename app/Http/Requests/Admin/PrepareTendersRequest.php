<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class PrepareTendersRequest extends Request
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
            'state' => 'required',
            'city'       => 'required',
            'description'  => '',
            'ownership'  => '',
            'industry' => '',
            'product_category' => '',
            'title' => 'required',
            'link'   => 'required|url',
            'issuing_authority' => '',
            'estimated_value' => '',
            'open_date' => 'date',
            'close_date' => 'date'
        ];
    }
}
