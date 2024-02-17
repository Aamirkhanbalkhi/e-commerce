<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'category_id' => 'required',
            'sub_category_name' => 'required',
            'sub_category_slug' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'sub_category_name' => 'Category Name',
            'sub_category_slug' => 'Category Slug',
        ];
    }

    protected $stopOnFirstFailure = true;
}
