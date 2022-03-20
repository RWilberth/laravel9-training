<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'description' => 'required',
            'project_code' => 'required|unique:projects|max:250',
            'hold_id' => 'required|max:64',
            'planned_start' => 'required|date_format:Y-m-d',
            'planned_end' => 'required|date_format:Y-m-d|after_or_equal:planned_start'
        ];
    }
}
