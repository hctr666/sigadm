<?php
	
	$val = $_GET['val'];
	switch ($val) {
		case 'i':
			$year_tmp = $_GET['year'];
			require_once '../modelo/ContratoDAO.php';

			$contratoDAO = new ContratoDAO();
	        $regFecha = $contratoDAO->cargarFechaTmpAlta($year_tmp);
	        echo "<input type='text' id='fech_inic' maxlength='10' name='fech_inic' value='$regFecha->ini_tmp'/>";
			break;
		
		case 'f':
			$year_tmp = $_GET['year'];
			require_once '../modelo/ContratoDAO.php';

			$contratoDAO = new ContratoDAO();
	        $regFecha = $contratoDAO->cargarFechaTmpAlta($year_tmp);
	        echo "<input type='text' id='fech_fin' maxlength='10' name='fech_fin' value='$regFecha->fin_tmp'/>";			
			break;

		case 'guardar_fecha':
			require_once '../modelo/ContratoDAO.php';
			$year = $_GET['year'];
			$contratoDAO = new ContratoDAO();

			$yearIni = substr($_GET['fech_inic'], 6, 4);
            $monthIni = substr($_GET['fech_inic'], 3, 2);
            $dayIni = substr($_GET['fech_inic'], 0, 2);
            $fech_inic = $yearIni . '-' . $monthIni . '-' . $dayIni;
            echo $fech_inic;

			$yearfin = substr($_GET['fech_fin'], 6, 4);
            $monthfin = substr($_GET['fech_fin'], 3, 2);
            $dayfin = substr($_GET['fech_fin'], 0, 2);
            $fech_fin = $yearfin . '-' . $monthfin . '-' . $dayfin;            
			echo $fech_fin;

			$contratoDAO->guardarFechTmp($year, $fech_inic, $fech_fin);
			
			/*if ($contratoDAO->guardarFechTmp($year, $fech_inic, $fech_fin) == 1) {
				echo "<script>alert('Guardó :)');</script>";
			} else {
				echo "<script>alert('NO Guardó :(');</script>";
			}*/

			require_once '../asignaTmpAlta.php';
			break;
	}
 ?>

 <script type="text/javascript">
 	$(function() {
        $("#fech_inic").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });

    $(function() {
        $("#fech_fin").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
 </script>