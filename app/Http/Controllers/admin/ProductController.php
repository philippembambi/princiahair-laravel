<?php

namespace App\Http\Controllers\admin;
session_start();

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Flashy;

class ProductController extends Controller
{
    static $_image;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'component' => "admin.components.product.all",
            'categories' => null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.index', [
            'component' => "admin.components.product.add",
            'categories' => null
        ]);
    }
    
    public function uploadFile(Request $request)
    {
        $storeFolder = 'uploads/';
 
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];             
            $targetPath = $storeFolder;
            $targetFile =  $storeFolder. $_FILES['file']['name'];
            move_uploaded_file($tempFile, $targetFile);
            $_SESSION["imageName"] = $_FILES['file']['name'];
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Product::create([
                'category' => $request->product_category,
                'label'=> $request->product_label,
                'available'=> 0,
                'price'=> $request->product_price,
                'desc'=> $request->product_desc,
                'density'=> $request->product_density,
                'length'=> $request->product_length,
                'texture'=> $request->product_texture,
                'usage_delay'=> $request->product_delay,
                'color'=> $request->product_color,
                'elastic_band'=> $request->product_band,
                'a_image'=> $_SESSION["imageName"],
                ]);
        
                Flashy::success($request->product_label." ajouté avec succès !");
                return view('admin.index', [
                    'component' => "admin.components.product.all",
                    'categories' => null
                ]);        
        } catch (Exception $ex) {
            Flashy::error("Error : ".$e->getMessage());
            return redirect()->route('admin.index', [
                'component' => "admin.components.product.add",
                'categories' => null
            ]);
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

?>
