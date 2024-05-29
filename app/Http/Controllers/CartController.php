<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('carrito.index', ['cartItems' => $cartItems]);
    }

    public function store(Request $request)
    {
        $pizza = Pizza::find($request->id);
        $cart = Cart::instance('cart')->add($pizza->id, $pizza->nombre, $request->quantity, $pizza->precio);
        return redirect()->route('carrito.index')->with('info', 'Pizza agregada al carrito');
    }

    public function increaseQuantity(Request $request)
    {
        $item = Cart::instance('cart')->get($request->rowId);
        $qty = $item->qty + 1;
        Cart::instance('cart')->update($request->rowId, $qty);
        
        return redirect()->route('carrito.index');
    }

    public function decreaseQuantity(Request $request)
    {
        $item = Cart::instance('cart')->get($request->rowId);
        $qty = $item->qty - 1;
        Cart::instance('cart')->update($request->rowId, $qty);
        
        return redirect()->route('carrito.index');
    }

    public function removeItem(Request $request)
    {
        Cart::instance('cart')->remove($request->rowId);
        return redirect()->route('carrito.index');
    }

    public function destroy()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('carrito.index');
    }

}
