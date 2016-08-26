<?php

namespace Backend\Models {

    require_once "../abstract/Model.php";

    use Backend\My_Abstract\Model;

    /**
     * Class User
     * @package Backend\Models
     * Class provide CRUD functionality for Product table
     */
    class User extends Model
    {
        protected $table = 'user';

        public function __construct()
        {
            parent::__construct();
        }

    }
}
