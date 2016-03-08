<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PrepareExperienceRequest extends Request
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
            'company_name' => 'required',
            'title'        => 'required',
            'location'     => 'required',
            'start_month'  => 'required|integer|between:1,12',
            'start_year'   => 'required|integer|max:9999',
            'finish_month' => 'between:1,12',
            'finish_year'  => 'integer|max:9999',
            'working'      => 'boolean',
            'description'  => 'min:20',
        ];
    }
}
