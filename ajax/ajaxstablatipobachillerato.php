<?php

require_once("../Crud/CrudTipoBachillerato.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTipoBachillerato;

session_start();
function cargartablatipoBachillerato()
{
    $r="";
    $crud = new CrudTipoBachillerato();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="tiposbacilleratocodigo" name="tiposbacilleratocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tipoBacillerato" name="tipoBacillerato"  value=""/>
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
            <input type="text" class="camptext1" id="tiposbacilleratocodigo' . $dato->get_tiposBacilleratoId() . '" name="tiposbacilleratocodigo' . $dato->get_tiposBacilleratoId() . '"  maxlength="10" value="' . $dato->get_tiposbacilleratocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoBacillerato' . $dato->get_tiposBacilleratoId() . '" name="tipoBacillerato' . $dato->get_tiposBacilleratoId() . '"  value="' . $dato->get_tipoBacillerato() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_tiposBacilleratoId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_tiposBacilleratoId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    try{
        echo cargartablatipoBachillerato();
    }
    catch(\Exception $e){
        echo $e;
    }
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
