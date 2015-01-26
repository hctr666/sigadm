<?php
  $fechaIni = date('d/m/Y', strtotime($_SESSION['contrato']->fech_inic));

  if($_SESSION['contrato']->indt_cont==1)
    $fechaFin='Indeterminado';
  else
    $fechaFin = date('d/m/Y', strtotime($_SESSION['contrato']->fech_fin));

  
  $texto="
<html>
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
    
  </head>

  <body lang=ES-PE>




  <h1>                 <b>CONTRATO DE TRABAJO SUJETO A MODALIDAD</b></h1>

  <br/>


<p align='justify'>Conste por el presente documento, el CONTRATO DE TRABAJO SUJETO A MODALIDAD que celebran y suscriben:</p>

<p align='justify'><b>I.DATOS DEL EMPLEADOR:</b></p>


<p align='justify'>EMBOTELLADORA SAN MIGUEL DEL SUR S.A.C., con R.U.C. No. 20413940568, con domicilio principal en Calle Florida N� 204-206-Huaranguillo�Sachaca-Arequipa y sucursal en Panamericana Norte KM 154 � Huaura, debidamente representada por su Representante Legal, Se�or Eber Valdez Nolasco, identificado con DNI No. 15693253, seg�n facultades inscritas en la partida Electr�nica N� 01194749 en el Registro de Personas Jur�dicas de la Oficina Registral de Arequipa, Sede Arequipa; y, de la otra parte:</p>

<p align='justify'><b>II.DATOS DEL TRABAJADOR:</b></p>
<table border='1' >
  <tr>
      <td><b>NOMBRE:</b></td>
  </tr>
  <tr>
      <td>".$_SESSION['contrato']->nombre."</td>
  </tr>
  <tr>
      <td><b>DNI:</b></td>  
  </tr> 
  <tr>
      <td>".$_SESSION['contrato']->nume_dni."</td>  
  </tr> 
  <tr>
      <td><b>DIRECCION:</b></td>
  </tr> 
  <tr>
      <td>".$_SESSION['contrato']->dire_trab." - ".$_SESSION['contrato']->desc_dist."</td>
  </tr>
  <tr>
      <td><b>PUESTO:</b></td>
  </tr>
  <tr>
      <td>".$_SESSION['contrato']->desc_carg."</td>
  </tr>
  <tr>
      <td><b>REMUNERACION BRUTA BASICA:</b></td>
  </tr>
  <tr>
      <td>".$_SESSION['contrato']->mont_cont."</td>
  </tr>
  <tr>
      <td><b>BASE LEGAL DEL CONTRATO:</b></td>
  </tr>
  <tr>
      <td>".$_SESSION['contrato']->desc_cond."</td>
  </tr>
  <tr>
      <td><b>PLAZO DEL CONTRATO:</b></td>  
  </tr>
  <tr>
      <td>INICIO: ".$fechaIni." - TERMINO: ".$fechaFin."</td>
  </tr>  
</table>


<p align='justify'>Ambas partes declaran haber celebrado libremente el presente contrato, en los t�rminos, condiciones y
cl�usulas siguientes:</p>

<p align='justify'><b>PRIMERO:ANTECEDENTES</b></p>

<p align='justify'>Con fecha 16 de Enero del 2014 las partes iniciaron su relaci�n laboral con la suscripci�n de un contrato de trabajo sujeto a la modalidad de Necesidades de Mercado al amparo del art�culo 58� de la LPCL. Este contrato tuvo como sustento el incremento coyuntural de la producci�n que se origin� como consecuencia de una variaci�n sustancial en la demanda de los servicios prestados por EL EMPLEADOR, quien apreci� un aumento de los pedidos de productos por parte de clientes y distribuidores. </p>

<p align='justify'>Recientemente EL EMPLEADOR ha verificado que las ventas que se reflejan en el PDT Impuesto General a las Ventas contin�an reflejando un incremento coyuntural e imprevisible de la demanda como consecuencia del aumento en los pedidos de los productos que fabrica, factor objetivo y real que lo habilita a celebrar el presente contrato sujeto a la modalidad de Necesidades de Mercado, de conformidad con lo dispuesto por el art�culo 58� de la LPCL. </p>

<p align='justify'><b>SEGUNDO: DEL OBJETO</b></p>

<p align='justify'>En raz�n a los argumentos expuestos y a la especial calificaci�n acreditada por EL TRABAJADOR, EL� EMPLEADOR ha decidido, al amparo de lo previsto en el art�culo 58� de la LPCL, contratar los servicios temporales de aquella persona para que realice las labores propias y complementarias en el puesto de Asistente de Investigaci�n y Desarrollo en atenci�n a la variaci�n sustancial en la demanda de los servicios prestados por EL EMPLEADOR, de acuerdo a las estipulaciones contenidas en este Contrato.</p>

