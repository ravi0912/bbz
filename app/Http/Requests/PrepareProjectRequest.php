<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PrepareProjectRequest extends Request
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
            'name'         => 'required',
            'occupation'   => 'required',
            'start_month'  => 'required|integer|between:1,12',
            'start_year'   => 'required|integer|max:9999',
            'finish_month' => 'integer|between:1,12',
            'finish_year'  => 'integer|max:9999',
            'url'          => 'url',
            'team_members' => 'required',
            'address'      => 'required',
            'description'  => 'min:20',
        ];
    }
}
