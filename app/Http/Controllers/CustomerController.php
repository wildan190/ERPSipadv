<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
    	return view('Admin.all_customers',compact('customers'));
    }

    public function create()
    {
        return view('Admin.add_customer');
    }

    public function store(Request $request){
    	
    	$data=new Customer;
    	$data->name= $request->name;
    	$data->email= $request->email;
        $data->company = $request->company;
    	$data->address = $request->address;
    	$data->phone = $request->phone;
        $data->save();
        return Redirect()->route('customer.create');
    }
}