<p align='justify'><b>TERCERO.- Remuneraci�n</b></p>
<p align='justify'>Como �remuneraci�n, EL TRABAJADOR percibir� la suma bruta que bajo el rubro REMUNERACI�N se establece en la introducci�n del presente contrato, secci�n Datos de EL TRABAJADOR. Esta suma se encuentra afecta a las retenciones y descuentos de Ley.</p>

<p align='justify'>Ambas partes acuerdan que la modalidad y fecha de pago de la remuneraci�n ser� fijada y modificada por EL EMPLEADOR de acuerdo con sus necesidades operativas y/o administrativas. </p>

<p align='justify'>EL TRABAJADOR tendr� derecho a percibir, adem�s de su remuneraci�n, los beneficios que otorga la Ley a trabajadores sujetos a R�gimen Laboral de la Actividad Privada, en los t�rminos y condiciones que ella establece. </p>

<p align='justify'><b>CUARTO.- Plazo del Contrato</b></p>

<p align='justify'>El plazo del presente es el pactado por la partes en la introducci�n, secci�n Datos de EL TRABAJADOR, a cuyo vencimiento se entender� por concluida la relaci�n laboral que mantienen las partes. Se deja constancia que no es necesario cursar una comunicaci�n se�alando la conclusi�n de la relaci�n laboral por vencimiento del plazo pactado </p>


<p align='justify'><b>QUINTO.- Buena Fe Contractual</b></p>

<p align='justify'>EL TRABAJADOR se compromete a poner a disposici�n de EL EMPLEADOR toda su capacidad y lealtad, oblig�ndose siempre y en todo caso a obrar de buena fe con relaci�n a su empleo. Asimismo, EL TRABAJADOR �se compromete a observar las pol�ticas y normas que disponga EL EMPLEADOR, teniendo como objetivo su progreso y permanente desarrollo. A la firma del presente contrato se hace entrega al� trabajador� de un ejemplar del Reglamento Interno de Trabajo de la empresa, aprobado por Decreto Subdirectoral N� 1061-2011-GRA-GRTPE-SDRG y N� 1082- 2011-GRA-GRTPE-SDRG</p>

<p align='justify'><b>SEXTO.- Exclusividad</b></p>


<p align='justify'>EL TRABAJADOR es contratada en forma exclusiva por EL EMPLEADOR, de manera tal
que no podr� dedicarse a otra actividad distinta que la que emana de este
contrato, salvo autorizaci�n previa expresa y escrita de EL EMPLEADOR.</p>

<p  align='justify'><b>SETIMO. -Jornada y Horario</b></p>

<p align='justify'>Ambas partes convienen en que la jornada laboral ser� de lunes a s�bado y en horario de oficina. En uso de sus facultades directrices el EMPLEADOR podr� efectuar modificaciones razonables en la jornada de trabajo de acuerdo a las necesidades operativas respetando el m�ximo legal de 48 horas semanales, sin que dichas variaciones  signifiquen menoscabo de categor�a y/o remuneraci�n.</p>

<p align='justify'>EL TRABAJADOR �tendr� derecho a un tiempo de refrigerio de dos (2) horas.� El refrigerio se tomar� en el horario que indique EL EMPLEADOR. El tiempo de refrigerio no forma parte de la jornada laboral.</p>

<p align='justify'><b>OCTAVO.- Reserva, confidencialidad y competencia</b></p>
<p align='justify'> EL TRABAJADOR asume la obligaci�n de mantener en absoluta reserva, confidencialidad y secreto toda aquella informaci�n: contable, tributaria, administrativa, laboral, industrial y de cualquier otra �ndole que por el hecho del desempe�o de sus funciones, su simple presencia en las instalaciones de la empresa, o por el contacto o interacci�n con otros empleados de la empresa, dentro o fuera de las instalaciones de la misma; pueda ser de mi conocimiento y cuya difusi�n pueda o no causar da�o o atentar contra los intereses de la empresa. Queda entendido que la obligaci�n asumida
perdurar� inclusive una vez concluida la relaci�n laboral con EL EMPLEADOR; Asimismo asume la obligaci�n de no competir con la empresa empleadora; siendo de aplicaci�n en ambos casos las reglas que a continuaci�n se detallan:</p>

<p>1.-<u>RESERVA Y CONFIDENCIALIDAD</u></p>

<p align='justify'>a.  A observarante cualquier persona, entidad o empresa una discreci�n absoluta sobre cualquier actividad o informaci�n sobre EL EMPLEADOR y/o sus representantes, a las que hubiera tenido acceso con motivo de la prestaci�n de sus servicios para EL EMPLEADOR.</p>

<p align='justify'>b.  A no revelar a ninguna persona, entidad o empresa, ni usar para ning�n prop�sito, en
provecho propio o de terceros, cualquier informaci�n vinculada a EL EMPLEADOR de cualquier naturaleza.</p>

