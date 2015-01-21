<?php
 $listaTrabajador


?>

<center>
   <h1>Lista de Personas que cumpleaños este Mes</h1>
    <form name=frmBuscar>
        <table class="ismtable">
            <thead>
            	<tr>
            		<th>DNI</th>
            		<th>Ap. Paterno</th>
            		<th>Ap. Materno</th>
            		<th>Nombre</th>
            		<th>Día</th>
            	</tr>
            </thead>
            <tbody>		
            <?php
            if (count($listaTrabajador) > 0) {
                foreach ($listaTrabajador as $trabajador) {
                    echo "<tr>";
                    echo "<td>$trabajador->nume_dni</td>";
                    echo "<td>$trabajador->appa_trab</td>";
                    echo "<td>$trabajador->apma_trab</td>";
                    echo "<td>$trabajador->nomb_trab</td>";                
                    echo "<td>$trabajador->dia</td>";     
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table><br/>    
        
        
    </form>
</center>