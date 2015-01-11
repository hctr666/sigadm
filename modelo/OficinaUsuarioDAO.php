<?php
	require_once("Conec.php");
	class OficinaUsuarioDAO{
		function oficina($codi_usua) {
			$sql="select * from universidad.stp_oficina_x_usuario_listar('$codi_usua')";		
			$codigo=Conec::abrirObject($sql);			
			return $codigo->stp_oficina_x_usuario_listar;

		}
}
?>