<?php
	#inicia el buffer
	ob_start();
	require_once("pdf_core.php");

	$pdf = new RepContrato();

	#configurando las paginas
	$pdf->SetMargins(20,22,20);
	$pdf->SetAutoPageBreak(true, 25);
	$pdf->AddPage();

	#Colocando el título
	$pdf->SetFont('Arial','B',13);
	$title = "CONTRATO INDIVIDUAL DE TRABAJO SUJETO A LA MODALIDAD DE TEMPORADA";
	$w = $pdf->GetStringWidth($title)+6;

	$pdf->SetX((210-$w)/2);
	$pdf->Cell($w,9,utf8_decode($title),0,0,'C',false);
	$pdf->Ln(15);

	#párrafo inicial
	$pdf->SetFont('Arial','',10);
	$p1 = utf8_decode(
			"Conste por el presente documento, que se extiende por triplicado, el CONTRATO INDIVIDUAL DE TRABAJO SUJETO A LA MODALIDAD DE TEMPORADA celebrado dentro de los alcances del artículo 67º del Texto Único Ordenado del Decreto Legislativo No. 728, Ley de Productividad y Competitividad Laboral (en adelante, la LPCL), aprobado mediante el Decreto Supremo No. 003-97-TR, que celebran, de una parte, EMBOTELLADORA SAN MIGUEL DEL SUR S.A.C., con Registro Único del Contribuyente No. 20413940568, con domicilio en Panamericana Norte Km. 154, distrito de Huaura, Provincia de Huaura, departamento de Lima, debidamente representada por el señor Eber Leonardo Valdez Nolasco,  identificado con DNI No15693253, facultado según poderes inscritos en la Partida No. N° 01194749 del Registro de Personas Jurídicas de Lima, a quien en adelante se le denominará EL EMPLEADOR; y, de la otra, $registro->appa_trab $registro->apma_trab $registro->nomb_trab identificado con DNI No. $registro->nume_dni, de nacionalidad peruana, con domicilio en $registro->dire_trab Distrito de $registro->desc_dist; a quien en adelante se le denominará EL TRABAJADOR, según los términos y condiciones que se señalan a continuación:");
	$pdf->MultiCell(0,5,$p1);
	$pdf->Ln(10);

	#Antecedentes
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"ANTECEDENTES",'I');
	$pdf->Ln(7);

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"Primera:",'I');
	$pdf->Ln(5);

	$pdf->SetFont('Arial','',10);
	$tex = utf8_decode(file_get_contents("../reporte/suplencia/primera.txt"));
   	$tex = ltrim($tex, '?');
	$pdf->MultiCell(0,5,''.$tex);
	$pdf->Ln(7);

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"Segunda:",'I');
	$pdf->Ln(5);

	$pdf->SetFont('Arial','',10);
	$text = utf8_decode("EL EMPLEADOR requiere cubrir temporalmente el puesto de $registro->desc_carg, en el departamento de producción en razón de que el titular de dicho puesto reemplazará puestos por descanso médico.");
	$pdf->MultiCell(0,5,$text);
	$pdf->Ln(7);

	#objeto del contrato
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"OBJETO DEL CONTRATO",'I');
	$pdf->Ln(7);

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"Tercera:",'I');
	$pdf->Ln(5);

	$pdf->SetFont('Arial','',10);
	$text = utf8_decode("Por lo señalado en la cláusula precedente, EL EMPLEADOR contrata temporalmente los servicios personales del TRABAJADOR, para que se desempeñe como $registro->desc_carg.");
	$pdf->MultiCell(0,5,$text);
	$pdf->Ln(3);
	$pdf->MultiCell(0,5,utf8_decode("Queda entendido que la prestación de servicios deberá ser efectuada de manera personal, no pudiendo el TRABAJADOR ser reemplazado ni ayudado por tercera persona."));
	$pdf->Ln(7);

	#Jornada de trabajo
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"JORNADA DE TRABAJO",'I');
	$pdf->Ln(7);

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"Cuarta:",'I');
	$pdf->Ln(5);

	$pdf->SetFont('Arial','',10);
	$text = utf8_decode(file_get_contents("../reporte/suplencia/cuarta.txt"));
   	$text = ltrim($text, '?');
	$pdf->MultiCell(0,5,$text);
	$pdf->Ln(25);

	#PLAZO
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"PLAZO",'I');
	$pdf->Ln(7);

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,"Quinta:",'I');
	$pdf->Ln(5);

		#dividir fecha inicial 'd-m-y'
		$di = substr($registro->fech_inic, 8, 2);
		$mi = substr($registro->fech_inic, 5, 2);
		$yi = substr($registro->fech_inic, 0, 4);

		#dividir fecha final 'd-m-y'
		$df = substr($registro->fech_fin, 8, 2);
		$mf = substr($registro->fech_fin, 5, 2);
		$yf = substr($registro->fech_fin, 0, 4);

		#el nombre del mes 
		require_once('../util/fechas.php');
		$mes = new Fechas();
		$nommes_ini = $mes::getMes($mi);
		$nommes_fin = $mes::getMes($mf);

		#condicionar si el fin del contrato es indeterminado
		if ($registro->indt_cont == 1) {
			$fechafin = "con plazo Indeterminado";
		} else {
			$fechafin = "al $df de $nommes_fin del $yf";
		}

	$pdf->SetFont('Arial','',10);
	$text = utf8_decode("La duración del presente Contrato cuenta a partir del $di de $nommes_ini del $yi $fechafin, sin más obligación para las partes que las determinadas por ley; salvo prorroga o renovación expresa a que se refiere la cláusula sexta.");
	$pdf->MultiCell(0,5,$text);
	$pdf->Ln(6);

	$pdf->PrintChapter("Sexta:", "../reporte/suplencia/sexta.txt");

	#Remuneración
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,utf8_decode("REMUNERACIÓN"),'I');
	$pdf->Ln(7);

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,utf8_decode("Sétima:"),'I');
	$pdf->Ln(5);

	$pdf->SetFont('Arial','',10);
	$text = utf8_decode("EL EMPLEADOR abonará a 'EL TRABAJADOR' como contraprestación económica, por todo concepto, por sus labores una remuneración mensual de S/. $registro->mont_cont con 00/100 Nuevos Soles. ");
	$pdf->MultiCell(0,5,$text);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','',10);
	$text = utf8_decode(file_get_contents("../reporte/suplencia/setima.txt"));
   	$text = ltrim($text, '?');
	$pdf->MultiCell(0,5,$text);
	$pdf->Ln(7);

	$pdf->PrintChapter("Octava:", "../reporte/suplencia/octava.txt");
	$pdf->PrintChapter("Novena:", "../reporte/suplencia/novena.txt");
	$pdf->PrintChapter(utf8_decode("Décima:"), "../reporte/suplencia/decima.txt");

		#restarle una dia a la fecha inicio
		$fechaant = strtotime('-1 day', strtotime($registro->fech_inic));
		$fechaant = date("Y-m-d", $fechaant);
		$mesant = $mes::getMes(substr($fechaant, 5, 2));

	$pdf->SetFont('Arial','',10);
	$text = utf8_decode("En señal de conformidad las partes suscriben este documento en original y copia en la ciudad de Huaura, a los ".substr($fechaant, 8, 2)." días del mes de $mesant de ".substr($fechaant, 0, 4).".");
	$pdf->MultiCell(0,5,$text);
	$pdf->Ln(27);

	#firma del trabajador
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(0,0,'________________________________________','R');
	$pdf->Ln(6);

	$pdf->SetFont('Arial','',9);
	$pdf->Cell(0,0,utf8_decode("Nombres:	$registro->appa_trab $registro->apma_trab, $registro->nomb_trab"),'R');
	$pdf->Ln(6);	

	$pdf->SetFont('Arial','',9);
	$pdf->Cell(0,0,utf8_decode("DNI:	$registro->nume_dni"),'R');

	$pdf->Output();
 	#cierra el buffer
 	ob_end_flush();
 ?>