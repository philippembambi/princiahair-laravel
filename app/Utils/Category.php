<?php
namespace App\Utilities;
use App\Models\Category as Categories;

class Category{

    public static $menuData = [
        
    ];

    public function __construct()
    {
        $categories = Categories::all();
        $this->data = $categories;
    }

}
?>
