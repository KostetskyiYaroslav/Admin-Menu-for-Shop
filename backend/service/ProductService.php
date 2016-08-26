<?php

namespace Backend\Service {

    require_once "../models/Product.php";

    use Backend\Models\Product;

    class ProductServer
    {
        private $model;
        public function __construct()
        {
            $this->model = new Product();
        }
        public function addProductPicture($productPicture){
            return $this->model->addPicture($productPicture);
        }
        public function addProduct($product){
            return ($this->validateAdd($product))
                ? $this->model->create($product)
                : false;
        }
        public function incrementCountCategory($category)
        {
            $category->count_products++;
            return $this->model->incrementCountCategory($category);
        }
        public function getProducts($field){
            if(!empty($field)){
                return ($products = $this->model->readBy($field))
                    ? $products
                    : false;
            } else {
                return ($products = $this->model->readAll())
                    ? $products
                    : false;
            }
        }
        public function getCategory($where = NULL) {
            return $this->model->getCategory($where);
        }
        public function makeDispensePicture(){
            return $this->model->makeDispensePicture();
        }
        private function validateAdd($product){
            return
                (
                    empty($product['name'])         ||
                    empty($product['price'])        ||
                    empty($product['description'])
                )
                    ? false
                    : true;
        }

    }

}