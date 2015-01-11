<center>
    <h1>Listado de Cargos</h1>    
    <form name='FrmCargos'>
        <?php
        echo 'Tipo Trabajo: ';
        require_once('util/DataCombo.php');
        DataCombo::mostrar('codi_tipo', $listaTipo, 'codi_tipo', 'desc_tipo', $codi_tipo, 'actu()')
        ?>
        <br/><br/>

        <table border="1">        
            <tr><th>Código</th><th>Descripción</th><th>Editar</th>
            </tr>
            <?php
            foreach ($listaCargo as $cargo) {
                echo "<tr>";
                echo "<td>$cargo->codi_carg</td>";
                echo "<td>$cargo->desc_carg</td>";
                echo "<td align=center><input type='button' name='editar' onclick='enContruccion()' /></td>";
                echo "</tr>";
            }
            ?>
        </table><br/>
        <input type='button' name='nuevo' onclick='enContruccion()' value='Agregar Cargo' />
    </form>
</center>
<script>
    function enContruccion()
    {
        alert('En Construccion')        ;
    }
    function actu()
    {
        codi_tipo= document.FrmCargos.codi_tipo.value;
        $("#areaTrabajo").load("controller/menuOpcionesController.php?accion=cargos&codi_tipo="+codi_tipo);
    }
</script>