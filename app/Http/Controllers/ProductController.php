<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $title = "Welcome to our laravel course";
        $description = "This projects created by Dary.";

        $data = [
            "productOne" => "IPhone Pro Max 12",
            "productTwo" => "Samsung Galaxy"
        ];

//        with method
//        return view('products.index')
//            ->with('title', $title);
//        return view('products.index')
//            ->with('data', $data);

//        Directly in the view
        return view('products.index', [
            'data' => $data,
            'description' => $description
        ]);

//        compact method to pass data into view
//        return view('products.index',
//            compact('title', 'description'));
    }

    public function home()
    {
        return "This is Home page";
    }

    public function about()
    {
        return "This is About page";
    }
}
