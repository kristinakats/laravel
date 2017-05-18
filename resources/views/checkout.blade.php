@extends('layouts.master')
 
@section('Checkout Order', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 
    <div style="margin-top:50px" class="checkoutbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><b>Order Form</b></div>
            </div>
            <div class="panel-body" >
        
                <form id="myForm" method="POST" action="/order/save"  class="form-horizontal" role="form">
                        {!! csrf_field() !!}
                    
                    <div class="form-group">
                        <label for="first_name" class="control-label col-md-2">First Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" >
                        </div>
                    </div>    
                     <div class="form-group">
                        <label for="last_name" class="control-label col-md-2">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" >
                        </div>
                    </div>  
                      <div class="form-group">
                        <label for="city" class="control-label col-md-2">City</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="city" placeholder="City" >
                        </div>
                    </div> 
                     <div class="form-group">
                        <label for="address" class="control-label col-md-2">Address</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" placeholder="Address" >
                        </div>    
                    </div>
                     <div class="form-group">
                        <label for="postcode" class="control-label col-md-2">PostCode</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="postcode" placeholder="PostCode" >
                        </div>    
                    </div>
                     <div class="form-group">
                        <label for="telephone_number" class="control-label col-md-2">Telephone Number</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="telephone_number" placeholder="Telephone Number" >
                        </div> 
                     </div>
                     <div class="form-group">
                        <label for="card_number" class="control-label col-md-2">Card Number<img src="card.png"></label>                    
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="card_number" placeholder="Card Number" >
                        </div>
                     </div>   
                    <div class="form-group">
                        <!-- Button -->
                          <div class="col-md-offset-2 col-md-10">
                           <button type="submit" data-target="ordero" class="btn btn-success"><i class="fa fa-hand-o-right"></i> &nbsp Send</button>
                         </div>
                    </div>
              
                </form>
            </div>
        </div>
    </div>
 
@endsection