<?php
require_once("../clasesphp/Paises.php");
require_once("../Crud/CrudPaises.php");

use Clasesphp\Paises;
use Crud\CrudPaises;

function cargarPaisT()
{
	$oCrudPais = new CrudPaises();
	$listaPaises = $oCrudPais->mostrar();
	$pais1 = new Paises();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="paiscodigo" name="paiscodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="pais" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listaPaises as $pais1) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="paiscodigo' . $pais1->get_paisId() . '" name="paiscodigo' . $pais1->get_paisId() . '" required="required" value="' . $pais1->get_codigo() . '" />
			</td>
			<td>
				<input type="text" id="pais' . $pais1->get_paisId() . '" name="pais' . $pais1->get_paisId() . '" required="required" value="' . $pais1->get_pais() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $pais1->get_paisId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $pais1->get_paisId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
echo cargarPaisT();
