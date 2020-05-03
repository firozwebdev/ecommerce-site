<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductForm extends FormRequest
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
          'name' => 'required',
          'title' => 'required',
          'sub_category_id' => 'required',
          'product_price' => 'required',
          // 'special_price' => 'nullable',
          // 'start_date' => 'required_if:special_price,!=,null',
          // 'end_date' => 'required_if:special_price,!=,null',
          'product_quantity' => 'required',
          'sku' => 'required',
          'stock' => 'required',
          'description' => 'required',
          'color' => 'required',
          'size' => 'required',
          // 'multiple' => 'required',
          'multiple.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ];
    }
}
