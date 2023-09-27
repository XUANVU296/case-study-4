<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('study.customer.index', compact(['customers']));
    }
    public function edit($id) {
        $customers = Customer::find($id);
        return view('study.customer.edit', compact(['customers','id']));
    }
    public function create() {
        return view('study.customer.create');
    }
    public function store(Request $request) {
        $customers = new Customer();
        $customers->name = $request->name;
        $customers->email = $request->email;
        $customers->phone = $request->phone;
        $customers->address = $request->address;
        $customers->save();
        return redirect()->route('customer.index');
    }
    public function show($id) {
        $customers = Customer::find($id);
        return view('study.customer.show', compact(['customers','id']));
    }
}
