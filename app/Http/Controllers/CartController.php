<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Crypt;

use Carbon\Carbon;

use App\SaleProduct;
use App\PhoneDetail;
use App\DoneSale;
use App\FeaturedDetail;

class CartController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $decrypt_id = Crypt::decrypt($id);
        $product = SaleProduct::find($decrypt_id);
        $model = $product->model;
        $color = $product->color;
        if($product->category_type == 'Smartphone' || $product->category_type == 'Tablet') {
            $price = PhoneDetail::where('model', $model)->where('color', $color)->value('price');
        }
        else {
            $price = FeaturedDetail::where('model', $model)->where('color', $color)->value('price');
        }
        $name = $product->category.",".$product->brand.",".$product->model.",".
        $product->color;
        Cart::add($decrypt_id, $name, 1, $price);
        // Cart::instance('wishlist')->destroy();

        return redirect("/");
    }

    public function update(Request $request, $id)
    {
        //
        Cart::update($id, $request->qty);
        return back();
    }

    public function destroy($id)
    {
        //
    }

    public function doCheckOut() {
        $date = Carbon::now();
        $day = Carbon::parse($date)->format('d');
        $month = Carbon::parse($date)->format('F');
        $year = Carbon::parse($date)->format('Y');
        $m_y = $month . " " . $year;
        $carts = Cart::content();
        $qty = 0;
        $id = 0;
        foreach($carts as $cart) {
            $id = $cart->id;
            $qty = $cart->qty;
            $sale_qty = SaleProduct::where('id', $id)->value('quantity');
            $category_type = SaleProduct::where('id', $id)->value('category_type');
            if($sale_qty <= $qty) {
                $new_qty = 0;
            }
            else {
                $new_qty = $sale_qty - $qty;
            }

            SaleProduct::where('id', $id)->update([
                'quantity' => $new_qty,
            ]);

            $e_value = explode(',', $cart->name);
            $model = $e_value[2];
            $color = $e_value[3];

            if($category_type == 'Smartphone' || $category_type == 'Tablet') {
                $price = PhoneDetail::where('model', $model)->where('color', $color)->value('price');
            }
            else {
                $price = FeaturedDetail::where('model', $model)->where('color', $color)->value('price');
            }
            $real_price = $qty * $price;

            $value = SaleProduct::where('id', $cart->id)->first();
            $user = \Auth::user();
            $name = $user->name;
            $email = $user->email;
            DoneSale::create([
                'name' => $name,
                'email' => $email,
                'category_type' => $value->category_type,
                'category' => $value->category,
                'brand' => $value->brand,
                'model' => $value->model,
                'color' => $value->color,
                'quantity' => $qty,
                'price' => $real_price,
                'image' => $value->image,
                'day' => $day,
                'month_year' => $m_y,
            ]);

            Cart::destroy();
            Cart::instance('wishlist')->destroy();
        }

        return redirect('/');
    }
}
