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
use App\Models\orderAddress;

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

        ## Bill create code
        $order = $request->all();
        // dd($order);

        order::create($order);
        return redirect()->back()->withStatus('Your Inforamtion Saved👍Successfully!');
    }

    ## Function to show productname and quantity

    public function checkproduct()
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

    ## Function to add orderAddress

    public function addorder(Request $request)
    {
        // dd($request);

        $addorder = DB::table('orders')
        ->leftjoin('order_address', 'orders.id', '=', 'order_address.order_id')
        ->leftjoin('users', 'users.id', '=', 'order_address.user_id')
        ->select('orders.address as order_address', 'users.id as user_id')
        ->get();

        // dd($data['cartno'] , $addorder);

        $orderData = [];

        foreach ($addorder as $order) {

            // already add same address then address not add
            $existingaddress = orderAddress::where('address', $order->order_address)->exists();

            // if not add same address
            if(!$existingaddress){

                // then add new address in database
                $orderData[] = [
                    'address' => $order->order_address,
                ];
            }
        }

        orderAddress::insert($orderData);
        return view('frontend.thank-you');

    }

    // public function ordersummary()
    // {
    //     return view('frontend.order-summary');
    // }
}
