<?php
require_once("../clasesphp/Ingresoconconcursomeritos.php");
require_once("../Crud/CrudIngresoconConcursomeritorio.php");

use Clasesphp\Ingresoconconcursomeritos;
use Crud\CrudIngresoconconcursomeritos;

function cargariccmT()
{
	$crudiccm = new CrudIngresoconconcursomeritos();
	$listaiccm = $crudiccm->mostrar();
	$iccm = new Ingresoconconcursomeritos();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="ingresoconconcursomeritoscodigo" name="ingresoconconcursomeritoscodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="ingresoConConcursoMeritos" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listaiccm as $iccm) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="ingresoconconcursomeritoscodigo' . $iccm->getIngresoConConcursoMeritosId() . '" name="ingresoconconcursomeritoscodigo' . $iccm->getIngresoConConcursoMeritosId() . '" required="required" value="' . $iccm->getIngresoconconcursomeritoscodigo() . '" />
			</td>
			<td>
				<input type="text" id="ingresoConConcursoMeritos' . $iccm->getIngresoConConcursoMeritosId() . '" name="ingresoConConcursoMeritos' . $iccm->getIngresoConConcursoMeritosId() . '" required="required" value="' . $iccm->getIngresoConConcursoMeritos() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $iccm->getIngresoConConcursoMeritosId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $iccm->getIngresoConConcursoMeritosId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
try {
	echo cargariccmT();
} catch (\Throwable $e ) {
	echo $e;
}

