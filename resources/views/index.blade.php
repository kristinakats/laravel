@extends('layouts.master')
 
@section('Reset password', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')
 

  <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($products as $product)
 
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <img src="{{$product->imageurl}}" class="img-responsive">
                            <img  width: 50;height: 50;>
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>{{$product->name}}</h3>
                                    </div>
                                </div>   
                                <div class="row">
                                    
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>{{$product->price}} EUR</label></h3>
                                    </div>
                                 </div>   

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span>Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>