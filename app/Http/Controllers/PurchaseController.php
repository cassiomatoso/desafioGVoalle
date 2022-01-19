<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna todos os pedidos de vendas, limitando a listagem a 5 registros
        $purchases = DB::table('purchases')
            ->where('user_id', auth()->id())
            ->join('products', 'products.id', '=', 'purchases.product_id')
            ->join('customers', 'customers.id', '=', 'purchases.customer_id')
            ->select(
                'products.title as products_title', 'products.price as products_price',
                'customers.company as customers_company',
                'purchases.*'
            )
            ->paginate(5);
        return view('purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        
        return view('purchases.create', [
            'products' => Product::all(),
            'customers' => Customer::all()
        ]);
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
            'user_id' => 'required',
            'product_id' => 'required',
            'customer_id' => 'required', 
        ]);

        Purchase::create($request->all());
        return redirect()->route('purchases.index')->with('success', 'Pedido realizado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
        return view('purchases.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit($purchase)
    {
        //
        $purchases = Purchase::FindOrFail($purchase);
        $products = Product::all()->sortByDesc('id');
        $customers = Customer::all()->sortByDesc('id');

        return view('purchases.edit', compact('purchases', 'products', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'customer_id' => 'required', 
        ]);

        $purchase->update($request->all());
        return redirect()->route('purchases.index')->with('success', 'Pedido atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  object  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
        $purchase->delete();
        return redirect()->route('purchases.index')->with('success', 'Pedido deletado.');
    }
}