<p align='justify'>c.  A no revelar a ninguna persona dentro de EL EMPLEADOR, ning�n tipo de informaci�n
confidencial o de propiedad de EL EMPLEADOR, salvo que dicha persona necesite conocer tal informaci�n por raz�n de sus funciones.� Si hubiese cualquier duda sobre lo que constituye informaci�n confidencial, o sobre si la informaci�n debe
ser revelada y a qui�n, EL TRABAJADOR se obliga a solicitar autorizaci�n de sus superiores.</p>

<p align='justify'>d.  A no usar de forma inapropiada ni revelar informaci�n confidencial alguna o de propiedad de la persona, entidad o empresa para la cual labor� con anterioridad a ser contratado por EL EMPLEADOR, as� como a no introducir en las instalaciones de EL EMPLEADOR ning�n documento que no haya sido publicado ni ninguna clase de bien que pertenezca a cualquiera de dichas personas, entidades o empresas, sin su consentimiento previo. EL TRABAJADOR se obliga igualmente a no violar ning�n convenio de confidencialidad o sobre derechos de propiedad que haya firmado en conexi�n con tales personas, entidades o empresas.</p>

<p align='justify'>e.  A devolver a EL EMPLEADOR, al terminar o resolverse el presente contrato, sea cual fuere la causa, cualquier documento, materiales de estudio, disquetes y casettes y cualquier otro material contenido o fijado en cualquier otro medio que contenga o revele informaci�n que sea confidencial o de propiedad de EL EMPLEADOR.</p>

<p>2.-<u>COMPETENCIA</u></p>

<p align='justify'>a.  A no realizar ning�n tipo de inversi�n en empresas o instituciones de cualquier tipo cuyas actividades puedan estar en conflicto con los intereses de EL EMPLEADOR.</p>

<p align='justify'>b.  A no prestar servicios en forma dependiente o independiente para personas, instituciones o empresas que compiten, directa o indirectamente, con EL EMPLEADOR.</p>

<p align='justify'>c.  A no utilizar la informaci�n de car�cter reservado que le fue proporcionada por EL EMPLEADOR para desarrollar por cuenta propia o de terceros, actividades que compitan con las que realiza o planeara realizar EL EMPLEADOR.</p>

<p align='justify'>d.  A no inducir o intentar influenciar, ni directa ni indirectamente, a ning�n trabajador de EL EMPLEADOR a que termine su empleo con EL EMPLEADOR para que trabaje para EL TRABAJADOR o para cualquier otra persona, entidad, instituci�n o empresa, que compita con EL EMPLEADOR.</p>

<p align='justify'>Las obligaciones que EL TRABAJADOR asume en los literales a), b), c) y d) del numeral 1 y en el literal c) del numeral 2 de esta cl�usula regir�n indefinidamente, con prescindencia de la vigencia del presente contrato.� Las dem�s obligaciones regir�n hasta Tres (3) a�os despu�s de concluido el presente contrato de trabajo.� El incumplimiento por parte de EL TRABAJADOR de cualquiera de las obligaciones contenidas en esta cl�usula, facultar� a EL EMPLEADOR a iniciar las acciones legales que pudieran corresponder en defensa de sus derechos y a obtener la indemnizaci�n por da�os y perjuicios a que hubiera lugar.</p>


<p align='justify'><b>NOVENO.- Sobre los elementos de propiedad industrial o intelectual de EL EMPLEADOR y/o sobre
los que �ste tenga derechos bajo cualquier t�tulo</b></p>

<p align='justify'>EL TRABAJADOR declara conocer que el utilizar, incitar, o estimular a otro trabajador o trabajadores o a terceros, en el uso indebido de bienes o elementos de propiedad industrial o intelectual tales como marcas o signos distintivos de los que EL EMPLEADOR� es propietario o� haya convenido con otras para el uso o explotaci�n con fines de su desarrollo Empresarial tanto al interior o exterior del Centro Laboral configurar� la comisi�n de una infracci�n grave laboral por EL TRABAJADOR y un incumplimiento de los deberes esenciales que emanan del presente contrato de trabajo, y en tal sentido, har� irrazonable e insubsistente la continuidad de la relaci�n laboral al atentar gravemente
contra el desarrollo de la actividad productiva que da lugar al v�nculo laboral entre ambas partes, de conformidad a lo previsto en el art�culo 25 del &quot;Texto �nico Ordenado del Decreto Legislativo No. 728, Ley de Productividad y Competitividad Laboral�, aprobado por el Decreto Supremo No. 003-97-TR, y por su Reglamento, aprobado por el Decreto Supremo No. 001-96-TR..</p>

