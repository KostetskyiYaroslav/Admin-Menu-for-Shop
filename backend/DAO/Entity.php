<?php
namespace Backend\DAO {

    use Backend\Environment\Environment;

    require_once '../vendor/rb.php';
    require_once '../environment/Environment.php';


    class Entity
    {
        /**
         * @var, Instance of R
         */
        protected static $_instance;

        /**
         * Entity constructor.
         */
        private function __construct(){
            $this->env = new Environment('Development');
            $this->R =  \R::setup(
                'mysql:host='   .$this->env->HOST   .
                ';dbname='      .$this->env->DB     ,
                $this->env->USER, $this->env->PASS  );
        }

        /**
         * @return Entity
         * Function that return Instance of R(RedBeans)
         */
        public static function getInstance()
        {
            if (null === self::$_instance) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        //region Denied magic function's
        private function __clone()
        {
            /*protect exemplar from clone*/
        }

        private function __wakeup()
        {
            /*protect exemplar from wakeup*/
        }
        //endregion
    }
}
