<?php

require_once("MySQL.php");
require_once("Condicion.php");

class CondicionDAO {

    function listar($codi_empr) {
        $sql = "select * from condicion where codi_empr='$codi_empr' ";
        $lista = MySQL::arrayObject($sql);
        return $lista;
    }
}

?>