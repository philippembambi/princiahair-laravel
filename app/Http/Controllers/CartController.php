<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartList = null;

        if(!auth()->user())
        {
            $cartList = Cart::with(['product', 'user'])->where("user_ipaddress", request()->ip())->get();
        }
        else {
            $cartList = Cart::with(['product', 'user'])->where("user", auth()->user()->id)->get();   
        }
        //dd($cartList[1]->product->label);
        return response()->json([
            'cart' => $cartList,
            'count' => count($cartList)
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $cartList = null;
        try {
            if(!auth()->user())
            {
                Cart::create([
                    'user_id' => 1,
                    'product_id' => $id,
                    "user_ipaddress" => request()->ip()
                ]);
                $cartList = Cart::with(['product'])->where("user_ipaddress", request()->ip())->get();    
            }
            else {
                Cart::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $id
                ]);
                $cartList = Cart::with(['product'])->where("user_id", auth()->user()->id)->get();       
            }
            return response()->json([
                'cart' => $cartList,
                'count' => count($cartList)
            ]);
        } catch (\Exception $e) {
            return response()->json([
                    "result" => "Error",
                    "Message" => $e->getMessage()]);
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
}
