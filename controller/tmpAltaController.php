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
			$year = $_GET['year'];
			require_once '../modelo/ContratoDAO.php';
			$contratoDAO = new ContratoDAO();

            $fech_inic = $_GET['fech_inic'];
            #echo $fech_inic;
            $fech_fin = $_GET['fech_fin'];            
			#echo $fech_fin;

			#$contratoDAO->guardarFechTmp($year, $fech_inic, $fech_fin);
			
			if ($contratoDAO->guardarFechTmp($year, $fech_inic, $fech_fin) == 1) {
				echo "<script>";
				echo "alert('Las fechas se guardaron correctamente \\n \\n Temporada: $year \\n Fecha inicial: $fech_inic \\n Fecha final: $fech_fin');";
				echo "</script>";
			} else {
				echo "<script>alert('la fecha NO se guardó :(');</script>";
			}
			echo "<script>window.location.reload();</script>";
			break;
	}
 ?>

 <script type="text/javascript">
 	$(function() {
        $("#fech_inic").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
    });

    $(function() {
        $("#fech_fin").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
    });
 </script>