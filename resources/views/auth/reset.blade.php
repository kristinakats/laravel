@extends('layouts.master')
 
@section('Reset password', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')
 
    <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><strong>Reset Form</strong></div>
            </div>
<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="form-group">
        <label for="email" class="col-md-3 control-label">Email</label>
        <div class="col-md-9">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-md-3 control-label">Password</label>
        <div class="col-md-9">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="col-md-3 control-label">Confirm Password</label>
        <div class="col-md-9">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
        </div>
    </div>

    <div>
        <div class="col-md-offset-3 col-md-9">
          <button type="submit" class="btn btn-success btn-sm btn-block">
            Reset Password
          </button>
        </div>  
    </div>
</form>