<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function showProductPage(){
        //return view('product');
        //$data = DB::table('products')->get();
        //$data = DB::select("select * from products");
        $data = DB::table('product')->get();
        return $data;

    }
}
