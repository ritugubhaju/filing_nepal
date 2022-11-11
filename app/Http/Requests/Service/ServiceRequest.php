<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'image' => 'mimes:jpeg,png,jpg,gif,mp4|max:5000'
        ];

        return $rules;
    }

    public function data()
    {

        $data = [
            'category_id'               => $this->get('category_id'),
            'subcategory_id'               => $this->get('subcategory_id'),
            'title'                  => $this->get('title'),
            'content'   => $this->get('content'),
            'price'   => $this->get('price'),
            'status' => ($this->get('status') ? $this->get('status') : '') == 'on' ? '1' : '0',
        ];
        return $data;
    }

}
