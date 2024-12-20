<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PosController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:pos']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Point of Sale';
        $category = Category::with('products')->withCount('products')->get();
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return view('pages.pos', compact('title', 'category', 'cart', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function updateCart(Request $request)
    {
        try {
            $cart = session()->get('cart', []);
            $product =  Product::find($request->product_id);
            // return response()->json(['status' => 'success', 'message' => 'Product found', 'data' => $request->all()], 200);
            if ($request->action == 'increase') {
                if (isset($cart[$request->product_id])) {
                    $cart[$request->product_id]['quantity'] = $request->quantity;
                } else if ($request->quantity > 0) {
                    $cart[$request->product_id] = [
                        'id' => $product->id,
                        'name' => $product->name,
                        'price' => $product->price,
                        'image' => $product->image,
                        'quantity' => $request->quantity
                    ];
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Invalid quantity'], 422);
                }
                session()->put('cart', $cart);
            } else if ($request->action == 'decrease') {
                if ($cart[$request->product_id]['quantity'] > 1) {
                    $cart[$request->product_id]['quantity'] = $request->quantity;
                } else {
                    unset($cart[$request->product_id]);
                }
                session()->put('cart', $cart);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Invalid action'], 422);
            }
            return response()->json(['status' => 'success', 'message' => 'Cart updated successfully', 'cart' => $cart], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function refreshCart()
    {
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return view('components.cart', compact('cart', 'total'))->render();
    }

    public function refreshPos()
    {
        $cart = session()->get('cart', []);
        $category = Category::with('products')->withCount('products')->get();
        return view('components.pos', compact('cart', 'category'))->render();
    }

    public function clearCart()
    {
        session()->forget('cart');
        return response()->json(['status' => 'success', 'message' => 'Cart cleared successfully'], 200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
