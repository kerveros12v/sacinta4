<?php
require_once("../Crud/CrudEtnia.php");
require_once("../controladores/respuestasgenerales.php");

use Clasesphp\Etnias;
use Crud\CrudEtnia;
session_start();
function cargarEtniasT()
{
	$crudd = new CrudEtnia();
	$listaetnias = $crudd->mostrar();
	$dato = new Etnias();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="etniascodigo" name="etniascodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="etnia" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listaetnias as $dato) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="etniascodigo' . $dato->get_etniaId() . '" name="etniascodigo' . $dato->get_etniaId() . '" required="required" value="' . $dato->get_etniascodigo() . '" />
			</td>
			<td>
				<input type="text" id="etnia' . $dato->get_etniaId() . '" name="etnia' . $dato->get_etniaId() . '" required="required" value="' . $dato->get_etnia() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_etniaId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_etniaId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
if ($_SESSION['user']!="") {
	echo cargarEtniasT();
} else{
	echo '<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
			'.tiempoExedido().'
		</td>
	</tr>';
}

?>