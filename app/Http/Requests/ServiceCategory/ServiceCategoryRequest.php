<?php

namespace App\Http\Requests\ServiceCategory;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCategoryRequest extends FormRequest
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
        $rules = [
            'title'=>'required'
        ];

        return $rules;
    }

    public function data()
    {

        $data = [
            'title'                  => $this->get('title'),
            'status' => ($this->get('status') ? $this->get('status') : '') == 'on' ? '1' : '0',
        ];
        return $data;
    }

}
