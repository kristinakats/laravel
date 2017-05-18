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
            <div class="panel-title">New Product</div>
        </div>
        <div class="panel-body" >
            <form method="POST" action="/admin/product/save" class="form-horizontal" enctype="multipart/form-data" role="form">
                {!! csrf_field() !!}
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label col-md-2" for="id">id</label>
                        <div class="col-md-10">
                            <input id="id" name="id" type="text" placeholder="Product id" class="form-control input-md" required="">

                    <div class="form-group">
                        <label class="control-label col-md-2" for="name">Name</label>
                        <div class="col-md-10">
                            <input id="name" name="name" type="text" placeholder="Product name" class="form-control input-md" required="">
 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2" for="description">Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="textarea" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2" for="price">Price</label>
                        <div class="col-md-10">
                            <input id="price" name="price" type="text" placeholder="Product price" class="form-control input-md" required="">
 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2" for="imageurl">Image URL</label>
                        <div class="col-md-10">
                            <input id="imageurl" name="imageurl" type="text" placeholder="Image URL" class="form-control input-md" >
 
                        </div>
                    </div>
                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2" for="submit"></label>
                        <div class="col-md-10">
                            <button id="submit" name="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </div>
 
                </fieldset>
 
            </form>
        </div>
    </div>
</body>
</html>