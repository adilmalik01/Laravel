<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function About()
    {
        return view("about");
    }


    public function AllProducts()
    {

        $products = [
            [
                "product_title" => "Wireless Headphones",
                "product_price" => "$99.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Over-ear"
            ],
            [
                "product_title" => "Smartphone 12 Pro",
                "product_price" => "$799.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Smartphone"
            ],
            [
                "product_title" => "Gaming Laptop",
                "product_price" => "$1,299.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Laptop"
            ],
            [
                "product_title" => "Bluetooth Speaker",
                "product_price" => "$59.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Portable Speaker"
            ],
            [
                "product_title" => "4K Ultra HD TV",
                "product_price" => "$499.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Television"
            ],
            [
                "product_title" => "Bluetooth Speaker",
                "product_price" => "$59.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Portable Speaker"
            ],
            [
                "product_title" => "4K Ultra HD TV",
                "product_price" => "$499.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Television"
            ],
            [
                "product_title" => "Bluetooth Speaker",
                "product_price" => "$59.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Portable Speaker"
            ],
            [
                "product_title" => "4K Ultra HD TV",
                "product_price" => "$499.99",
                "product_image" => "https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-madebymath-90946.jpg&fm=jpg",
                "format" => "Television"
            ]
        ];



        return view("products", compact("products"));
        // return view("products", [  "name" => $my_name , "age" => $my_age  ]  );
    }
}
