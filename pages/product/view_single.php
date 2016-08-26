<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Home</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="container-fluid" >
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<article class="container-fluid">
    <div id="singleProduct" class="row">
        <div id="productPictures" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div id="currentImage">
                <img id="currentPictureItem" class="img-thumbnail" src="uploads/products/370475c20dcbcfbab07ab6c2df7e27444d5ac2afca569.png" alt="Picture 1">
            </div>
            <div id="otherPictures">
                <a href="#currentPictureItem" ><img class="otherPicturesItem img-thumbnail" src="uploads/products/370475c20dcbcfbab07ab6c2df7e27444d5ac2afca569.png" alt="Picture 1"></a>
                <a href="#currentPictureItem" ><img class="otherPicturesItem img-thumbnail" src="uploads/products/55846e3039f248dd555899a396179b51a05be377f9973.png" alt="Picture 2"></a>
                <a href="#currentPictureItem" ><img class="otherPicturesItem img-thumbnail" src="uploads/products/300725c20dcbcfbab07ab6c2df7e27444d5ac2afca569.png" alt="Picture 3"></a>
                <a href="#currentPictureItem" ><img class="otherPicturesItem img-thumbnail" src="uploads/products/71105278cadb5c5a600fd354bbb4a32acf34407bf98f0.png" alt="Picture 4"></a>
                <a href="#currentPictureItem" ><img class="otherPicturesItem img-thumbnail" src="uploads/products/21605bd473197c461193ea9b6d317f4c236910d065887.png" alt="Picture 5"></a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 container" id="product Info">
            <p class="col-xs-12"><span class="col-xs-6 col-sm-4 col-md-4 col-lg-4">НАЗВА:</span><span class="col-xs-6 col-sm-8 col-md-8 col-lg-8">Product 1               </span> </p>
            <p class="col-xs-12"><span class="col-xs-6 col-sm-4 col-md-4 col-lg-4">ЦІНА:</span><span class="col-xs-6 col-sm-8 col-md-8 col-lg-8">10.99                   </span> </p>
            <p class="col-xs-12"><span class="col-xs-6 col-sm-4 col-md-4 col-lg-4">ВИРОБНИК:</span><span class="col-xs-6 col-sm-8 col-md-8 col-lg-8">Chine                   </span> </p>
            <p class="col-xs-12"><span class="col-xs-6 col-sm-4 col-md-4 col-lg-4">КОЛЬОРИ:</span><span class="col-xs-6 col-sm-8 col-md-8 col-lg-8">Red, Blue, White        </span> </p>
            <p class="col-xs-12"><span class="col-xs-6 col-sm-4 col-md-4 col-lg-4">РОЗМІРИ:</span><span class="col-xs-6 col-sm-8 col-md-8 col-lg-8">XXL, XX, XL             </span> </p>
            <p class="col-xs-12"><span class="col-xs-6 col-sm-4 col-md-4 col-lg-4">ОПИС:</span><span class="col-xs-6 col-sm-8 col-md-8 col-lg-8">Description of Product 1</span> </p>
            <div class="col-xs-12"><span class="text-info col-xs-6 col-sm-2 col-md-2 col-lg-2"></span>      </div>
            <div class="col-xs-12"><span class="text-info col-xs-6 col-sm-2 col-md-2 col-lg-2"></span>    </div>
            <div class="col-xs-12"><span class="text-info col-xs-6 col-sm-2 col-md-2 col-lg-2"></span>   </div>
            <div class="col-xs-12"><span class="text-info col-xs-6 col-sm-2 col-md-2 col-lg-2"></span>   </div>
            <div class="col-xs-12"><span class="text-info col-xs-6 col-sm-2 col-md-2 col-lg-2"></span>   </div>
            <div class="col-xs-12"><span class="text-info col-xs-6 col-sm-2 col-md-2 col-lg-2"></span> </div>
        </div>
    </div>
</article>
<footer class="container-fluid">
    <div class="row col-xs-12">Footer</div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Main Script -->
<script src="assets/js/script.js"></script>
<!-- Main View Product Script -->
<script src="assets/js/_single_view_product.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>