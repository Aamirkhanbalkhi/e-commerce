<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'sometimes|required',
            'product_name' => 'sometimes|required',
            // 'reference' => 'sometimes|required',
            'price' => 'sometimes|required|numeric',
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'product_details' => 'sometimes|required',
            'status' => 'sometimes|required',
            'image_url_1' => 'sometimes|required',
            // Add other fields with the 'sometimes|required' rule as needed
        ];
    }


    public function attributes()
    {
        return [
            'category_id' => 'Category',
            'product_name' => 'Product Name',
            // 'reference' => 'reference',
            'price' => 'Price',
            'title' => 'Title',
            'description' => 'Description',
            'product_details' => 'Product Details',
            'status' => 'Status',
            'image_url_1' => 'Image',
        ];
    }
}
