@extends('layouts.newapp')

@section('content')
   <div>
   <h4 style="text-align: center">  {{$customer->name}}</h4>
   <p>Number of Orders : {{$customer->orders->count()}}</p>
   <table class="table table-hover">
    <thead style="background-color: black;color:white">
        <tr>
            <td>Order Name</td>
            <td>Quantity</td>
            <td>Location</td>
        </tr>
    </thead>
   <tbody>
    @forelse ($customer->orders as $order)
    <tr>
        <td>{{$order->product->name}}</td>
        <td>{{$order->quantity}}</td>
        <td>{{$order->location->name}}</td>
       
    </tr>
    @empty
        No Orders
    @endforelse
   </tbody>
   </table>
   
   </div>
@endsection