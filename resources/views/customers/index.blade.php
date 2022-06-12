@extends('layouts.newapp')

@section('content')
    <div class="table">
       <table class="table table-hover">
          <thead style="background-color: black;color:white">
            <tr>
                <td>customer name</td>
                <td>customer email</td>
                <td>customer Orders</td>
                <td>Actions</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->orders->count()}}</td>
                    <td>
                      <a href="{{route('customer.delete',$customer->id)}}" class="btn btn-danger">delete</a>
                      <a href="{{route('customer.show',$customer->id)}}" class="btn btn-primary">show</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
       </table>  
    </div>
@endsection