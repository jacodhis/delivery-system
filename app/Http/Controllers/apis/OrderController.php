<?php

namespace App\Http\Controllers\apis;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\orderRequest;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function store(orderRequest $request){
        Order::create([
            'user_id'=>$request->customer_id,
            'quantity'=>$request->quantity,
            'product_id'=>$request->product_id,
            'location_id'=>$request->depotLocationId,
            'status_id'=>1
        ]);
    }
}
