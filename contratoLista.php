<center>
    <font color="#1d537f"><h1>Gestión de Contratos</h1></font>
    <form name=frmBusquedaTrabajador>
    <?php 
        echo "<input type='hidden' name='val' value=$val>";
     ?>
    <table>
        <tr>
          <th>Busqueda por Trabajador</th><th><input type='text' name='criterioBuscar'></th><th><input type='button' value='Buscar' onclick='buscar()'></th>
        </tr>        
    </table>

</form>
</center>
<script>
    val = document.frmBusquedaTrabajador.val.value;
    if (val == 1) {
        criterioBuscar = encodeURIComponent(document.frmBusquedaTrabajador.criterioBuscar.value);
        $("#area2").load("controller/contratoController.php?accion=mostrartodo&criterioBuscar="+criterioBuscar);
    }

    function buscar(){
        criterioBuscar=encodeURIComponent(document.frmBusquedaTrabajador.criterioBuscar.value);
        if(criterioBuscar.length>=1){
            $("#area2").load("controller/contratoController.php?accion=mostrarContratos&criterioBuscar="+criterioBuscar);
        }
        else
<<<<<<< HEAD
            alert('Debe de ingresar m��nimamente un caracter');
=======
            alert('Debe de ingresar mínimamente un caracter');
>>>>>>> 5d04742389ba3cc7193eb6599bf116077f6433a2
    }
</script>
