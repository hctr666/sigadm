<center>
    <h1>Listado de Condiciones Laborales</h1>
    <form name='FrmAreas'>
        <table class="ismtable">
        	<thead>
	            <tr>
<<<<<<< HEAD
	            	<th>C®Ædigo</th>
	            	<th>Descripci®Æn</th>
=======
	            	<th>C√≥digo</th>
	            	<th>Descripci√≥n</th>
>>>>>>> 5d04742389ba3cc7193eb6599bf116077f6433a2
	            	<th>Editar</th>
	            </tr>
        	</thead>
        	<tbody>
            <?php
            foreach ($listaCondicion as $condicion) {
                echo "<tr>";
                echo "<td>$condicion->codi_cond</td>";
                echo "<td>$condicion->desc_cond</td>";
                echo "<td align=center><input type='button' name='editar' onclick='enContruccion()' /></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
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