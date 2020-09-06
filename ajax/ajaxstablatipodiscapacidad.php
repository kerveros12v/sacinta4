<?php

require_once("ajaxsselectdiscapacidad.php");
require_once("../Crud/CrudTipoDiscapacidad.php");
require_once("../controladores/respuestasgenerales.php");
require_once("ajaxsselect2.php");


use Crud\CrudTipoDiscapacidad;

session_start();
function cargartablatipoDiscapacidad()
{
    $r = "";
    $crud = new CrudTipoDiscapacidad();
    $r .= '
<tr>
    <td>
    ' . ajaxs_select2() . '
    </td>
    <td>
        <input type="text" class="camptext1" id="tdcodigo" name="tdcodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tipoDiscapacidad" name="tipoDiscapacidad"  value=""/>
    </td>
    <td>
        <select class="selector"  name="tipodiscapacidadbool" id="tipodiscapacidadbool">
            ' . discapacidad(-1) . '
        </select>
    </td>
    <td>
        <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
    </td>
</tr>
';

    foreach ($crud->mostrar() as $dato) {
        $r .= '
    <tr>
        <td>

        </td>
        <td>
            <input type="text" class="camptext1" id="tdcodigo' . $dato->getTipoDiscapacidadid() . '" name="tdcodigo' . $dato->getTipoDiscapacidadid() . '"  maxlength="10" value="' . $dato->getTdcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoDiscapacidad' . $dato->getTipoDiscapacidadid() . '" name="tipoDiscapacidad' . $dato->getTipoDiscapacidadid() . '"  value="' . $dato->getTipoDiscapacidad() . '"/>
        </td>
        <td>
            <select class="selector"  name="tipodiscapacidadbool' . $dato->getTipodiscapacidadbool() . '" id="tipodiscapacidadbool' . $dato->getTipoDiscapacidadid() . '">
                ' . discapacidad($dato->getTipodiscapacidadbool()) . '
            </select>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getTipoDiscapacidadid() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getTipoDiscapacidadid() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablatipoDiscapacidad();
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
