<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json($customer);

    }

    function getCustomerbyId($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer);
    }

    function update(Request $request, $id)
    {
        $customer= Customer::find($id);
        $customer->update($request->all());
        return response()->json($customer);
    }
    function delete($id){
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json(null);
    }
}
