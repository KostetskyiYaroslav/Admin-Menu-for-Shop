<?php

namespace Backend\Environment;

class Environment
{
    var $HOST;
    var $DB  ;
    var $USER;
    var $PASS;

    var $type;

    /**
     * Environment constructor.
     * @param $type ('Production'|'Development')
     * @param null $env
     */
    public function __construct($type, $env = null)
    {
        require 'E_'.$type.'.php';

        $this->type = $type;

        $this->HOST = $env->HOST;
        $this->DB   = $env->DB  ;
        $this->USER = $env->USER;
        $this->PASS = $env->PASS;
    }
}

