<html>
<head>
    <title>Laravel eshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="/css/style.css">
</head>
<body style="background-color:white;">
@section('sidebar')
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Products</div>
        </div>
 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/admin/new"><button class="btn btn-danger">New Product</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <td class=" text-center">id</td>
                    <td class="col-md-2 text-center">Name</td>
                    <td class="col-md-2 text-center">Description</td>
                    <td class="col-md-2 text-center">Price</td>
                    <td class="col-md-4 text-center">Image</td>
                    
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="col-md-2 text-center">{{$product->id}}</td>
                            <td class="col-md-2 text-center">{{$product->name}}</td>
                            <td class="col-md-2 text-center">{{$product->description}}</td>
                            <td class="col-md-2 text-center">{{$product->price}}</td>
                            <td class="col-md-4 text-center"><img class="img-responsive img-center" src="{{URL::asset($product->imageurl)}}" style="width: 100px; height: 72px;"> </a></td>
                            <td class="text-center"><a href="/admin/product/destroy/{{$product->id}}"><button class="btn btn-danger">Del</button></a> </td>
                            <td class="text-center"><a href="/admin/{{$product->id}}/edit"><button class="btn btn-danger">Edit</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
</html>
</head>