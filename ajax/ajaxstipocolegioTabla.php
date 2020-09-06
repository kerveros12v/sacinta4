<?php
require_once("../Crud/CrudTipoColegio.php");
require_once("../controladores/respuestasgenerales.php");

use Clasesphp\Tipocolegio;
use Crud\CrudTipocolegio;

session_start();

function cargarTipoColegioT()
{
	$oCrudTipocolegio = new CrudTipocolegio();
	$listaTipocolegio = $oCrudTipocolegio->mostrar();
	$tipocolegio1 = new Tipocolegio();
	$lista = '
	<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="tipocolegiocodigo" name="tipocolegiocodigo" required="required" value="" />
		</td>
		<td>
			<input type="text" id="tipoColegio" required="required" value="" />
		</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listaTipocolegio as $tipocolegio1) {
		$lista .= '
		<tr>
			<td>
			</td>
			<td>
				<input type="text" class="camptext1" id="tipocolegiocodigo' . $tipocolegio1->getTipoColegioId() . '" name="tipocolegiocodigo' . $tipocolegio1->getTipoColegioId() . '" required="required" value="' . $tipocolegio1->getTipocolegiocodigo() . '" />
			</td>
			<td>
				<input type="text" id="tipoColegio' . $tipocolegio1->getTipoColegioId() . '" name="tipoColegio' . $tipocolegio1->getTipoColegioId() . '" required="required" value="' . $tipocolegio1->getTipoColegio() . '" />
			</td>
			<td>
				<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $tipocolegio1->getTipoColegioId() . ')">
 				<input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $tipocolegio1->getTipoColegioId() . ')">
			</td>
		</tr>';
	}
	return $lista;
}
if ($_SESSION['user'] != "") {
	echo cargarTipoColegioT();
} else {
	echo '<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
			' . tiempoExedido() . '
		</td>
	</tr>';
}
