<?php
require_once("../clasesphp/Estudianteocupacion.php");
require_once("../Crud/CrudEstudianteOcupacion.php");

use Clasesphp\Estudianteocupacion;
use Crud\CrudEstudianteOcupacion;

function cargarestudianteOcupacion()
{
	$crud = new CrudEstudianteOcupacion();
	$listaget_estudianteOcupaciones = $crud->mostrar();
	$dato = new Estudianteocupacion();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="estudianteocupacioncodigo" name="estudianteocupacioncodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="estudianteOcupacion" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listaget_estudianteOcupaciones as $dato) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="estudianteocupacioncodigo' . $dato->get_estudianteOcupacionId() . '" name="estudianteocupacioncodigo' . $dato->get_estudianteOcupacionId() . '" required="required" value="' . $dato->get_estudianteocupacioncodigo() . '" />
			</td>
			<td>
				<input type="text" id="estudianteOcupacion' . $dato->get_estudianteOcupacionId() . '" name="estudianteOcupacion' . $dato->get_estudianteOcupacionId() . '" required="required" value="' . $dato->get_estudianteOcupacion() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_estudianteOcupacionId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_estudianteOcupacionId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
echo cargarestudianteOcupacion();
