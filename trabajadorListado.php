<center>
    <?php
<<<<<<< HEAD

        if ($buscar=='no') {
	   echo "<div style='float:right;'><input type='button' name='btnNuevo' onclick='nuevo()' value='Nuevo Trabajador'/></div>";
	}

=======
>>>>>>> 5d04742389ba3cc7193eb6599bf116077f6433a2
        if ($buscar=='si'){
            echo "<br/>";
        } else if(isset($criterioBuscar) && $criterioBuscar != ""){
            echo "<h3>Listado de Trabajadores que empiecen con '$criterioBuscar'</h3>";
        } else {
            echo "<h3>Listado de Trabajadores</h3>";
        }
    ?>
    <form name=frmBuscar>
        <table class="ismtable">
            <thead>
            	<tr>
            		<th>Codigo</th>
            		<th>Ap. Paterno</th>
            		<th>Ap. Materno</th>
            		<th>Nombre</th>
            		<th>DNI</th>
		                <?php
		                if ($buscar=='no')
		                    echo "<th>Dirección</th><th>Distrito</th><th>F/Naci.</th><th>Editar</th><th>Imprimir</th>";
		                else
		                    echo "<th>Seleccionar</th>";
		                ?>
            	</tr>
            </thead>
            <tbody>
            <?php
            if (count($listaTrabajador) > 0) {
                foreach ($listaTrabajador as $trabajador) {
                    $fecha = date('d/m/Y', strtotime($trabajador->fech_naci));
                    $nombre=$trabajador->appa_trab." ".$trabajador->apma_trab." ".$trabajador->nomb_trab;
                    echo "<tr>";
                    echo "<td>$trabajador->codi_sap</td>";
                    echo "<td>$trabajador->appa_trab</td>";
                    echo "<td>$trabajador->apma_trab</td>";
                    echo "<td>$trabajador->nomb_trab</td>";
                    echo "<td>$trabajador->nume_dni</td>";
                    if ($buscar=='no') {
                        echo "<td>$trabajador->dire_trab</td>";
                        echo "<td>$trabajador->desc_dist</td>";
                        echo "<td>$fecha</td>";
                        echo "<td align=center><input type='button' name='editar' onclick='e($trabajador->codi_trab)' /></td>";
                        echo "<td align=center><input type='button' name='imprimir' onclick='i($trabajador->codi_trab);'/></td>";
                    } else {       
                       
                        $nombre=rawurlencode($nombre);
                        echo "<td align=center><input type=button name=selec onclick=s($trabajador->codi_trab,'$nombre') /></td>";
                        
                    }
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
        <br/>
        <input type='hidden' name='criterioBuscar'  value='<?=$criterioBuscar;?>' />
        <input type='hidden' name='buscar'  value='<?=$buscar;?>' />

        <?php
        if (count($listaTrabajador) == 0) {
<<<<<<< HEAD
            echo "<font color='red'>No existen elementos con ese criterio!</font>";
=======
            echo "<font color='red'>¡No existen elementos con ese criterio!</font>";
>>>>>>> 5d04742389ba3cc7193eb6599bf116077f6433a2
        }
        ?>
        <br/>
        <?php
            if ($buscar=='no') {
<<<<<<< HEAD
                echo "<input type='button' name='btnNuevo' onclick='nuevo()' value='Nuevo Trabajador'/>";
=======
                echo "<input type='button' name='btnNuevo' onclick='nuevo()' value='Agregar Trabajador'/>";
>>>>>>> 5d04742389ba3cc7193eb6599bf116077f6433a2
                echo "<input type='button' name='btnBuscar' onclick='buscarTrab()' value='Nueva Busqueda'/>";
            }
        ?>
    </form>
</center>
<script>
    function s(codi_trab,nombre)
    {
        var myTextField  =document.getElementById('txtNombre');
        myTextField.value=decodeURIComponent(nombre);
        //document.frmEditar.nombre.value=nombre;        
        document.frmEditar.codi_trab.value=codi_trab;

        $('#bgmodal').remove();
        $('#bgtransparent').remove();
        
         
        
        /*document.frmEditar.nombre.value=nombre;
        document.frmEditar.nombre.value=nombre;*/
    }
    function e(id)
    {
        criterioBuscar = document.frmBuscar.criterioBuscar.value;  
        buscar= document.frmBuscar.buscar.value; 
        $("#areaTrabajo").load("controller/trabajadorController.php?accion=editar&id="+id+"&criterioBuscar="+criterioBuscar+"&buscar="+buscar);
		subir();
	}
    
    function i(id)
    {
        var actionPath = "controller/trabajadorController.php?accion=imprimir&id="+id;
        var opciones = "toolbar=0, menubar=0,scrollbars=1,width=600,height=400,left=10, top=10,titlebar=no,resizable=1"
        window.open(actionPath, '', opciones);
    }
    function nuevo(){   
        criterioBuscar = document.frmBuscar.criterioBuscar.value;    
        buscar= document.frmBuscar.buscar.value; 
        $("#areaTrabajo").load("controller/trabajadorController.php?accion=nuevo&criterioBuscar="+criterioBuscar+"&buscar="+buscar);
        subir();
    }
    function eliminar(){
<<<<<<< HEAD
        alert('Usted no puede utilizar esta opci��n');
=======
        alert('Usted no puede utilizar esta opción');
>>>>>>> 5d04742389ba3cc7193eb6599bf116077f6433a2
    }  
    function buscarTrab()
    {
        criterioBuscar = document.frmBuscar.criterioBuscar.value;    
        buscar= document.frmBuscar.buscar.value;    
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=trabajador&val=0&criterioBuscar="+criterioBuscar+"&buscar="+buscar);
        document.body.scrollTop = document.documentElement.scrollTop = 0;
    }
</script>