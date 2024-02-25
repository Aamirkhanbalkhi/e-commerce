<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\cart;
use App\Models\User;
use App\Models\wishlist;
use App\Models\order;

class checkController extends Controller
{
    ## Funtion to addBilling means User Information.

    public function addbilling(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'state_country'  => 'required',
        ]);

            if($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            }

        $order = $request->all();
        // dd($order);

        order::create($order);
        return redirect()->back()->withStatus('Your Inforamtion Saved👍Successfully!');
    }

    public function showproduct()
    {
        $data['cartno'] =  cart::where('user_id', auth()->id())->count();
        $data['wishlistno'] =  wishlist::where('user_id', auth()->id())->count();
        $data['user'] = User::first();
        $data['categorys'] = Category::all();


        ## Table products and carts join

        $data['productshow'] = DB::table('products')
        ->join('carts', 'products.id', '=', 'carts.product_id')
        ->select('products.*', 'carts.quantity', DB::raw('products.price * carts.quantity AS updated_price'))
        ->get();

        // dd($data['productshow']);
        return view('frontend.checkout', $data);
    }

    public function ordersummary()
    {
        return view('frontend.order-summary');
    }
}
