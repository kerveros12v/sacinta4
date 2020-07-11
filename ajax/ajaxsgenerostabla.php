<?php
require_once("../clasesphp/Generos.php");
require_once("../Crud/CrudGeneros.php");
require_once("../controladores/respuestasgenerales.php");

use Clasesphp\Generos;
use Crud\CrudGeneros;
session_start();
function cargarGeneroT()
{
	$crudd = new CrudGeneros();
	$listageneros = $crudd->mostrar();
	$dato = new Generos();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="generoscodigo" name="generoscodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="genero" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listageneros as $dato) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="generoscodigo' . $dato->get_generoId() . '" name="generoscodigo' . $dato->get_generoId() . '" required="required" value="' . $dato->get_generoscodigo() . '" />
			</td>
			<td>
				<input type="text" id="genero' . $dato->get_generoId() . '" name="genero' . $dato->get_generoId() . '" required="required" value="' . $dato->get_genero() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_generoId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_generoId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
if ($_SESSION['user']!="") {
	echo cargarGeneroT();
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