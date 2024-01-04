<?php
namespace App\Utils;
use App\Models\Category;

class CategoryUtil{

    public static $menuData = [
    ];
    public $data;

    public function __construct()
    {
        $this->data = Category::all();
    }

}
?>
