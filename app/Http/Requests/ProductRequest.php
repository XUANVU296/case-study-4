<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:15|unique:products,name',
            'description' => 'required|alpha_spaces',
            'price' => 'numeric',
            'quantity' => 'numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bắt buộc nhập',
            'name.unique' => 'Tên này đã tồn tại',
            'description.required' => 'Không được để trống',
            'description.alpha_spaces' => 'Bắt buộc phải là chữ',
            'price.numeric' => 'Bắt buộc phải nhập số',
            'quantity.numeric' => 'Bắt buộc phải nhập số',
        ];
    }
}
