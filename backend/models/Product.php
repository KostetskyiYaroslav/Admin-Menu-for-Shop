<?php

namespace Backend\Models {

    require_once "../abstract/Model.php";

    use Backend\My_Abstract\Model;

    /**
     * Class Product
     * @package Backend\Models
     * Class provide CRUD functionality for Product table
     */
    class Product extends Model
    {
        protected $table = 'product';

        public function __construct()
        {
            parent::__construct();
        }

        public function addPicture($item)
        {
            if($insertedId = \R::store($item)){
                return $insertedId;
            }
            return false;
        }
        public function makeDispensePicture(){
            return \R::dispense('pictures');
        }
        public function incrementCountCategory($category)
        {
            return ($insertedId = \R::store($category))
                ? $insertedId
                : false;
        }

        public function getCategory($where = NULL){
            $categories = [];
            if($where == NULL){
                $categories = \R::findAll('categories');
            } else {
                $categories = \R::find('categories', " $where[key] = '$where[value]'");
            }
            return $categories;
        }

    }
}
