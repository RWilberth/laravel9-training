<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'code' => [
                'required',
                Rule::unique('projects', 'project_code')->ignore($this->project),
                'max:250'
            ],
            'hold_id' => 'required|max:64',
            'planned_start' => 'required|date_format:d/m/Y',
            'planned_end' => 'required|date_format:d/m/Y|after_or_equal:planned_start'
        ];
    }
}
