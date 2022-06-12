@extends('layouts.newapp')

@section('content')
    <div class="table">
       <table class="table table-hover">
          <thead style="background-color: black;color:white">
            <tr>
                <td>product name</td>
                <td>product description</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                </tr>
            @endforeach
          </tbody>
       </table>  
    </div>
@endsection