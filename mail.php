<?php
$para      = 'cchinga@colegio-sil.com';
$titulo = 'El t�tulo';
$mensaje = 'Hola';
$cabeceras = 'From: cchinga@colegio-sil.com' . "\r\n" .
    'Reply-To: cchinga@colegio-sil.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>
