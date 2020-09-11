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
				<input type="text" class="camptext1" id="estudianteocupacioncodigo' . $dato->getEstudianteOcupacionId() . '" name="estudianteocupacioncodigo' . $dato->getEstudianteOcupacionId() . '" required="required" value="' . $dato->getEstudianteocupacioncodigo() . '" />
			</td>
			<td>
				<input type="text" id="estudianteOcupacion' . $dato->getEstudianteOcupacionId() . '" name="estudianteOcupacion' . $dato->getEstudianteOcupacionId() . '" required="required" value="' . $dato->getEstudianteOcupacion() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getEstudianteOcupacionId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getEstudianteOcupacionId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
echo cargarestudianteOcupacion();
