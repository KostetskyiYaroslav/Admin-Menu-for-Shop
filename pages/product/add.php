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
<article class="container">


    <form id="uploadimage" class="container" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="productName" data-toggle="tooltip" data-placement="right" title="ОБОВ'ЯЗКОВЕ"> Назва продукту <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="productName" placeholder="Назва продукту*" value="Product 1">
        </div>
        <div class="form-group">
            <label for="productPrice" data-toggle="tooltip" data-placement="right" title="ОБОВ'ЯЗКОВЕ">Ціна <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="productPrice" placeholder="Ціна" value="10.99">
        </div>
        <div class="form-group">
            <label for="productMadeIn" data-toggle="tooltip" data-placement="right" title="ОБОВ'ЯЗКОВЕ">Виробник <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="productMadeIn" placeholder="Зроблено в..." value="Chine">
        </div>
        <div class="form-group">
            <label for="productColors" data-toggle="tooltip" data-placement="right" title="ОБОВ'ЯЗКОВЕ">Кльори <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="productColors" placeholder="Кльори" value="Red, Blue, White">
        </div>
        <div class="form-group">
            <label for="productSizes" data-toggle="tooltip" data-placement="right" title="ОБОВ'ЯЗКОВЕ">Розміри <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="productSizes" placeholder="Розміри" value="XXL, XX, XL">
        </div>
        <div class="form-group">
            <label for="productCategory" data-toggle="tooltip" data-placement="right" title="ОБОВ'ЯЗКОВЕ">Категорія <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="productCategory" placeholder="Категорія" value="Without Category">
        </div>
        <div class="form-group">
            <label for="productDescription" data-toggle="tooltip" data-placement="right" title="ОБОВ'ЯЗКОВЕ">Опис <span class="text-danger">*</span></label>
            <textarea class="form-control" id="productDescription" placeholder="Опис..." >Description of Product 1</textarea>
        </div>
        <div id="fileGroup" class="form-group">
            <input type="number" name="units" id="units" value="1" hidden>
            <div id="pictureOperation" class="col-xs-12" >
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><button id="remove_one" class="btn btn-info">Видалити останнє</button></div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><button id="add_more" class="btn btn-info">Додати зображення</button></div>
            </div>
            <label id="labelForPicture" for="productPicture1" data-toggle="tooltip" data-placement="right" title="ОБОВ'ЯЗКОВЕ">Зображення товару *</label>
            <input class="file" type="file" name="productPicture1" id="productPicture1">
            <p class="help-block alert-info">Мінімальна кількість: 1</p>
            <p class="help-block alert-info">Максимальна кількість: 6</p>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label for="resetProductFields" data-toggle="tooltip" data-placement="top" title="Якщо стоїть галочька, то Ви зможете переглянути поля об'єкта який щойно був додавий в базу даних через консоль браузера.">
                    <input id="resetProductFields" type="checkbox">Скидати дані товару?
                </label>
            </div>
        </div>
        <button id="btnAddProduct" type="submit" class="btn btn-success" >Додати</button>
    </form>
</article>
<footer class="container-fluid">
    <div class="row col-xs-12">Footer</div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Main Script -->
<script src="assets/js/script.js"></script>
<!-- Main Add Product Script -->
<script src="assets/js/add_product.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>