<p align='justify'>Ambas partes acuerdan que el incumplimiento de cualquiera de las obligaciones antes se�aladas har� insubsistente la continuidad de la relaci�n laboral y dar� lugar a la terminaci�n justa del v�nculo laboral por la comisi�n de una falta grave, sin perjuicio de las acciones legales penales, civiles o de cualquier otra
�ndole que EL EMPLEADOR decida iniciar.</p>

<p align='justify'><b>DECIMO.- Traslados</b></p>
<p align='justify'>
EL TRABAJADOR es contratado para laborar en un lugar espec�fico. Ambas partes acuerdan que EL EMPLEADOR� tendr� la facultad de disponer la realizaci�n de las labores para las cuales ha sido contratado EL TRABAJADOR, en cualquiera de sus �reas o centros de trabajo, incluyendo aquellos que se encuentren afuera de Lima y provincias.</p>

<p align='justify'><b>D�CIMO PRIMERA.- Presentaci�n personal</b></p>
<p align='justify'>Ambas partes acuerdan que EL TRABAJADOR, cumplir� escrupulosamente las normas que disponga EL EMPLEADOR con relaci�n a su presentaci�n personal y uso de uniforme. Desde ya, sin embargo, EL TRABAJADOR, declara conocer y acepta cumplir las reglas sobre el particular.</p>

<p align='justify'><b>DECIMO SEGUNDA: Resoluci�n y/o t�rmino</b></p>
<p align='justify'> El presente contrato, podr� resolver en cualquier momento por mutuo acuerdo entre las partes, por renuncia del CONTRATO y por causas justas de despido, relacionadas con la conducta o capacidad del trabajador, debidamente comprobadas y a las que �se refiere el TUO de la Ley de Productividad y Competitividad Laboral, aprobado por Decreto
Supremo N� 003-97-TR.</p>

<p align='justify'><b>DECIMO TERCERA�� Cumplimiento del plazo del contrato</b></p>
<p align='justify'> La EMPRESA no est� obligada a dar aviso alguno referente al t�rmino del presente contrato, el que concluir� de acuerdo a la cl�usula cuarta, procediendo a pagar a EL TRABAJADOR, al vencimiento, los beneficios sociales que pudieran corresponderle dentro del plazo legal.</p>

<p align='justify'>Las partes acuerdan que si durante la vigencia del presente contrato se produjeran circunstancias o hechos no previstos al momento presente, que hicieran imposible la raz�n que motiva la contrataci�n, como es el caso en una baja en la producci�n por falta de pedidos de los clientes, por resoluci�n por parte de los clientes de los pedidos efectuados, entre otros;� y, como consecuencia de ello resultara innecesaria la prestaci�n de los servicios contratados;� se resolver� el vinculo laboral, para lo cual se cursar� a EL TRABAJADOR el aviso con una anticipaci�n de tres d�as. En tal caso, la empresa solo quedar� obligada al pago de la remuneraci�n y beneficios que se�ala el art�culo 76 del D.S. 003-97-TR.</p>

<p align='justify'><b>DECIMO CUARTA.- Sistema de Gesti�n de la Seguridad y Salud en el Trabajo</b></p>
<p align='justify'>EL TRABAJADOR �se compromete a cumplir fielmente las disposiciones contenidas en el Reglamento Interno de Trabajo de EL EMPLEADOR; aprobado por Decreto Subdirectoral N� 1061-2011-GRA-GRTPE-SDRG y N� 1082- 2011-GRA-GRTPE-SDRG; del mismo modo� las reguladas por el Reglamento de Seguridad y Salud en el Trabajo de EL EMPLEADOR; de conformidad con lo establecido por el D.S. 005-2012-TR y dem�s normas modificatorias y complementarias y toda norma interna que disponga
EL EMPLEADOR para el resguardo y aseguramiento de la seguridad y salud en el trabajo; asumiendo las consecuencias de las transgresiones lo normado por �stas. Asimismo� EL TRABAJADOR declara haber recibido a la firma del presente, el
Reglamento de Seguridad y Salud en el Trabajo de EL EMPLEADOR y las recomendaciones en seguridad y salud en el trabajo; de conformidad con lo establecido por el Art�culo 35 de la Ley N� 29783.</p>

<p align='justify'><b>D�CIMO QUINTA .- Legislaci�n aplicable.</b></p>
<p align='justify'>El presente contrato de trabajo se regir� por las estipulaciones que contiene y por el &quot;Texto �nico Ordenado del Decreto Legislativo No. 728, Ley de Productividad y Competitividad Laboral�, aprobado por el Decreto Supremo No. 003-97-TR, y por su Reglamento, aprobado por el Decreto Supremo No. 001-96-TR.</p>

<p align='justify'>Extendido por triplicado en la Ciudad de Huaura el� d�a�������� de ����������������������del��������������</p>

<p></p>



<p>Nombre:���������.</p>

<p>DNI:�����������..</p>



</body>

</html>
";
?>