<?php

namespace App\Http\Controllers;
use View\View;
use Models\Product;



class HomeController {
    public function index() 
    {
       $productModel = new Product();
    //    $productModel = [
    //     "name" => "abc"
    //    ];
       $products = $productModel->get();
        View::render("home/index.php", [
            "products" => $products
        ]);
    }

    public function create() 
    {
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $productModel = new Product();
        if ($requestMethod == "POST")
        {
            print_r($_POST);
            $productModel -> insert($_POST);
        }
         return View::render("home/create.php"); 
    }
}