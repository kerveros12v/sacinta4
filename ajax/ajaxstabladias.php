<?php
require_once("../clasesphp/Dias.php");
require_once("../Crud/CrudDias.php");

use Clasesphp\Dias;
use Crud\CrudDias;

function cargarDias()
{
	$cruddias = new CrudDias();
	$listadias = $cruddias->mostrar();
	$dias = new Dias();
	$lista = '
	<tr>
		<td>
		</td>

		<td>
			<input type="text" id="dia" name="dia" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listadias as $dias) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" id="dia' . $dias->getIdDias() . '" name="dia' . $dias->getIdDias() . '" required="required" value="' . $dias->getDia() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dias->getIdDias() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dias->getIdDias() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
echo cargarDias();
