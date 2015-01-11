<center>
    <?php
        if ($buscar == 'si'){
            echo '<h1>Buscar Trabajador</h1>';
        } else {
            echo '<h1>Gestión del Trabajador</h1>';
        }
    ?>
    <form name=frmBusquedaTrabajador>
    <?php 
        echo "<input type='hidden' name='val' value=$val>";
     ?>
        <table>
            <tr><th>Busque a Trabajador:</th><th><input type='text' name='criterioBuscar'></th><th>
                    <input type='button' value='Buscar' onclick='
                    <?php        
                        if ($buscar == 'si') 
                            echo "buscarTrabSi()";
                        else
                            echo "buscarTrabNo()";
                    ?>'>
                </th>
            </tr>        
        </table>
        <div id="detalleBusqueda">    </div>
        <?php
            if ($buscar == 'si') {
                echo "<input type=button onclick='closeModal()' value='Cancelar Busqueda' />";
            }
                echo "<input type=hidden name=buscar value='$buscar' />";
        ?>
    </form>
</center>
<script>

    val = document.frmBusquedaTrabajador.val.value;
    if (val == 1) {
        criterioBuscar = encodeURIComponent(document.frmBusquedaTrabajador.criterioBuscar.value);
        buscar=encodeURIComponent(document.frmBusquedaTrabajador.buscar.value);
        $("#area2").load("controller/trabajadorController.php?accion=mostrartodo&criterioBuscar="+criterioBuscar+"&buscar="+buscar);
    }

    function buscarTrabSi(){
        criterioBuscar=encodeURIComponent(document.frmBusquedaTrabajador.criterioBuscar.value);
        buscar=encodeURIComponent(document.frmBusquedaTrabajador.buscar.value);
        
        if(criterioBuscar.length>=1)
             $("#detalleBusqueda").load("controller/trabajadorController.php?accion=buscar&criterioBuscar="+criterioBuscar+"&buscar="+buscar);
        else
            alert('Debe de ingresar mínimamente un caracter');
    }
    function buscarTrabNo(){
        criterioBuscar=encodeURIComponent(document.frmBusquedaTrabajador.criterioBuscar.value);
        buscar=encodeURIComponent(document.frmBusquedaTrabajador.buscar.value);
        
        if(criterioBuscar.length>=1)
            $("#area2").load("controller/trabajadorController.php?accion=buscar&criterioBuscar="+criterioBuscar+"&buscar="+buscar);
        else
            alert('Debe de ingresar mínimamente un caracter');
    }
   
</script>