@extends('layouts.master')
 
@section('Login User', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')
 
    <div style="margin-top:50px" class="logbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><strong>Login</strong></div>
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

                <form method="POST" action="/auth/login"  class="form-horizontal" role="form">
                        {!! csrf_field() !!}
                    <div style="margin-bottom: 45px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control" name="email" value="" placeholder="email">
                        </div>
                     <div style="margin-bottom: 45px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                     <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input "remember" type="checkbox" name="remember" value="1"> <strong class=""> Remember me</strong> 
                                </label>
                            </div>
                        </div>
                     <div style="margin-top:20px" class="form-group">
                            <div class="col-sm-12 controls">
                                <button type="submit" id="btn-login" href="#" class="btn btn-success btn-md btn-block">Login  </button>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div style="border-top: 2px solid#888; padding-top:15px; font-size:14px">
                                 <strong class=""> Don't have an account!</strong> 
                                 <a href="/auth/register">
                                    <strong class=""> Sign Up Here</strong>
                                 </a>
                             </div>    
                        </div>
                    </div>
                    <div class="col-md-12 control">
                        <div style="border-top: 2px  padding-top:12px; font-size:14px">
                           <strong class=""> Hey!</strong> 
                            <a href="/auth/password/email">
                                <strong class=""> Forgot your password?</strong>
                            </a>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>
 
@endsection




