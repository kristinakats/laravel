@extends('layouts.master')

 @section('Register User', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')
 
    <div style="margin-top:50px" class="reqbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><strong>Sign Up</strong></div>
            </div>
            <div class="panel-body" >
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <form method="POST" action="/auth/register"  class="form-horizontal" role="form">
                        {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="email" class="control-label col-md-2">Email</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="control-label col-md-2">First Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label col-md-2">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label col-md-2">Confirm Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-2 col-md-10">
                            <button type="submit" id="btn-signup" class="btn btn-success btn-md btn-block"><i class="fa fa-hand-o-right"></i> &nbsp Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
@endsection
 