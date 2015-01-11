<?php
    session_start();
    if( isset($_SESSION['codi_usua']) ){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="shortcut icon" href="/img/money.ico" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        </link>    
        <title>GESTOR VIRTUAL</title>
        
        <link href="css/jquery-ui.css"  rel="stylesheet"/>  
        <link href="css/theme/jquery-ui-1.10.3.custom.css" rel="stylesheet"></link>
        <script type="text/javascript" src="js/jquery-1.10.2.js" ></script>           
        <script type="text/javascript" src="js/jquery-ui.js"  ></script>         
        <!--<script type="text/javascript"  src="js/Thread.js"></script>-->
        <style>
            body{
                font: 70% "Trebuchet MS", sans-serif;

            }
            .bordeTitulo{
                border-top: 1px solid #ff9999;
                border-right: 2px solid #ff9999;   
                border-bottom: 2px solid #ff9999;
                border-left: 4px solid #ff9999;
            } 
            ul.menu {
                float:right;
                display:block;
                margin-top: 5px;
                list-style-type:none;
            }
            .menu li {
                line-height:18px;
                font-size:12px;
                position:relative;
                float:left;
            }
            .menu li a {
                color: #000;
                text-transform:uppercase;
                padding: 5px 20px;
                text-decoration:none;

            }
            .menu li a:hover {
                background: #1D537F;
                color: white;
            }
            .menu li ul {
                display:none;
                position:absolute;
                top:20px;
                /*width: 150px;*/
                /*                background-color: #f4f4f4;*/
                padding:0;
                list-style-type:none;
            }
            .menu li ul li {
                width: 150px;border: 1px solid #1D537F;border-top:none;padding: 10px 20px;}
            .menu li ul li:first-child {
                border-top: 1px solid #1D537F;
            }
            .menu li ul li a {
                width: 150px;margin: 0;padding:0;}
            .menu li ul li a:hover {
                width: 150px;margin: 0;color:#1D537F;background:none;
            }
            /********************************************************/
            .main_cont { float:left;  margin-top: 30px; }
            .menu_top_bg { 

                background-color:#1D537F; 
                font-size:12px; color:#FFF; line-height:32px;   text-align:center; 
                list-style-type:none;

                text-indent:8px; 
                border: 1px solid #1D537F;;
            } 
            .sub_menu ul { 
                padding:0px; 
                margin:0px; } 
            .sub_menu ul li {                 
                font-size:12px; color:#000; line-height:32px; 
                /*border-bottom:1px dotted #93bcc3;  */
                list-style-type:none;
                text-indent:8px; 
                border-bottom: 1px solid #1D537F;
                border-left: 1px solid #1D537F;
                border-right: 1px solid #1D537F;

            }
            .sub_menu ul li a { 
                text-decoration:none;
                color:#000;
            }
            .sub_menu ul li a.selected { 
                /*float:left; */
                /*width:242px; */
            } 
            .sub_menu ul li a:hover { 
                /*width: 242px;*/
                margin: 0;color:#1D537F;background:none;
            } 
            .pie{
                border-top: 1px solid #CCCCCC;
                float: left;
                font-size: 12px;
                height: 18px;
                margin-top: 50px;
                padding-top: 10px;
                text-align: center;
                width: 100%;
            }
            /***********VENTANA POPUP*******/
            #popup {
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 1001;
            }
            #fondoPopup
            {
                z-index:1;
                position: fixed;
                display:none;
                height:100%;
                width:100%;
                background:rgba(29,83,127,0.6);	
                top:0%;  
                left:0%;
            }

            .content-popup {
                margin:0px auto;
                margin-top:15%;
                padding:10px;
                width:500px;
                min-height:150px;
                border-radius:4px;
                background-color:#FFFFFF;
                box-shadow: 0 2px 5px #666666;

            }

            .close {
                position:relative;
                left:480px;
            }
        </style>
    </head>
    <body>   
        <div id="principal">
            <div id="cabecera">
                <table width="100%" height="55" border="0" cellpadding="0" cellspacing="0" background="img/fondo_footer.jpg">
                    <tr>
                        <td><img src="img/imagen_cabecera.jpg"/></td>
                    </tr>
                    <tr>
                        <td><div id="encabezado"  >
                                <div id="empresa" style="float:left;width:50%;color:#FFFFFF;padding-left: 30px;">RUC: <?php echo $_SESSION['nruc_empr']; ?> - <?php echo $_SESSION['desc_empr']; ?></div>
                                <div style="float:left;width:50%;text-align: right; color:#FFFFFF; "><div></div></div>
                            </div></td>
                    </tr>

                </table>
            </div>

            <div id="cuerpo" style="height:100%">
                <div id="menuh"  >              
    <ul class="menu">

        <li><a href="#"  onclick="menuhcontratos()">Inicio</a></li>        
        <li><a href="#">Usuario:                               
                <?php echo $_SESSION['nomb_usua']; ?></a>
            <ul>
                <li ><a href="#" onClick="cambiarClave()" >Cambiar Clave</a></li>

            </ul>
        </li>
        <li><a href="#" onclick="salir()">Cerrar</a></li>
    </ul>
</div>
<div id="menuv" class="main_cont" style="float:left;width:25%" >   
    <?php require_once('menuOpciones.php'); ?>       
</div>
<div id ="detalle"style="float:left;width:75%; ">
    <div id="cargando" ></div>

    <div id="areaTrabajo" style="padding: 20px;">
        <h1 align="center">BIENVENIDOS A LA PLATAFORMA VIRTUAL<br>
            DEL SISTEMA DE GESTION ADMINISTRATIVA
            <br/><br/><br/><img  src="img/logo00000001.jpg" width="680" height="260"></h1>
        <!-- <a href="#" id="open">click aqui</a>-->
    </div>
    <br>
    <div id="area2" style="padding:25px; padding-top:0px;">
        
    </div>
</div>    
        <script>
            function cambiarClave() {

            }
            function enContrucción() {
                alert("Disculpe, esta opcion esta en contrucción")
            }
            function noValida() {
            }
            function mostrarCargando() {
                document.getElementById("cargando").innerHTML = "<center><img src='img/loading.gif' /> Cargando...</center>";
            }
            function ocultarCargando() {
                document.getElementById("cargando").innerHTML = "";
            }
            function inicio() {

            }
            function menuOpciones() {
                $("#menuv").load("../menuOpciones.php");
                inicio();
            }
            function menuReportes() {
                /*$("#menuv").load("../menuReportes.php");
                inicio();*/
                enContrucción();
            }
            function  iniciarSesion()
            {
                window.location = "/PrincipalAction.do?method=salir";
            }
           
    
   
    function salir(){        
        //$("#cuerpo").load("controller/principalController.php?accion=salir");    
        location.href="controller/principalController.php?accion=salir";
    }
    function menuhcontratos(){        
        
        $("#areaTrabajo").load("controller/principalController.php?accion=mostrarFondo");    
        $("#menuv").load("controller/principalController.php?accion=mnuContratos");    
    }
    function menuhreportes(){        
        
        enContrucción();
        /*$("#areaTrabajo").load("controller/principalController.php?accion=mostrarFondo");    
        $("#menuv").load("controller/principalController.php?accion=mnuReportes");    */
    }
</script>
            </div>

            <div  class="pie">Sistema de Gestión Administrativa Virtual  - Gestor 2014 - Derechos Reservados
            </div>
        </div>

    </body>
</html>
<?php
}
else
{
    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
    echo "Usted no tiene autorización para ingresar a esta opción<br>";
    echo "Hemos registrado su dirección IP <br>";
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
       $ip=$_SERVER['HTTP_CLIENT_IP'];
    } elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    
    echo "Si usted persiste, procederemos a denunciarlo en la Division de Alta Tecnologia de la Policia Nacional del Peru.";
}
?>