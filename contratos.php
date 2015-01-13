<center>
    <!--<font color="#1d537f"><h1>Gestión de Contratos</h1></font>-->
    <?php 
        if (isset($criterioBuscar) && $criterioBuscar != "") {
            echo "<h3>Listado de Contratos de Trabajadores que empiecen con '$criterioBuscar'</h3>";
        } else {
            echo "<h3>Listado de Contratos</h3>";
        }

     ?>
        <div id='edicionContrato'>
        <!--<h3>Listado de Contratos:</h3>-->
        <form name=frmBuscar>
            <table border="1">
                <tr><th>Codigo</th>
                    <th>Nombre</th>                        
                    <th>Tipo</th>            
                    <th>Cargo</th>
                    <th>Condicion</th>
                    <th>Fech. Inic</th>
                    <th>Fech. Fin</th>            
                    <th ALIGN='CENTER'> Indt.</th>            

                    <th>Monto</th>                                    
                    <th>Editar</th>
                    <th>Imprimir</th></tr>
                <?php
                if (count($listacontratos) > 0) {
                    foreach ($listacontratos as $contrato) {
                        $fechaIni = date('d/m/Y', strtotime($contrato->fech_inic));
                        $fechaFin = date('d/m/Y', strtotime($contrato->fech_fin));
                        
                        echo "<tr>";
                        echo "<td>$contrato->codi_contr</td>";
                        echo "<td>$contrato->nombre</td>";
                        echo "<td>$contrato->desc_tipo</td>";
                        echo "<td>$contrato->desc_carg</td>";
                        echo "<td>$contrato->desc_cond</td>";
                        echo "<td>$fechaIni</td>";                        
                        if($contrato->indt_cont==1){
                            echo "<td>Indeterminado</td>";
                            echo "<td  ALIGN='CENTER' >Si</td>";
                        }
                        else{
                            echo "<td>$fechaFin</td>";
                            echo "<td  ALIGN='CENTER'>No</td>";
                        }
                        
                        echo "<td>$contrato->mont_cont</td>";
                        //echo "<td>$fecha</td>";            
                        echo "<td align=center><input type='button' name='s' onclick=editContrato('$contrato->codi_contr','$contrato->codi_trab') /></td>";
                        echo "<td align=center><input type='button' name='i' onclick=impriContrato('$contrato->codi_contr','$contrato->codi_trab') /></td>";

                        echo "</tr>";
                    }
                }
                ?>
            </table><br/>    

            <input type='hidden' name='criterioBuscar'  value='<?=$criterioBuscar;?>' />

            <?php
            if (count($listacontratos) == 0) {
                echo "<font color='red'>¡No existen contratos para el trabajador seleccionado!</font>";
            }
            ?>
            <br/>    
            <input type='button' name='btnNuevo' onclick='nuevoContrato()' value='Agregar Contrato'/>
            <input type='button' name='btnBuscar' onclick='buscarContrato()' value='Nueva Busqueda'/>
        </form>
    </div>
</center>
<script>
    function editContrato(codi_contr,codi_trab){
        //criterioBuscar = document.frmBuscar.criterioBuscar.value;
        $("#areaTrabajo").load("controller/contratoController.php?accion=editar&codi_contr="+codi_contr+"&codi_trab="+codi_trab+"&criterioBuscar="+criterioBuscar);
        document.body.scrollTop = document.documentElement.scrollTop = 0;
    }

    function i(id)
    {
        //criterioBuscar = document.frmBuscar.criterioBuscar.value;   
        //$("#areaTrabajo").load("controller/trabajadorController.php?accion=editar&id="+id+"&criterioBuscar="+criterioBuscar);
        var actionPath = "controller/trabajadorController.php?accion=imprimir&id="+id;
        var opciones = "toolbar=0, menubar=0,scrollbars=1,width=600,height=400,left=10, top=10,titlebar=no,resizable=1"
        window.open(actionPath, '', opciones);    
    }
    
    function nuevoContrato(){   
        criterioBuscar = document.frmBuscar.criterioBuscar.value;    
        $("#areaTrabajo").load("controller/contratoController.php?accion=nuevo&criterioBuscar="+criterioBuscar);
        document.body.scrollTop = document.documentElement.scrollTop = 0;
    }
    
    function eliminar(){
        alert('Usted no puede utilizar esta opción');
    }  
    
    function buscarContrato()
    {
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=contratos&val=0");
        document.body.scrollTop = document.documentElement.scrollTop = 0;
    }

    function impriContrato(id, idtrab){
        criterioBuscar = document.frmBuscar.criterioBuscar.value;    
        var actionPath = "controller/contratoController.php?accion=imprimirContrato&id="+id+"&idtrab="+idtrab;
        var opciones = "toolbar=0, menubar=0,scrollbars=1,width=600,height=400,left=10, top=10,titlebar=no,resizable=1"
        window.open(actionPath, '', opciones);    
    }
</script>