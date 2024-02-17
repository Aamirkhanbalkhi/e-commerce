<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\seller;

class OrderController extends Controller
{
    public function order()
    {
        return view('Admin.order.orders');
    }

    public function orderdetails()
    {
        return view('Admin.order.order-detail');
    }

    ## Function to Show sellers

    public function sellers()
    {
        $data['sellers'] = seller::all();

        return view('Admin.order.sellers', $data);
    }

    ## Function to redirect add seller page

    public function addseller()
    {
        return view('Admin.order.add-seller');
    }

    ## Function to add/store seller Information

    public function storeseller(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'seller_name' => 'required',
            'seller_email' => 'required|email',
            'seller_phone' => 'required',
            'seller_storename' => 'required',
            'seller_address' => 'required',
            'seller_products' => 'required',
            'seller_city' => 'required',
            'seller_state' => 'required',
            'account_creation_date' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $seller = $request->all();
        // print_r($seller);exit;

        seller::create($seller);
        return redirect()->route('sellers')->withStatus('Seller Created !');
    }

    ## Function to redirect edit seller page

    public function editseller($seller_id)
    {
        $data['seller'] = seller::where('id', $seller_id)->first();
        // dd($data);

        return view('Admin.order.edit-seller', $data);
    }

    ## Function to update seller

    public function updatesller($id, Request $request)
    {
        $param = $request->all();
        unset($param['_token']);
        seller::where('id', $id)->update($param);

        return redirect()->route('sellers')->withStatus('Sellers Updated');
    }

    ## Function to delete seller

    public function deletseller(seller $seller)
    {
        $seller->delete();

        return redirect()->back()->withStatus('Seller Information has been Delete');
    }
}
