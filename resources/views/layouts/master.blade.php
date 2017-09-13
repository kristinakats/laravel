<html>
<head>
    <title>Laravel eshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="/css/style.css">
</head>
<style>

 body{
    font-family:"Poiret one";
    text-align: center;
    font-size: 13px;
    background-color:lightgray;
    
    }
li,ul{
    font-family:  "Poiret one";
    font-size: 18px;
}
footer {
  height: 280px;
  margin: 0 auto;
  color: #fff;
  clear: both;
  padding: 2em 2em;
  background: black;
  position: relative;
  top: 508px;
  width: 100%;

}
.site-foo {
      padding-top: 0px;
      padding-bottom: 200px;
      width: 100%;
  }
img.logo{
    position: relative;
    left: -400px;
}
img.logo2{
    position: relative;
    left: -150px;
}
body { padding-top: 100px; }
 

</style>
<body>
@section('sidebar')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                </button>

                <a class="navbar-brand" href="/"><span class="fa fa-home" style="font-size:27px;" ></span></a>
            </div>
            
                <ul class="nav navbar-nav navbar-right">
                    @if(!Auth::user())
                        <li> <img src="{{URL::asset('neww.jpg')}}" class="logo" width="150"></li>
                        <li><a href="/auth/login">Login <span class="fa fa-sign-in"></span></a></li>
                        <li><a href="/auth/register">Signup <span class="fa fa-user"></a></li>
                    @else
                        <li> <img src="{{URL::asset('neww.jpg')}}" class="logo2" width="150"></li>
                        
                        <li><a href="list">My Order <span class="fa fa-briefcase"></span></a></li>
                        <li><a href="/cart">Cart <span class="fa fa-shopping-cart"></span></a></li>
                        <li><a href="/auth/logout">Logout {{ Auth::user()->name}}</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        
    </nav>
@show
@section('footer')
<footer class="site-foo">
<p align="center">Copyright &copy 2017 All Rights Reserved</p>  
</footer>
@show
</body>
</html>