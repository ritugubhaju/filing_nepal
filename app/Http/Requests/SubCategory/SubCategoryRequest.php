<?php

namespace App\Http\Requests\SubCategory;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'title'=>'required',
        ];

        return $rules;
    }

    public function data()
    {

        $data = [
            'category_id'               => $this->get('category_id'),
            'title'                  => $this->get('title'),
            'status' => ($this->get('status') ? $this->get('status') : '') == 'on' ? '1' : '0',
        ];
        return $data;
    }

}
