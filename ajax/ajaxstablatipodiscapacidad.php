<?php

require_once("ajaxsselectdiscapacidad.php");
require_once("../Crud/CrudTipoDiscapacidad.php");
require_once("../controladores/respuestasgenerales.php");
require_once("ajaxsselect2.php");


use Crud\CrudTipoDiscapacidad;

session_start();
function cargartablatipoDiscapacidad()
{
    $r="";
    $crud = new CrudTipoDiscapacidad();
    $r.= '
<tr>
    <td>
    '.ajaxs_select2().'
    </td>
    <td>
        <input type="text" class="camptext1" id="tdcodigo" name="tdcodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tipoDiscapacidad" name="tipoDiscapacidad"  value=""/>
    </td>
    <td>
        <select class="selector"  name="tipodiscapacidadbool" id="tipodiscapacidadbool">
            '.discapacidad(-1) .'
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
            <input type="text" class="camptext1" id="tdcodigo' . $dato->get_tipoDiscapacidadid() . '" name="tdcodigo' . $dato->get_tipoDiscapacidadid() . '"  maxlength="10" value="' . $dato->get_tdcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoDiscapacidad' . $dato->get_tipoDiscapacidadid() . '" name="tipoDiscapacidad' . $dato->get_tipoDiscapacidadid() . '"  value="' . $dato->get_tipoDiscapacidad() . '"/>
        </td>
        <td>
            <select class="selector"  name="tipodiscapacidadbool' . $dato->get_tipoDiscapacidadid() . '" id="tipodiscapacidadbool' . $dato->get_tipoDiscapacidadid() . '">
                '.discapacidad($dato->get_tipodiscapacidadbool()) .'
            </select>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_tipoDiscapacidadid() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_tipoDiscapacidadid() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablatipoDiscapacidad();
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
