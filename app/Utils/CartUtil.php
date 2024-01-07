<?php
namespace App\Utils;
use App\Models\Cart;

class CartUtil{

    public static $menuData = [
    ];
    public $data;
    public $cart;
    public $count;

    public function __construct()
    {
        if(!auth()->user())
        {
            $this->cart = Cart::with(['product', 'user'])->where("user_ipaddress", request()->ip())->get();
            $this->count =count($this->cart);
        }
        else {
            $this->cart = Cart::with(['product', 'user'])->where("user_id", auth()->user()->id)->get();   
            $this->count =count($this->cart);
        }
    }
}
?>
