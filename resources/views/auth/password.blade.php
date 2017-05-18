@extends('layouts.master')
 
@section('Password User', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('footer')
 
    <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><strong></strong></div>
            </div>
            <div class="panel-body" >
                    @if (count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <form method="POST" action="/password/email"  class="form-horizontal" role="form">
                        {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="row"></div>     
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" id="btn-signup" class="btn btn-success btn-sm btn-block"><i class="fa fa-hand-o-right"></i> Send Password Reset Link</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
@endsection
 