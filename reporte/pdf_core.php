<?php 
	require("../fpdf/fpdf.php");

	class RepContrato extends FPDF
	{

		function ChapterTitle($label){
		    // Arial 10
		    $this->SetFont('Arial','B',10);
		    // Color de fondo
		    #$this->SetFillColor(200,220,255);
		    // Título
		    $this->MultiCell(0,5,$label,false);
		    // Salto de línea
		    $this->Ln(3);
		}

		function ChapterBody($file){
	    	// Leemos el fichero
	    	$txt = utf8_decode(file_get_contents($file));
	    	$this->SetFont('Arial','',10);
	    	//remueve los '?'
	    	$txt = ltrim($txt, '?');
	    	// Imprimimos el texto justificado
	    	$this->MultiCell(0,5,$txt);
	    	// Salto de línea
	    	$this->Ln(7);
		}

		function footer(){
			//posicion a 1,5 del final
			$this->SetY(-15);
			//fuente arial
			$this->SetFont('Arial','',10);
			//numero de pagina
			$this->Cell(0,6,'~ '.$this->PageNo().' ~',0,0,'C');
		}

		function PrintChapter($title, $file){
		    $this->ChapterTitle($title);
		    $this->ChapterBody($file);
		}
	}
 ?>