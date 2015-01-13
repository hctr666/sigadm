<?php 

	require_once("MySQL.php");
	require_once("CFProfesional.php");

	class CFProfesionalDAO {
		
	    function listar($codi_empr) {
	        $sql = "select * from cfprof where codi_empr='$codi_empr' ";
	        $lista = MySQL::arrayObject($sql);
	        return $lista;
	    }

	    function listarPor($codi_empr, $codi_cfp){

	    }
	}
 ?>