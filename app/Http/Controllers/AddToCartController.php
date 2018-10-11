<?php

namespace App\Http\Controllers;

use App\AddToCart;
use App\SaleProduct;
use App\Cost;

use Illuminate\Http\Request;

class AddToCartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //

    }


    public function create($id)
    {
        //
        $user_id = \Auth::user()->id;
        $saleproduct = SaleProduct::find($id);
        $price = Cost::where('sale_or_service', 0)
        ->where('model', $saleproduct->model)
        ->where('color', $saleproduct->color)
        ->value('price');
        \DB::table('add_to_carts')->insert([
            'user_id' => $user_id,
            'category' => $saleproduct->category,
            'brand' => $saleproduct->brand,
            'model' => $saleproduct->model,
            'color' => $saleproduct->color,
            'price' => $price,
            'quantity' => 1,
        ]);
        return redirect('add-to-cart/show/' . $user_id);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $cart_products = AddToCart::where('user_id', $id)->get();

        return view('add-to-cart', compact('cart_products'));
    }

    public function edit(AddToCart $addToCart)
    {
        //
    }

    public function update(Request $request, AddToCart $addToCart)
    {
        //
    }

    public function destroy(AddToCart $addToCart)
    {
        //
    }
}
