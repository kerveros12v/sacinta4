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
				<input type="text" class="camptext1" id="sexocodigo' . $dato->get_sexoId() . '" name="sexocodigo' . $dato->get_sexoId() . '" required="required" value="' . $dato->get_sexocodigo() . '" />
			</td>
			<td>
				<input type="text" id="sexo' . $dato->get_sexoId() . '" name="sexo' . $dato->get_sexoId() . '" required="required" value="' . $dato->get_sexo() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_sexoId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_sexoId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
if ($_SESSION['user']!="") {
	echo cargarSexosT();
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