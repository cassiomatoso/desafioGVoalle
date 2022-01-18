<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna todos os clientes, limitando a listagem a 5 registros
        return view('customers.index', [
            'customers' => DB::table('customers')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'company' => 'required',
            'email' => 'required',
            'cnpj' => 'required',
            'address' => 'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Cliente cadastrado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  object  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  object  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  object  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //        
        $request->validate([
            'company' => 'required',
            'email' => 'required',
            'cnpj' => 'required',
            'address' => 'required'
        ]);

        $customer::update($request->all());
        return redirect()->route('customers.index')->with('success', 'Cliente cadastrado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  object  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($customer)
    {
        //
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Cliente deletado');
    }
}
