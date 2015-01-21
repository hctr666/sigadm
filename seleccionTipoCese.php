<div style="padding:20px;">
	<center>
		<h2>Cese de Contrato</h2>
	</center>
	<div id="dial" style="padding:10px;">
		<form name="frmElegir">
			<table>
				<tr>
				    <td>Con EMO:</td>
                	<td>
                    	<input name="chk_emo" type="checkbox" id="chk_emo"/>
                	</td>
				</tr>
				<tr>
	                <td>Fecha Examen:</td>
                	<td><input type="text" id="fechEmo" maxlength="10" name="fechEmo"</td>
				</tr>
				<tr><td></td><td></td></tr>
			</table>
			<br/>
			<center>
				<tr>
					<td><input type="button" name="btnenviar" id="btnenviar" value="Aceptar" onclick="validar()"/></td>
					<td><input type="button" name="btncancelar" id="btncancelar" value="Cancelar" onclick="closeModal()"/></td>
				</tr>
			</center>

			<input type="hidden" name="criterioBuscar" id="criterioBuscar" value="<?=$criterioBuscar?>">
			<input type="hidden" name="codi_trab" id="codi_trab" value="<?=$codi_trab?>">
			<input type="hidden" name="codi_contr" id="codi_contr" value="<?=$codi_contr?>">
		</form>
	</div>
</div>
<script src="js/DatePicker.js"></script>
<script>

	$(function() {
        $("#fechEmo").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });

    var emo = "sin";
	$("#chk_emo").click(function(){
        if (this.checked){
            emo = "con";
            alert(emo);   
        } else {
        	emo = "sin";
        	alert(emo);
        }
	});



    function validar(){
        fechEmo = document.frmElegir.fechEmo.value;

        if (fechEmo.length == 0) {
            alert("Debe seleccionar una fecha para el examen");
            document.frmElegir.fechEmo.value;
            return;
        };

        subir();
        criterioBuscar = document.frmElegir.criterioBuscar.value;
        codi_contr = document.frmElegir.codi_contr.value;
        codi_trab = document.frmElegir.codi_trab.value;
        //alert(codi_contr + " - " + codi_trab);
        var actionPath = "controller/contratoController.php?accion=cesarContrato&codi_contr="+codi_contr+
        				 "&codi_trab="+codi_trab+"&emo="+emo+"&fechEmo="+fechEmo;
        var opciones = "toolbar=0, menubar=0,scrollbars=1,width=600,height=400,left=10, top=10,titlebar=no,resizable=1"
        closeModal();
        window.open(actionPath, '', opciones);
    }
</script>