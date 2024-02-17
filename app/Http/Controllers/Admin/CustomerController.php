<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\customer;

class CustomerController extends Controller
{
    public function customers()
    {
        $data['customers'] = customer::all();

        return view('Admin.customer.customers', $data);
    }

    ## Redirect page on add-customer

    public function addcustomer()
    {
        return view('Admin.customer.add-customer');
    }
        ## add/store customer Function

    public function storecustomer(Request $request)
    {
        ## Validation check

        $validator = Validator::make($request->all(),
        [
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'required',
            'customer_address' => 'required',
            'customer_city' => 'required',
            'customer_state' => 'required',
            'customer_country' => 'required',
            'account_creation_date' => 'required',
            'total_orders' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        ## store customer

        $customer = $request->all();

        customer::create($customer);
        return redirect()->route('customers')->withStatus('Customer Created Successfully!!');
    }

    ## Function to Edit customer

    public function editcustomer($customer_id)
    {
        $data['customer'] = customer::where('id', $customer_id)->first();
        // dd($data);

        return view('Admin.customer.edit-customer', $data);
    }

    ## Function to Update customer

    public function updatecustomer($id, Request $request)
    {
        $param = $request->all();
        unset($param['_token']);
        customer::where('id', $id)->update($param);

        return redirect()->route('customers')->withStatus('Customer Information Upadted Succesfully');
    }

    ## Function to Delete customer

    public function deletecustomer(customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers')->withStatus('Customer Delete Succesfully');
    }
}
