<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResponselistProduct
     */
    public function index()
    {
        $listProduct = Product::all();
        //dd($listProduct);
        return view('index', ['listProduct' => $listProduct]);
        // foreach($listProduct as $value) {
        //     echo $value -> name . "<br>";
        //     echo $value -> price . "<br>";
        //     echo $value -> description . "<br>";
        // }

        // $product = Product::where("price", ">", 70000)
        //            -> orderBy("rate", "ASC")
        //            -> get();
        // dd($product);

        // $product = Product::find(1);
        // $product = Product::where("name", "Quần Jean") -> first();
        // $product = Product::find(1);
        // dd($product);
        
    }

    public function show($id)
    {
        // dd ($id);
        $product = Product::findOrfail($id);
        // Product::withTrashed() -> where("id", $id) -> restore();
        // $product = Product::findOrfail($id);
        return view("product.update", ["product" => $product]);
    }

    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function debug(Request $request)
    {
        dd($request -> all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("product.create");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request -> all());
        //lay du lieu input tu phia client day len server
        $data = $request -> all();
        // dd($data);

        //khoi tao Product
        $productModel = new Product;

        //gan gia tri cho model
        $productModel -> name = $data["name"];
        $productModel -> price = $data["price"];
        $productModel -> image = $data["image"];
        $productModel -> description = $data["description"];
        $productModel -> rate = $data["rate"];
        $productModel -> created_by = 1;
        $productModel -> updated_by = 1;

        //luu model vao database
        if ($productModel -> save()) {
            return view ("product.success", ["id" => $productModel -> id]);
        }

        return view ("product.update", ["product" => $productModel]);
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
    public function update(Request $request)
    {
        $data = $request -> all();
        // dd($data);
        //lay gia tri id
        $id = $data['id'];
        //tim kiem record theo id
        $product = Product::find($id);
        //gan gia tri
        $product -> name = $data["name"];
        $product -> price = $data["price"];
        $product -> image = $data["image"];
        $product -> description = $data["description"];
        $product -> rate = $data["rate"];
        $product -> created_by = 1;
        $product -> updated_by = 1;

        //update vao database
        if ($product -> save()) {
            return view ("product.updatesuccess", ["id" => $product -> id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        if ($product -> delete()) {
            echo "Xoá record có id: " . $id . " thành công";
        } else {
            echo "Xoá dữ liệu thất bại";
        }
    }
}
