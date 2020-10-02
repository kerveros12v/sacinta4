<?php
require_once("../clasesphp/Cargodirectivo.php");
require_once("../Crud/CrudCargoDirectivo.php");

use Clasesphp\Cargodirectivo;
use Crud\CrudCargodirectivo;

function cargarcargoDirectivoT()
{
	$crudcargoDirectivo = new CrudCargodirectivo();
	$listacargoDirectivoes = $crudcargoDirectivo->mostrar();
	$cargoDirectivo1 = new Cargodirectivo();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="cargodirectivocodigo" name="cargodirectivocodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="cargoDirectivo" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listacargoDirectivoes as $cargoDirectivo1) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="cargodirectivocodigo' . $cargoDirectivo1->getCargoDirectivoId() . '" name="cargodirectivocodigo' . $cargoDirectivo1->getCargoDirectivoId() . '" required="required" value="' . $cargoDirectivo1->getCargodirectivocodigo() . '" />
			</td>
			<td>
				<input type="text" id="cargoDirectivo' . $cargoDirectivo1->getCargoDirectivoId() . '" name="cargoDirectivo' . $cargoDirectivo1->getCargoDirectivoId() . '" required="required" value="' . $cargoDirectivo1->getCargoDirectivo() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $cargoDirectivo1->getCargoDirectivoId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $cargoDirectivo1->getCargoDirectivoId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
echo cargarcargoDirectivoT();
