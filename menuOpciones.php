<script>

    function cumpleanios()
    {
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=cumpleanios");
    }

    function contratos()
    {
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=contratos&val=1");
    }

    function trabajador()
    {
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=trabajador&buscar=no&val=1");
    }

    function cargos()
    {
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=cargos");
        $("#area2").load(" ");
    }

    function areas()
    {
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=area");
    }

    function condiciones()
    {
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=condiciones");
        $("#area2").load(" ");
    }

</script>
<div class="menu_top_bg">CONTRATOS</div> 
<div class="sub_menu"> 
    <ul>
        <li onclick="contratos()"><a href="#"  title="GESTION DE CONTRATOS">GESTION DE CONTRATOS</a></li>        
        <li onclick="trabajador()"><a href="#"  title="GESTION DE PERSONAL">GESTION DE PERSONAL</a></li>              
    </ul>
</div> 
<div class="menu_top_bg">REPORTES</div> 
<div class="sub_menu"> 
    <ul>                       
        <li onclick="cumpleanios()"><a href="#" title="MANTENIMIENTO DE CARGOS">LISTADO DE CUMPLEAÑOS DEL MES</a></li>                         
        
    </ul>
</div> 
<div class="menu_top_bg">MANTENIMIENTO DE TABLAS </div> 
<div class="sub_menu"> 
    <ul>
        <li onclick="cargos()"><a href="#" title="MANTENIMIENTO DE CARGOS">MANTENIMIENTO DE CARGOS</a></li>                         
        <!--<li onclick="areas()"><a href="#" title="MANTENIMIENTO DE AREAS">MANTENIMIENTO DE AREAS</a></li>-->
        <li onclick="condiciones()"><a href="#" title="MANTENIMIENTO DE CONDICION LABORAL">MANTENIMIENTO DE CONDICION LABORAL</a></li>    
    </ul>
</div> 
