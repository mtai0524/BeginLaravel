<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(10);
        return view('product', compact('product'));
    }
    public function getProductDetail($id=null)
    {
        $prod = Product::where("ProductId", $id)->first();
        // $prod = Product::paginate(20);
        return view('productdetail', compact('prod'));
    }
    public function addProd()
    {
        $category = Category::all();
        return view('addproduct', compact('category'));
    }
    public function insertProduct(Request $r)
    {
        $filename = "";
        if($r->file('fileUpLoad')->isValid()){
            $filename = $r->fileUpLoad->getClientOriginalName();
            $dir = "images/";
            $target_file = $dir . $filename;
            move_uploaded_file($_FILES["fileUpLoad"]["tmp_name"], $target_file);
            // $r->fileUpLoad->move('images/', $filename);
        }

        $product = Product::create([
            'ProductName' => $r->productname,
            'Unit' => $r->unit,
            'Price' => $r->price,
            'CategoryId' => $r->categories,
            'Img' => $filename
        ]);
        $product = Product::paginate(20);
        return view('product', compact('product'));
    }
    public function listProduct()
    {
        $product = Product::paginate(5);
        $category = Category::all();
        
        return view('productlist', compact('product', 'category'));
    }
    public function deleteProduct($id)
    {
        $record = Product::where("ProductId", $id)->first();
        if(file_exists(public_path("images/".$record->Img))){
            unlink(public_path("images/".$record->Img));
        }
        Product::where("ProductId", $id)->delete();
        $product = Product::paginate(10);
        return view('productlist', compact('product'));
    }
}
