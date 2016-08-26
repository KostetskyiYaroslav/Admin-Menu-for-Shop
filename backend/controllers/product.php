<?php
/**
 * Created by PhpStorm.
 * User: yakos
 * Date: 21.08.2016
 * Time: 9:08
 */

namespace Controller {

    require_once "../Service/ProductService.php";
    use Backend\Service\ProductServer;
    use RedBeanPHP\RedException;

    $service = new ProductServer();
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($method) {
        case 'POST':
            if(isset($_POST['productName'])){
                //CREATE NEW RedBeans Object
                $product = \R::dispense('product');
                //CREATE KEY/VALUE array for getCategory function to get RedBeansPHP Object
                $categoryWhere['key'] = 'name';$categoryWhere['value'] = $_POST['productCategory'];
                //Get RedBeansPHP Object and select 0 element
                $category = $service->getCategory($categoryWhere)[1];
                $category_id = $category['id'];
                //fill object from POST
                $product->id            = 0;
                $product->name          = $_POST['productName']        ;
                $product->price         = $_POST['productPrice']       ;
                $product->made_in       = $_POST['productMadeIn']      ;
                $product->colors        = $_POST['productColors']      ;
                $product->size          = $_POST['productSizes']       ;
                $product->id_category   = $category_id;
                $product->description   = $_POST['productDescription'] ;

                //add product to DB and equal inserted id to $id var
                if($id = $service->addProduct($product)) {
                    //equal $productInsertedId  to $id. to set it global for POST case
                    $product->id = $id;
                    //insert product pictures
                    foreach ($_FILES as $item) {

                        $fileName       = $item["name"];                            // The file name
                        $fileTmpLoc     = $item["tmp_name"];                        // File in the PHP tmp folder
                        $target_dir     = "../../uploads/products/";                // Upload directory
                        $target_file    = $target_dir . basename($fileName);        // File name without type
                        $imageFileType  = pathinfo($target_file,PATHINFO_EXTENSION);// Only type of File

                        // if file not chosen
                        if (!$fileTmpLoc) {
                            echo "ERROR: Please browse for a file before clicking the upload button.\n";
                            continue;
                        }
                        // create RedBeans object
                        $productPicture = $service->makeDispensePicture();
                        // fill object
                        $productPicture->id_product         = $product->id;
                        $productPicture->picture_name       = $fileName;
                        $productPicture->picture_hash_name  = rand(777, 100500).sha1($fileName).'.'.$imageFileType;
                        // if picture have successfully inserted to DB
                        if($service->addProductPicture($productPicture)){
                            // save picture on server
                            if (!move_uploaded_file($fileTmpLoc,
                                $target_dir.$productPicture->picture_hash_name)) {
                                echo "ERROR: can`t load picture `$productPicture->picture_name` on server\n";
                            }
                        } else {
                            echo "ERROR: can`t insert picture `$productPicture->picture_name` data into DB\n";
                        }
                        $service->incrementCountCategory($category);
                    }
                    echo json_encode($product);
                }else {
                    echo 'FALSE';
                    return 'FALSE';
                }

            } else if(isset($_POST['postKey'])) {
                echo 'postKey';
                return 'postKey';
            } else {
                echo 'ELSE';
                return 'ELSE';
            }
            break;
        case 'GET':
            $field = [];
            if(isset($_GET['productId'])){
                $field['key'] = 'id';
                $field['value'] = $_GET['productId'];
            } else if(isset($_GET['productName'])){
                $field['key'] = 'name';
                $field['value'] = $_GET['productName'];
            } else if(isset($_GET['productPrice'])){
                $field['key'] = 'price';
                $field['value'] = $_GET['productPrice'];
            } else if(isset($_GET['productMadeIn'])){
                $field['key'] = 'made_in';
                $field['value'] = $_GET['productMadeIn'];
            } else if(isset($_GET['productColors'])){
                $field['key'] = 'colors';
                $field['value'] = $_GET['productColors'];
            } else if(isset($_GET['productSizes'])){
                $field['key'] = 'sizes';
                $field['value'] = $_GET['productSizes'];
            } else if (isset($_GET['productDescription'])){
                $field['key'] = 'description';
                $field['value'] = $_GET['productDescription'];
            }
            if($products = $service->getProducts($field) ){
                echo json_encode($products);
            } else {
                echo 'FALSE';
            }
            break;
        case 'DELETE':

            break;
        case 'PUT':

            break;
        default:
            E_ERROR;
            break;
    }
}