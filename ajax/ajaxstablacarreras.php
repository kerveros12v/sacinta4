<?php
require_once("../clasesphp/Carreras.php");
require_once("../Crud/CrudCarreras.php");
require_once("ajaxsselect2.php");
require_once("ajaxsselecttitulotercernivel.php");
require_once("ajaxsselectipocarrera.php");
require_once("ajaxsselectmodalidadCarrera.php");

use Crud\CrudCarreras;

function cargarCarrerast($id)
{
	$ocrudcarreras = new CrudCarreras();
	$listacarreras = $ocrudcarreras->mostrarlistaporInstitutos($id);
	//$dato = new Carreras();
	$lista = '
	<tr>
		<td>
		' . ajaxs_select2() . '
		</td>
		<td>
			<input type="text" class="camptext1" id="codigoCarreras" name="codigoCarreras" required="required" value="" />
		</td>
		<td>
		<input type="text"  id="carrera" name="carrera" required="required" value="" />

		</td>
		<td>
		<select class="selector"  id="carreraTituloAOptener" name="carreraTituloAOptener">
		' . cargartituloTercerNivel(0) . '
		</select>
		</td>
		<td>
		<select class="selector"  id="fktipoCarrerasId" name="fktipoCarrerasId">
		' . cargartipocarrera(0) . '
		</select>
		</td>
		<td>
		<select class="selector"  id="fkmodalidadCarreraId" name="fkmodalidadCarreraId">
		' . cargarmodalidadCarrera(0) . '
		</select>
		</td>
		<td>
		<input type="text" class="camptext1" id="estado" name="estado" required="required" value="" />
	</td>
		<td>
			<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
		</td>
	</tr>';
	foreach ($listacarreras as $dato) {
		$lista .= '
		<tr>
		<td>
		</td>
		<td>
			<input type="text" class="camptext1" id="codigoCarreras' . $dato->getCarrerasId() . '" name="codigoCarreras' . $dato->getCarrerasId() . '" required="required" value="' . $dato->getCodigoCarreras() . '" />
		</td>
		<td>
		<input type="text" id="carrera' . $dato->getCarrerasId() . '" name="carrera' . $dato->getCarrerasId() . '" required="required" value="' . $dato->getCarrera() . '" />

		</td>
		<td>
		<select class="selector"  id="carreraTituloAOptener' . $dato->getCarrerasId() . '" name="carreraTituloAOptener' . $dato->getCarrerasId() . '">
		' . cargartituloTercerNivel($dato->getCarreraTituloAOptener()) . '
		</select>
		</td>
		<td>
		<select class="selector"  id="fktipoCarrerasId' . $dato->getCarrerasId() . '" name="fktipoCarrerasId' . $dato->getCarrerasId() . '">
		' . cargartipocarrera($dato->getFktipoCarrerasId()) . '
		</select>
		</td>
		<td>
		<select class="selector"  id="fkmodalidadCarreraId' . $dato->getCarrerasId() . '" name="fkmodalidadCarreraId' . $dato->getCarrerasId() . '">
		' . cargarmodalidadCarrera($dato->getFkmodalidadCarreraId()) . '
		</select>
		</td>
		<td>
			<input type="text" class="camptext1" id="estado' . $dato->getCarrerasId() . '" name="estado' . $dato->getCarrerasId() . '" required="required" value="' . $dato->getEstado() . '" />
		</td>
		<td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getCarrerasId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getCarrerasId() . ')">
        </td>
	</tr>';
	}
	return $lista;
}
try {
	$id1 = $_POST['id'];
	//echo ("<script>console.log('Dato enviado" . $id1 . "');</script>");
	echo cargarCarrerast($id1);
} catch (\Throwable $e) {
	echo $e;
}
