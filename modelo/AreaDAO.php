<?php

require_once("MySQL.php");
require_once("Area.php");

class AreaDAO {

    function listar($codi_empr) {
        $sql = "select * from area where codi_empr='$codi_empr' ";
        $lista = MySQL::arrayObject($sql);
        return $lista;
    }

}

?>