<center>
    <h1>Listado de Condiciones Laborales</h1>
    <form name='FrmAreas'>
        <table border="1">
            <tr><th>Código</th><th>Descripción</th><th>Editar</th>
            </tr>
            <?php
            foreach ($listaCondicion as $condicion) {
                echo "<tr>";
                echo "<td>$condicion->codi_cond</td>";
                echo "<td>$condicion->desc_cond</td>";
                echo "<td align=center><input type='button' name='editar' onclick='enContruccion()' /></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <br/>
        <input type='button' name='nuevo' onclick='enContruccion()' value='Agregar Cargo' />
    </form>
</center>
<script>
    function enContruccion()
    {
        alert('En Construccion')        ;
    }
</script>