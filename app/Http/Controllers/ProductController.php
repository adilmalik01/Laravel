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

    // public function AllProducts()
    // {
    // $products = [
    //     [
    //         "product_title" => "Wireless Headphones",
    //         "product_price" => "$99.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Over-ear"
    //     ],
    //     [
    //         "product_title" => "Smartphone 12 Pro",
    //         "product_price" => "$799.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Smartphone"
    //     ],
    //     [
    //         "product_title" => "Gaming Laptop",
    //         "product_price" => "$1,299.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Laptop"
    //     ],
    //     [
    //         "product_title" => "Bluetooth Speaker",
    //         "product_price" => "$59.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Portable Speaker"
    //     ],
    //     [
    //         "product_title" => "4K Ultra HD TV",
    //         "product_price" => "$499.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Television"
    //     ],
    //     [
    //         "product_title" => "Bluetooth Speaker",
    //         "product_price" => "$59.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Portable Speaker"
    //     ],
    //     [
    //         "product_title" => "4K Ultra HD TV",
    //         "product_price" => "$499.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Television"
    //     ],
    //     [
    //         "product_title" => "Bluetooth Speaker",
    //         "product_price" => "$59.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Portable Speaker"
    //     ],
    //     [
    //         "product_title" => "4K Ultra HD TV",
    //         "product_price" => "$499.99",
    //         "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
    //         "format" => "Television"
    //     ]
    // ];
    // Api Call 
    // $response = Http::get("https://fakestoreapi.com/products");

    // $data =  $response->json();


    // return view("products", compact("data"));
    // return view("products", [  "name" => $my_name , "age" => $my_age  ]  );
    // }
}
