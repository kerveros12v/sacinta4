<?php
require_once("../clasesphp/RelacionLaboralIES.php");
require_once("../Crud/CrudRelacionLaboralIES.php");

use Clasesphp\RelacionLaboralIES;
use Crud\CrudRelacionLaboralIES;

function cargarrliesT()
{
	$crud = new CrudRelacionLaboralIES();
	$listarlies = $crud->mostrar();
	$rlies = new RelacionLaboralIES();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="relacionlaboraliescodigo" name="relacionlaboraliescodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="relacionLaboralIES" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listarlies as $rlies) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="relacionlaboraliescodigo' . $rlies->getRelacionLaboralIESId() . '" name="relacionlaboraliescodigo' . $rlies->getRelacionLaboralIESId() . '" required="required" value="' . $rlies->getRelacionlaboraliescodigo() . '" />
			</td>
			<td>
				<input type="text" id="relacionLaboralIES' . $rlies->getRelacionLaboralIESId() . '" name="relacionLaboralIES' . $rlies->getRelacionLaboralIESId() . '" required="required" value="' . $rlies->getRelacionLaboralIES() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $rlies->getRelacionLaboralIESId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $rlies->getRelacionLaboralIESId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
echo cargarrliesT();
