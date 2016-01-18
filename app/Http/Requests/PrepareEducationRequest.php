<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Carbon\Carbon;

class PrepareEducationRequest extends Request
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
            'school'       => 'required',
            'start_month'  => 'required|integer|between:1,12',
            'start_year'   => 'required|integer|max:9999',
            'finish_month' => 'integer|between:1,12',
            'finish_year'  => 'integer|max:9999',
            'degree'       => 'required|max:25',
            'branch'       => 'max:25',
            'grade'        => 'max:25',
            'experience'   => '',
            'description'  => '',
        ];
    }
}

