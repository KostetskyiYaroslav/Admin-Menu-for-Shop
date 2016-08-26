<?php
namespace Backend\Environment {
    class E_Production
    {
        var $HOST   = "localhost"   ;
        var $DB     = "store_db"    ;
        var $USER   = "root"        ;
        var $PASS   = "1111"        ;
    }
    $env = new E_Production();
}
