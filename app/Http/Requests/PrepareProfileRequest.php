<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PrepareProfileRequest extends Request
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
            'current_company'     => '',
            'current_city'        => '',
            'current_state'       => 'required',
            'current_designation' => '',
            'date'                => 'integer|max:31',
            'month'               => 'integer|max:12',
            'year'                => 'integer|max:9999'
        ];
    }
}
