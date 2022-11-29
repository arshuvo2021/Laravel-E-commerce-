<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;


class HomeController extends Controller
{
    function HomeIndex(){
        $product= ProductModel::all();

        return view('Home',
            ['ProductData'=>$product]);
   }
}