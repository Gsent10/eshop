<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if(!$request->get('productId')){
            $userItems = Cart::where('user_id', auth()->user()->id)->sum('quantity');

            return [
                'message' => 'Cart items returned only',
                'items' => $userItems
            ];
        }

        // Getting product details
        $prod = Product::where('id', $request->get('productId'))->get();

        $product = $prod['0'];

        // Check if product is already in Cart
        $productAlreadyInCart = Cart::where('product_id', $request->get('productId'))->pluck('id');

        if($productAlreadyInCart->isEmpty()){

            // Adding product to cart if its not in cart already
            $cart = Cart::create([
                'product_id' => $product['id'],
                'quantity' => 1,
                'price' => $product['sale_price'],
                'user_id' => auth()->user()->id
            ]);
        }
        else{
            // Incrementing Product quantity
            $cart = Cart::where('product_id', $request->get('productId'))->increment('quantity');
        }
    
        // Check User cart items
        $userItems = Cart::where('user_id', auth()->user()->id)->sum('quantity');

        if($cart){
            return [
                'message' => 'Cart Updated',
                'items' => $userItems
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function itemsCheckout()
    {

        $cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();

        $finalData = [];
        $sum_total = 0;

        if(isset($cartItems)) {

            foreach($cartItems as $item){

                if($item->product){
                
                    foreach($item->product as $cartProduct){

                        if($cartProduct->id == $item->product_id){

                            $finalData[$item->product_id]['id'] = $item->id;
                            $finalData[$item->product_id]['name'] = $cartProduct->name;
                            $finalData[$item->product_id]['sale_price'] = $item->price;
                            $finalData[$item->product_id]['quantity'] = $item->quantity;
                            $finalData[$item->product_id]['total'] = $item->price * $item->quantity;
                            $sum_total += $finalData[$item->product_id]['total'];
                            $finalData['final_amount'] = $sum_total;
                        }
                    }                   
                }               
            }
        }
        
        return response()->json($finalData);
    }
}
