<center>
    <H1>
        <?php 
            if ($agregando <> 1) {
                echo "EDITAR TRABAJADOR";
            } else {
                echo "AGREGAR TRABAJADOR";
            }
         ?>
    </H1>
    <form name="frmEditar">
        <table>
            <tr>
                <td>Ap. Paterno</td>
                <td><input type="text" maxlength="100" name="appa_trab"  size="50" value="<?php
if ($agregando <> 1) {
    echo $registro->appa_trab;
}
?>"></td>
            </tr>   
            <tr>
                <td>Ap. Materno</td>
                <td><input type="text" maxlength="100" name="apma_trab"  size="50" value="<?php
if ($agregando <> 1) {
    echo $registro->apma_trab;
}
?>"></td>
            </tr>   
            <tr>
                <td>Nombres</td>
                <td><input type="text" maxlength="100" name="nomb_trab"  size="50" value="<?php
if ($agregando <> 1) {
    echo $registro->nomb_trab;
}
?>"></td>
            </tr>   
            <tr>
                <td>Codigo SAP</td>
                <td><input type="text" maxlength="6" name="codi_sap" value="<?php
                           if ($agregando <> 1) {
                               echo $registro->codi_sap;
                           }
?>"></td>
            </tr>

            <tr>
                <td>DNI</td>
                <td><input type="text" maxlength="8" name="nume_dni" value="<?php
                           if ($agregando <> 1) {
                               echo $registro->nume_dni;
                           }
?>"></td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><input type="text" maxlength="100" name="dire_trab" size="50" value="<?php
                           if ($agregando <> 1) {
                               echo $registro->dire_trab;
                           }
?>"></td>
            </tr>  <tr>
                <td>Distrito</td>
                <td>
                    <?php 
                        require_once('util/DataCombo.php');
                        if($agregando<>1) 
                            DataCombo::mostrar('codi_dist',$listaDistritos, 'codi_dist', 'desc_dist', $registro->codi_dist,'');
                        else
                            DataCombo::mostrar('codi_dist',$listaDistritos, 'codi_dist', 'desc_dist', '','');
                    ?>
                </td>
            </tr>
            <tr>
                <td>Fecha Naci.</td>
                <td><input type="text"  id="datepicker" maxlength="10" name="fech_naci" value="<?php
                           if ($agregando <> 1) {
                               $fecha=date('d/m/Y' ,strtotime($registro->fech_naci));
                               echo $fecha;
                           }
?>"></td>
            </tr>
          
            <tr>
                <td>
                    <?php
                    if ($agregando <> 1)
                        echo "<input type='button' name='grabar' onclick='validarUsuario(0,$registro->codi_trab);' value='Guardar Cambios'/>";
                    else
                        echo "<input type='button' name='grabar' onclick='validarUsuario(1);' value='Grabar Trabajador'/>";
                    ?>
                </td>
                <td>
                    <input type='button' name='cancelar' onclick='c();' value='Cancelar Operación'/>
                    <input type='hidden' name='criterioBuscar' value='<?=$criterioBuscar?>' />
                    <input type='hidden' name='buscar' value='<?=$buscar?>' />
                </td>
            </tr>
        </table>
    </form>
</center>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    function c(){
        buscar=encodeURIComponent(document.forms[0].buscar.value);
        criterioBuscar=encodeURIComponent(document.forms[0].criterioBuscar.value);
        $("#area2").load("controller/trabajadorController.php?accion=buscar&criterioBuscar="+criterioBuscar+"&buscar="+buscar);
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=trabajador&val=0&buscar="+buscar);
    }
    function validarUsuario(agregando,id) {
        appa_trab = encodeURIComponent(document.forms[0].appa_trab.value);
        apma_trab = encodeURIComponent(document.forms[0].apma_trab.value);
        nomb_trab = encodeURIComponent(document.forms[0].nomb_trab.value);
        codi_sap = encodeURIComponent(document.forms[0].codi_sap.value);
        nume_dni = encodeURIComponent(document.forms[0].nume_dni.value);
        dire_trab = encodeURIComponent(document.forms[0].dire_trab.value);
        codi_dist = encodeURIComponent(document.forms[0].codi_dist.value);
        fech_naci = encodeURIComponent(document.forms[0].fech_naci.value);
        criterioBuscar = encodeURIComponent(document.forms[0].criterioBuscar.value);
        buscar=encodeURIComponent(document.forms[0].buscar.value);
        if (appa_trab.length == 0) {
            alert("Debes ingresar Ap.Paterno");
            document.forms[0].appa_trab.focus();
            return;
        }        
        if (apma_trab.length == 0) {
            alert("Debes ingresar Ap.Materno");
            document.forms[0].apma_trab.focus();
            return;
        }
        if (nomb_trab.length == 0) {
            alert("Debes ingresar Nombre");
            document.forms[0].nomb_trab.focus();
            return;
        }
        if (codi_sap.length == 0) {
            alert("Debes ingresar Codigo SAP");
            document.forms[0].codi_sap.focus();
            return;
        }
        if (nume_dni.length == 0) {
            alert("Debes ingresar DNI");
            document.forms[0].nume_dni.focus();
            return;
        }
        if (dire_trab.length == 0) {
            alert("Debes ingresar Direccion");
            document.forms[0].dire_trab.focus();
            return;
        }
        if (codi_dist.length == 0) {
            alert("Debes ingresar Distrito");
            document.forms[0].codi_dist.focus();
            return;
        }
        if (fech_naci.length == 0) {
            alert("Debes ingresar Fecha Nac");
            document.forms[0].fech_naci.focus();
            return;
        }
        if(agregando==0){              
            $("#area2").load("controller/trabajadorController.php?accion=grabar_editar&criterioBuscar="+criterioBuscar+"&buscar="+buscar+"&id="+id+"&appa_trab="+appa_trab+"&apma_trab="+apma_trab+"&nomb_trab="+nomb_trab+"&codi_sap="+codi_sap+"&nume_dni="+nume_dni+"&dire_trab="+dire_trab+"&codi_dist="+codi_dist+"&fech_naci="+fech_naci);
            $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=trabajador&val=0&buscar="+buscar);
        }

        else
            $("#area2").load("controller/trabajadorController.php?accion=grabar_nuevo&criterioBuscar="+criterioBuscar+"&buscar="+buscar+"&appa_trab="+appa_trab+"&apma_trab="+apma_trab+"&nomb_trab="+nomb_trab+"&codi_sap="+codi_sap+"&nume_dni="+nume_dni+"&dire_trab="+dire_trab+"&codi_dist="+codi_dist+"&fech_naci="+fech_naci);
            $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=trabajador&val=0&buscar="+buscar);     
    }

</script>