<?php

namespace App\Http\Controllers\apis;

use App\Models\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::paginate(10);
        return ProductResource::collection($products);
    }
    public function show(product $product)
    {
       return new ProductResource($product);
    }

}
