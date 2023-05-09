<?php

namespace App\Http\Controllers;

use View\View;
use Models\Product;



class HomeController
{
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
        if ($requestMethod == "POST") {
            $productModel->insert([
                "name" => $_POST["name"],
                "description" => $_POST["description"],
                "price" => $_POST["price"]
            ]);
            header("location: /");
        }
        return View::render("home/create.php");
    }

    public function edit($id)
    {
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $productModel = new Product();
        if ($requestMethod == "POST") {
            $productModel->update($id,[
                "name" => $_POST["name"],
                "description" => $_POST["description"],
                "price" => $_POST["price"]
            ]);
            header("location: /");
        }

        return View::render("home/update.php");
    }
}
