<?php
require_once("../clasesphp/Tipoenfermedadcatastrofica.php");
require_once("../Crud/CrudTipoEnfernedadCatastrofica.php");

use Clasesphp\Tipoenfermedadcatastrofica;
use Crud\CrudTipoenfermedadcatastrofica;

function cargartipoEnfermedadCatastroficaT()
{
	$crud1 = new CrudTipoenfermedadcatastrofica();
	$listatec = $crud1->mostrar();
	$tec = new Tipoenfermedadcatastrofica();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="teccodigo" name="teccodigo required="required" value="" />
		</td>
		<td>
			<input type="text" id="tipoEnfermedadCatastrofica" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listatec as $tec) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="teccodigo' . $tec->getTipoEnfermedadCatastroficaId() . '" name="teccodigo' . $tec->getTipoEnfermedadCatastroficaId() . '" required="required" value="' . $tec->getTeccodigo() . '" />
			</td>
			<td>
				<input type="text" id="tipoEnfermedadCatastrofica' . $tec->getTipoEnfermedadCatastroficaId() . '" name="tipoEnfermedadCatastrofica' . $tec->getTipoEnfermedadCatastroficaId() . '" required="required" value="' . $tec->getTipoEnfermedadCatastrofica() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $tec->getTipoEnfermedadCatastroficaId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $tec->getTipoEnfermedadCatastroficaId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
echo cargartipoEnfermedadCatastroficaT();
