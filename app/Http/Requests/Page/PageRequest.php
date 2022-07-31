<?php

namespace App\Http\Requests\Page;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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

    public function rules()
    {
        $rules = [
            'title'=>'required',
            'image' => 'mimes:jpeg,png,jpg,gif,mp4|max:5000'
        ];

        return $rules;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function pageFillData()
    {
        $inputs = [
            'title' => $this->get('title'),
            'meta_description' => $this->get('meta_description'),
            'content' => $this->get('content'),
            'url' => $this->get('url'),
            'status' => ($this->get('status') ? $this->get('status') : '') == 'on' ? '1' : '0'
        ];

        return $inputs;
    }
}
