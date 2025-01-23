<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function About()
    {
        return view("about");
    }



    public  function updateProduct(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $product->product_name = $request->productName;
        $product->product_price = $request->productPrice;
        $product->product_details = $request->productDetails;
        $product->product_Category = $request->productCategory;
        $product->product_stock =  $request->productStock;





        $product->save();

        return redirect("/products")->with("success", "");
    }




    public function EditProduct($id)
    {

        $product = Product::findOrFail($id);
        return view("editProduct", compact("product"));
    }


    public function AddProduct(Request $request)
    {

        $product = new Product();
        $product->product_name = $request->productName;
        $product->product_price = $request->productPrice;
        $product->product_details = $request->productDetails;
        $product->product_Category = $request->productCategory;
        $product->product_stock =  $request->productStock;

        if ($request->hasFile("productImage")) {
            $imagePath = $request->file("productImage")->store("products", "public");
        };

        $product->image = $imagePath;




        $product->save();

        return view("confirm");
    }



    public function AllProducts()
    {
        $products = Product::all();
        return view("products", compact("products"));
    }



    public function DeleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("/products")->with("success", "");
    }


}
