@extends('layout')
@section('content')
<div class="row">
    <h2>My Order</h2>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>OrderID</td>
                        <td>Date Time</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->cid}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td><a href="{{ route('editProduct',['id'=>$product->id])}}" class="btn btn-warning btn-xs">Edit</a>
                         <a href="{{ route('deleteProduct',['id'=>$product->id])}}"
                         class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection