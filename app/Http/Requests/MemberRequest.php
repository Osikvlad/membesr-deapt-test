<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class MemberRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'salary' => 'required',
            'departments' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Необходимо указать имя',
            'last_name.required' => 'Необходимо указать фамилию',
            'middle_name.required' => 'Необходимо указать отчество',
            'gender.required' => 'Необходимо выбрать пол',
            'salary.required' => 'Необходимо указать зарплату',
            'departments.required' => 'Необходимо выбрать отдел'
        ];
    }
}
