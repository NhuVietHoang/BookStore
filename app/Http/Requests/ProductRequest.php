<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'=>'required|unique:products,name',
            'category'=>'required',
            
        ];
    }
    public function messages()
    {
       return[
            'name.required'=>'tên sản phẩm không được để trống',
            'name.unique'=>'sản phẩm đã tồn tại',
            'category'=>'danh mục không được để trống'
       ];
    }
}
