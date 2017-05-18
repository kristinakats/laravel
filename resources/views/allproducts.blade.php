@extends('layouts.master')
 
@section('AllProd', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')
<style>
body { 
    padding-top: 70px;
     }
</style>

<body style="background-color:lightgrey;">
  <div class="container">
  <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
        <div class="row">

            <div class=" col-md-12">
              @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4">

                        <div class="thumbnail"  >
                            <img src="{{$product->imageurl}}" class="img-responsive" style="width:250px;height:250px" >
                            <div class="caption">
                               <div class="row">
                                    <div class="col-md-12">
                                        <h3>{{$product->name}}</h3>
                                    </div>
                                </div>   
                                <div class="row">
                                    
                                    <div class="col-md-12" style="background-color:silver;">
                                        <h3>
                                            <label>{{$product->price}} <span class="glyphicon glyphicon-euro"></span></label></h3>
                                    </div>
                                 </div>   
                                
                                

                                    
                                <p>{{$product->description}}</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="/addProduct/{{$product->id}}/{{$product->price}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Add to Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
             @endforeach
            </div>
        </div>
    </div>