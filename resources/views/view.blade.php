@extends('layouts.master')
 
@section('Cart', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')
    @parent
@endsection
<style>

  .img-center {margin:0 auto;}
</style>

<body style="background-color:lightgrey;">
    <div class="row">
        <div class="col-sm-12 ">
            <table class="table table-bordered">
                <thead>
                <tr>

                    <th class="text-center" style="background-color:gray;">Product</th>
                    <th></th>
                    <th class="text-center"></th>
                    <th class="text-center" style="background-color:gray;">Quantity</th>
                    <th></th> 
                    <th class="text-center" style="background-color:gray;">Price</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left"> <img class="img-responsive img-center" src="{{$item->product->imageurl}}" style="width: 100px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{$item->product->name}}</a></h4>
                                </div>
                            </div></td>
                        <td class="col-md-1 text-center" >
                        </td>
                        <td></td>
                         <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href="/increaseItem/{{$item->product->id}}/{{$item->product->price}}"> + </a>
                                <input class="cart_quantity_input"  name="quantity" value="{{$item->quantity}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href="/decreaseItem/{{$item->product->id}}/{{$item->product->price}}"> - </a>
                            </div>
                        </td>
                        <td class="col-md-1 text-center"></td>
                        <td class="col-md-1 text-center"><strong>{{$item->product->price*$item->quantity}} <span class="glyphicon glyphicon-euro"></span> </strong></td>
                        <td class="col-md-1">
                            <a href="/deleteItem/{{$item->id}}"> <button type="button" class="btn btn-danger">
                                    <span class="fa fa-remove"></span> Delete
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
 
                <tr>
                    <th style="background-color:#C0C0C0;"><h3><strong>Free delivery</strong></h3></th>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td class="text-center"><h2>Total Price</h2></td>
                    <td class="text-right"><h3><strong>{{$total}} <span class="glyphicon glyphicon-euro"></span></strong></h3></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <a href="allproducts"> <button type="button" class="btn btn-success">
                                <span class="fa fa-shopping-cart"></span> Continue Shopping
                            </button>
                        </a>
                        </td>
                    <td></td>    
                    <td><a href="checkout"> <button type="button" class="btn btn-success">
                      Checkout </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
  