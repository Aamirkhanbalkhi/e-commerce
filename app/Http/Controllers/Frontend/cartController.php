<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\Admin\product;


class cartController extends Controller
{
    public function updateQuantity(Request $request)
    {
        // Fetch data from AJAX request

        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Update the quantity in the database

        $product = cart::find($product_id);
        // dd($product);

        if($product){

            $product->quantity = $quantity;
            $product->save();

            return response()->json(['success' => true, 'message' => 'Quantity updated Successfull!']);
        }
            else
            {
                return response()->json(['success' => false, 'message' => 'Product Not found']);
            }
    }
}
