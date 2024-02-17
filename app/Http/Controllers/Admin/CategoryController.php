<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Admin\category;
use App\Models\Admin\subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //ADD-CATEGORY FUNCTION
    public function AddCategory()
    {
        return view('Admin.category.addcategory');
    }
    //store-CATEGORY FUNCTION
    public function storeCategory(CategoryRequest $req)
    {
        $param = $req->all();
        // dd($param);
        Category::create($param);
        return redirect()->route('categries')->withStatus("Your record added successfully");
    }

    // CATEGRIES FUNCTION
    public function Categries()
    {
        $data['categories'] = Category::all();
        // dd($data);
        return view('Admin.category.categries', $data);
    }

    // edit category function
    public function editcategory($categroy_id)
    {
        // dd($categroy_id);
        $data['category'] = category::where('category_slug', $categroy_id)->first();
        // dd($data);
        return view('Admin.category.edit-category', $data);
    }

    // update category function
    public function updatecategory($id, CategoryRequest $req)
    {
        $param = $req->all();
        unset($param['_token']);
        category::where('id', $id)->update($param);
        return redirect()->route('categries')->withStatus("Your record Update successfully");
    }
    // DELETE CATEGORY Function
    public function deletecategory(category $category)
    {
        $category->delete();
        return redirect()->route('categries')->withStatus("Your record delete successfully");
    }

    //ADD-SUBCATEGORY FUNCTION
    public function AddSubCategory()
    {
        $data['categories'] = Category::all();
        // dd($data);
        return view('Admin.Subcategory.addsubcategory', $data);
    }

    // Store Sub-category function
    public function storeSubCategory(SubCategoryRequest $req)
    {
        // dd($req);
        $param = $req->all();
        subcategory::create($param);
        // dd($param);
        return redirect()->route('subcategries')->withStatus("Your record added successfully");
    }

    // SUBCATEGRIES FUNCTION
    public function SubCategries()
    {
        $data['subcateroy'] = subcategory::with('category')->get();
        return view('Admin.Subcategory.subcategries', $data);
    }

    // edit subcategory
    public function editsubcategory($subcategroy_id)
    {
        $data['subcategory'] = Subcategory::where('sub_category_slug', $subcategroy_id)->with('category')->first();
        $categories = Category::all(); // Fetch all categories
        return view('Admin.Subcategory.edit-subcategory', compact('data', 'categories'));
    }

    // update sub-category function
    public function updatesubcategory($id, SubCategoryRequest $req)
    {
        $param = $req->all();
        unset($param['_token']);
        subcategory::where('id', $id)->update($param);
        return redirect()->route('subcategries')->withStatus("Your record update successfully");
    }

    // DELETE SUBCATEGORY Function
    public function deletesubcategory(subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategries')->withStatus("Your record delete successfully");
    }
}
