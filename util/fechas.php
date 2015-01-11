<?php 

	class Fechas
	{
		/*$meses = array('01' => 'Enero', '02' => 'Febrero',
					   '03' => 'Marzo', '04' => 'Abril',
					   '05' => 'Mayo', '06' => 'Junio',
					   '07' => 'Julio', '08' => 'Agosto',
					   '09' => 'Setiembre', '10' => 'Octubre',
					   '11' => 'Noviembre', '12' => 'Diciembre');*/

		function getDia($d){

		}

		public static function getMes($m)
		{
			switch ($m) {
				case '01':
					return 'Enero';
					break;

				case '02':
					return 'Febrero';
					break;

				case '03':
					return 'Marzo';
					break;

				case '04':
					return 'Abril';
					break;
				
				case '05':
					return 'Mayo';
					break;

				case '06':
					return 'Junio';
					break;

				case '07':
					return 'Julio';
					break;

				case '08':
					return 'Agosto';
					break;

				case '09':
					return 'Setiembre';
					break;

				case '10':
					return 'Octubre';
					break;
				
				case '11':
					return 'Noviembre';
					break;

				case '12':
					return 'Diciembre';
					break;			

			}
		}
	}
 ?>