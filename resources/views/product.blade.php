@extends('layouts.master')
 
@section('e-shop', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')

<body style="background-color:lightgrey;">
  <div class="container">
        <div class="row">
            <div class="col-md-12">
              @foreach ($products as $product)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail"  >
                            <img src="{{$product->imageurl}}" class="img-responsive">
                            <div class="caption">
                               <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>{{$product->name}}</h3>
                                    </div>
                                </div>   
                                <div class="row">
                                    
                                    <div class="col-md-3 col-xs-3 price" style="background-color:silver;">
                                        <h3>
                                            <label>{{$product->price}} <span class="glyphicon glyphicon-euro"></span></label></h3>
                                    </div>
                                 </div>                                    
                                <p>{{$product->description}}</p>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6">
                                        <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Add to Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
             @endforeach
            </div>
        </div>
    </div>