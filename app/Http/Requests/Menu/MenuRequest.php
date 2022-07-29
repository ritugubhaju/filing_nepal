<?php

namespace App\Http\Requests\Menu;

use App\Modules\Models\Menu\Menu;
use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
                'name'=>'required'
            ];

            return $rules;
        }

        public function data()
        {
            $data = [
                'name' => $this->get('name'),
                'url'=> $this->get('url'),
                'order' => Menu::orderBy('order', 'desc')->first()->order + 1,
                'status' => ($this->get('status') ? $this->get('status') : '') == 'on' ? '1' : '0',

            ];
            return $data;
        }

        public function inputs()
        {
            $inputs = [
                'name' => $this->get('name'),
                'url'=> $this->get('url'),
                'status' => ($this->get('status') ? $this->get('status') : '') == 'on' ? '1' : '0',

            ];
            return $inputs;
        }


    }
