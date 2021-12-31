@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Laravel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>
<body>

 <div class="row" style="margin:20px;"> 
         @foreach($products as $product)  
            <div class="col-sm-3" style="background-color:white;margin:10px;
            padding:10px;">       
                    <tr>
                        <td>{{$product->name}}</td><br>
                        <td><img src="{{ asset('images/')}}/{{$product->image}}"
                         width="200" class="img-fluid" alt=""></td><br>                     
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <br>
                        <div class="button" style="float: right;">
                        <td><a href="{{ route('product.detail',['id'=>$product->id])}}" class="btn btn-danger btn-xs btn-l">Add To Cart</a>
                        </td>
                    </div>
                    </tr>
            </div> 
            @endforeach            
        </div> 
    <br><br>
    <div class="container-fluid">
            <div class="copyright text-center">
              &copy; Copyright <strong>ABC company</strong>. All Rights Reserved
            </div>
            <div class="credits text-center">
              Designed by <a href="https://ABC.com/">ABC Company</a>
            </div>
    </div>

</body>
</html>
@endsection


                    

                