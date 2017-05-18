@extends('layouts.master')
 
@section('List', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')
    @parent
@endsection

<style>
body {
 padding-top: 70px;
  }
  .img-center {margin:0 auto;}
</style>
<body style="background-color:lightgrey;">
 
    <div class="row">
        <div class="col-md-10">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">Order Id</th>
                    <th class="text-center">Date of Order</th>
                    <th class="text-center">Product</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Price</th>
                </tr>
                </thead>
                @foreach($orders as $order)
                             
                     @foreach($order->orderItems as $item)
                                 <tr>
                                  <td class="col-md-2 text-center">{{$order->id}}</td>
                                   <td class="col-md-4 text-center">{{$order->created_at}}</td>
                                    <td class="col-md-4 "><img class="img-responsive img-center" src="{{$item->product->imageurl}}" style="width: 100px; height: 72px;"> </a></td>
                                     <td class="col-md-2 text-center"> {{$item->quantity}}</td> 
                                      <td class="col-md-4 text-center"> {{$item->order_price*$item->quantity}}<span class="glyphicon glyphicon-euro"></span></td>
                                                
                                 </tr>
                                
                     @endforeach
                     <tr>
                     <td class="col-md-1" style="background-color:#C0C0C0;"></td>
                     <td class="col-md-1" style="background-color:#C0C0C0;"></td>
                     <td class="col-md-1" style="background-color:#C0C0C0;"></td>
                     <td class="col-md-1" style="background-color:#C0C0C0;"></td>
                     <td class="col-md-1" style="background-color:#C0C0C0;"><strong>Total= {{$order->total_paid}}<span class="glyphicon glyphicon-euro"></span></strong></td>
                     </tr>        
             @endforeach
             <h1> THANK YOU! your new order number is {{$order->id}} </h1>  
              <h2> All your orders</h2>
            </table>
        </div>
    </div>
