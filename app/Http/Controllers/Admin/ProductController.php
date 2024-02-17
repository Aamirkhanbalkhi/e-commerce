<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Admin\category;
use App\Models\Admin\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // PRODUCTS
    public function Products()
    {
        $data['products'] = product::with('category')->get();
        // dd($data);
        return view('Admin.product.products', $data);
    }

    // ADD-PRODUCTS
    public function AddProduct()
    {
        $data['categories'] = Category::all();
        // dd($data);
        return view('Admin.product.addproduct', $data);
    }

    // store product function
    public function storeProduct(ProductRequest $req)
    {
        $param = $req->all();
        // Create the product
        $product = Product::create($param);
        // Create directory if it doesn't exist
        $directory = public_path('uploads');
        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0755, true, true);
        }
        // Handle file uploads
        $imageFields = ['image_url_1', 'image_url_2', 'image_url_3', 'image_url_4'];

        foreach ($imageFields as $imageField) {
            if ($req->hasFile($imageField)) {
                $file = $req->file($imageField);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($directory, $fileName);

                // Save the file name in the database for this product
                $product->{$imageField} = $fileName;
                $product->save();
            }
        }

        return redirect()->route('products')->withStatus('Your record has been inserted successfully');
    }

    // Delete product
    public function deleteproduct(product $product)
    {
        $product->delete();
        return redirect()->route('products')->withStatus('your record delete successfully');
    }

    // Edit product
    public function editProduct($product_id)
    {
        $data['product'] = product::where('reference', $product_id)->with('category')->first();
        $categories = Category::all(); // Fetch all categories
        // dd($data);
        return view('Admin.product.edit-product', compact('data', 'categories'));
    }

    // Update product
    public function updateProduct($id, ProductRequest $productRequest)
    {
        $product = Product::find($id);
        $param = $productRequest->all();
        // Handle image uploads
        $imageFields = ['image_url_1', 'image_url_2', 'image_url_3', 'image_url_4'];
        foreach ($imageFields as $imageField) {
            if ($productRequest->hasFile($imageField)) {
                $image = $productRequest->file($imageField);
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $param[$imageField] = $imageName;
            }
        }
        $product->update($param);
        return redirect()->route('products')->withStatus('Your record updated successfully');
    }
}
