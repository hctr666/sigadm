<?php
 $listaTrabajador


?>

<center>
   <h1>Lista de Personas que cumpleaños este Mes</h1>
    <form name=frmBuscar>
        <table border="1">
            <tr><th>DNI</th><th>Ap. Paterno</th><th>Ap. Materno</th><th>Nombre</th><th>Día</th>
            </tr>
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
        </table><br/>    
        
        
    </form>
</center>