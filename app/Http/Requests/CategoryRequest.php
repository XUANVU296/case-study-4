<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories,name,' . $this->route('category'),
            'description' => 'required|alpha_spaces',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bắt buộc nhập',
            'name.unique' => 'Tên này đã tồn tại',
            'description.required' => 'Không được để trống',
            'description.alpha_spaces' => 'Bắt buộc phải là chữ',
        ];
    }
}
