@extends('layouts.newapp')

@section('content')


 @if(count($orders) > 0)

<h3>Dispatched</h3>
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
                <td>Actions</td>


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
                    <td>
                      <form action="{{route('order.status.change')}}" method="post">
                        @csrf
                            <select name="status_id" >
                              @foreach ($statuses as $status)
                                <option value="{{$status->id}}">{{$status->name}}</option>
                              @endforeach
                          </select>
                          <input type="hidden" name="order_id" value="{{$order->id}}">
                        <button type="submit" class="btn btn-primary btn-sm">change</button>
                      </form>
                    
                  </td>
                    
                </tr>
            @endforeach
          </tbody>
       </table>  
    </div>
@endsection


@endif


<script>
 
</script>