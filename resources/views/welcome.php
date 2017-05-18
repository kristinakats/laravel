<!DOCTYPE html>
<html lang="en">
<head>
  <title>NX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.dropbtn {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #C0C0C0;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: white}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: black;
}
img {
    display: block;
    margin: 0 auto;
}
  

h1 {
    font-family:"Poiret one";
    text-align: center;
    font-size: 25px;
}

li,ul{
       font-family:  "Poiret one";
       font-size: 18px;
       color: #fff;
}
.right{
   position: relative;
    left: -320px;
    top:-15px;

}
.left{
  position: relative;
    right: 50px;
    top:-75px;
}
footer {
    
    left: 0;
    bottom: 0;
    height: 0px;
    width: 100%;
    background: black;
    color: #fff;
    font-family:  "Poiret one";
    
}
.site-footer {
  padding-top: 0px;
  padding-bottom: 200px;
  font-family:  "Poiret one";
  }

body {
 padding-top:0px;
 padding-bottom: 0px;
 background-color:white;
 }

 img.welcomelogo{
    position: relative;
    right: -110px;
}
  .photo2 { 
      background-color:lightgray;
      color: #555555;
  }
  p.bot{
    position: relative;
    bottom:-170px;
  }
  h1.const{
    position: relative;
    top:50px;
  }
  div.gap{
    left: 0;
    height: 100px;
    width: 100%;
    background: white;
    font-size: 25px;
    color: black;
    position: relative;
    
  }
  div{
    font-family:  "Poiret one";
    text-align: center;

  }

</style>

<body>
<nav class="navbar navbar-inverse"></a>
  <div class="container-fluid" >
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <form class="navbar-form navbar-left" method="GET" action="/product">
        <div class="form-group">
          <input input class="form-control" placeholder="Search" name="keyword" type="text">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
     </form>
      <li><a href="#"></a></li>
      <li class="active"><a href="product">News</a></li>
      <li><div class="dropdown">
          <button class="dropbtn">Jewels</button>
          <div class="dropdown-content">

            <a href="/ring">Rings</a>
            <a href="/necklace">Necklaces</a>
            <a href="/earring">Earrings</a>
         </div>
      </div></li>
      <li><img src="neww.jpg" class="welcomelogo" width="150"></a></li> 
  </ul>
  
  <ul class="nav navbar-nav navbar-right"> 
    <li><a href="auth/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <li><a href="auth/register"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
  </ul>
  </div>
</nav>
<div class="gap"></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>  
   <div class="carousel-inner text-center">
     <div class="item active">
       <img src="te.png" class="img-responsive img-circle" style="display:inline"  width="900" height="700">
     </div>
     <div class="item">
       <img src="kring.jpg" class="img-responsive img-rounded" style="display:inline"  width="900" height="700">
     </div>
   </div> 
  
  <div class="gap">
   <img src="constr.png">

  </div>

  <div class="container-fluid photo2 text-center">    
    <div class="row">
        <div class="col-sm-4">
      <img src="max.jpg" class="img-responsive" style="width:100%">
    </div>
    <div class="col-sm-4"> 
      <img src="harley.jpg" class="img-responsive" style="width:100%">
    </div>
    <div class="col-sm-4"> 
      <img src="robot.jpg" class="img-responsive" style="width:100%">
    </div>
 </div>
<footer class="site-footer text-center" >
   <p class="bot">Copyright &copy 2017 All Rights Reserved </p>
    <p class="right">Contact me </p>
      <div class="row"> 
       <p class="right"style="font-family:italic;">nikosxatzisj&c@gmail.com</p>
      </div>
    <p class="left">Stay Connected</p> 
      <div class="row"> 
      <p class="left"><button style="font-size:24px"><i class="fa fa-facebook-f" style="font-size:24px;color:black""></i></button></p></div> 
 
</footer>

 
</body>
</html>
