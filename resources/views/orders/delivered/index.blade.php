@extends('layouts.newapp')

@section('content')

@if(count($orders) > 0)
<h4>Delivered</h4>
    <div class="table">
      <div>
        @include('inc.messages')
      </div>
       <table class="table table-hover">
          <thead style="background-color: black;color:whitered">
            <tr>
              <td>Customer Name</td>
                <td>Order name</td>
                <td>Quantity</td>
                <td>Location</td>
                <td>Status</td>
               
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->user->name ?? "null"}}</td>
                    <td>{{$order->product->name ?? "null"}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->location->name ?? "null"}}</td>
                    <td style="color:blue">{{$order->status->name?? "null"}}</td>
                   
                    
                </tr>
            @endforeach
          </tbody>
       </table>  
    </div>
@endsection
@endif

<script>
 
</script>