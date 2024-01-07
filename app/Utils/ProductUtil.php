<?php
namespace App\Utils;
use App\Models\Product;

class ProductUtil{

    public static $menuData = [
    ];
    public $data;
    public $topProduct;

    public function __construct()
    {
        $this->data = Product::all();
    }

    public function getTopProducts() : object
    {
        return Product::limit(12)->get();
    }

    public function getBestSellingProducts() : object
    {
        return Product::where("status", "best selling")->limit(12)->get();
    }

    public function getPromoProducts() : object
    {
        return Product::where("status", "promo")->limit(4)->get();
    }

    public function getNewalProducts() : object
    {
        return Product::where("status", "newal")->get();
    }

    public function getRelatedProducts() : object
    {
        return Product::limit(6)->get();
    }

}
?>
