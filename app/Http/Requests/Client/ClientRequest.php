<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'title'                  => $this->get('title'),
            'position'                  => $this->get('position'),
            'company_name'                  => $this->get('company_name'),
            'content'   => $this->get('content'),
            'status' => ($this->get('status') ? $this->get('status') : '') == 'on' ? '1' : '0',
        ];
        return $data;
    }

}
