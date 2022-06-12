<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Status;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pending()
    {
        
        $statuses = Status::get();
        $orders =  Order::where('status_id',1)
                        ->orderByDesc('created_at')
                         ->paginate();
       
          return view('orders.index',compact('orders','statuses'));
       
    }
    public function loading()
    {

        $statuses = Status::get();
        $orders =  Order::where('status_id',2)
                         ->paginate();
            return view('orders.loading.index',compact('orders','statuses'));
        }
    public function dispatched()
    {
        $statuses = Status::get();
        $orders =  Order::where('status_id',3)
                         ->paginate();
       
            return view('orders.dispatched.index',compact('orders','statuses'));
    
       
    }
    public function delivered()
    {
        $statuses = Status::get();
        $orders =  Order::where('status_id',4)
                         ->paginate();
       
            return view('orders.delivered.index',compact('orders','statuses'));
       
      
    }

   
    public function storeChangeStatus(Request $request)
    {
        if($request->status_id == 5 || $request->status_id == 6){
            return back()->with('error','status not allowed');
        }else{
            $order = Order::findorFail($request->order_id);
            $order->status_id = $request->status_id;
            $order->save();
            return back()->with('success','Status order changed successfully');
        }
       
           


      
    }

    
}
