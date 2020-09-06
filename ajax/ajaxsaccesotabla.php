<?php
require_once("../Crud/crudPermisos.php");
require_once("ajaxsselecttipousuario.php");
require_once("ajaxsseletdepartamentos.php");
require_once("ajaxsselect2.php");
require_once("../controladores/respuestasgenerales.php");

use Clasesphp\AccesoDepartamentos;
use Crud\CrudPermisos;

session_start();

function cargarAccesosT($op)
{
	$crudd = new CrudPermisos();
	$dato = new AccesoDepartamentos();

	$lista = '
	<tr>
		<td>
		' . ajaxs_select2() . '
		</td>
		<td>
		<select class="selector" id="departamentoselect" name="departamentoselect">
		' . cargarlstdepartamentos(-1) . '
		</select>
		</td>
		<td>
		<select class="selector" id="tipuusuarioselect" name="tipuusuarioselect">
		' . cargartipoUsuario(-1) . '
		</select>
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	$listag = $crudd->mostrarAccessoPermiso($op);
	foreach ($listag as $dato) {
		$lista .= '
		<tr>
		<td>
		</td>
		<td>
		<select class="selector" id="departamentoselect' . $dato->getIdaccesodepartamento() . '" name="departamentoselect">
		' . cargarlstdepartamentos($dato->getDepartamentos_iddepartamentos()) . '
		</select>
		</td>
		<td>
		<select class="selector" id="tipuusuarioselect' . $dato->getIdaccesodepartamento() . '" name="tipuusuarioselect">
		' . cargartipoUsuario($dato->getTipousuario_idtipousuario()) . '
		</select>
		</td>
		<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdaccesodepartamento() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' .  $dato->getIdaccesodepartamento() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
if ($_SESSION['user'] != "") {
	echo cargarAccesosT($_POST['id']);
} else
	echo tiempoExedido();
