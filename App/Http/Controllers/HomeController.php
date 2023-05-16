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

    public function edit()
    {
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $productModel = new Product();
        if ($requestMethod=="GET"){
            $productModel->get($_GET["id"]);
            return View::render("home/update.php");
        }else{
            $productModel->update($_POST,$_REQUEST["id"]);
            header("location: /");
        }
    }
}
