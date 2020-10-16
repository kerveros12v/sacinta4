<?php
require_once("../Crud/CrudSexo.php");
require_once("../controladores/respuestasgenerales.php");

use Clasesphp\Sexos;
use Crud\CrudSexo;

session_start();
function cargarSexosT()
{
	$crudd = new CrudSexo();
	$listasexos = $crudd->mostrar();
	$dato = new Sexos();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="sexocodigo" name="sexocodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="sexo" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';

	foreach ($listasexos as $dato) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="sexocodigo' . $dato->getSexoId() . '" name="sexocodigo' . $dato->getSexoId() . '" required="required" value="' . $dato->getSexocodigo() . '" />
			</td>
			<td>
				<input type="text" id="sexo' . $dato->getSexoId() . '" name="sexo' . $dato->getSexoId() . '" required="required" value="' . $dato->getSexo() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getSexoId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getSexoId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
if ($_SESSION['user'] != "") {
	echo cargarSexosT();
} else {
	echo  tiempoExedido();
}
