<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function createProduct(){
        return view('createProduct');
    }

    public function storeProduct(ProductRequest $request){
        return $request;
    }
}
