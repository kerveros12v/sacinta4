<?php
require_once("../Crud/crudPermisos.php");
require_once("ajaxsselecttipousuario.php");
require_once("ajaxsseletdepartamentos.php");
require_once("ajaxsselect2.php");
require_once("../controladores/respuestasgenerales.php");
use Clasesphp\AccesoDepartamentos;
use Clasesphp\Permisos;
use Crud\CrudPermisos;
session_start();

function cargarAccesosT($op)
{
	$crudd = new CrudPermisos();
	$dato = new AccesoDepartamentos();

	$lista = '
	<tr>
		<td>
		'.ajaxs_select2().'
		</td>
		<td>
		<select class="selector" id="departamentoselect" name="departamentoselect">
		'.cargarlstdepartamentos(-1).'
		</select>
		</td>
		<td>
		<select class="selector" id="tipuusuarioselect" name="tipuusuarioselect">
		'.cargartipoUsuario(-1).'
		</select>
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	$listag=$crudd->mostrarAccessoPermiso($op);
	foreach ($listag as $dato) {
		$lista .= '
		<tr>
		<td>
		</td>
		<td>
		<select class="selector" id="departamentoselect'. $dato->get_idaccesodepartamento().'" name="departamentoselect">
		'.cargarlstdepartamentos($dato->get_departamentos_iddepartamentos()).'
		</select>
		</td>
		<td>
		<select class="selector" id="tipuusuarioselect'. $dato->get_idaccesodepartamento().'" name="tipuusuarioselect">
		'.cargartipoUsuario($dato->get_tipousuario_idtipousuario()).'
		</select>
		</td>
		<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_idaccesodepartamento() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' .  $dato->get_idaccesodepartamento() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
 if ($_SESSION['user']!="") {
	echo cargarAccesosT($_POST['id']);
 } else
 echo tiempoExedido();
