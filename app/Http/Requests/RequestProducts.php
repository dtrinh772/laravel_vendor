<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProducts extends FormRequest
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
            'productName' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ];
    }

    public function messages(){
        return [
          'productName.required' => 'mày chưa nhập tên sản phẩm đâu nhá',
          'description.required' => 'mày chưa nhập mô tả sản phẩm đâu nhá',
          'price.required' => 'mày chưa nhập giá sản phẩm đâu nhá',
          'quantity.required' => 'mày chưa nhập số lượng sản phẩm đâu nhá'
        ];
    }
}
