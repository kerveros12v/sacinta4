<?php

require_once("../Crud/CrudTipoCarreras.php");
require_once("../controladores/respuestasgenerales.php");


use Crud\CrudTipoCarreras;

session_start();
function cargartablaget_tipoCarreras()
{
    $r="";
    $crud = new CrudTipoCarreras();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="tipocarrerascodigo" name="tipocarrerascodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tipoCarreras" name="tipoCarreras"  value=""/>
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
            <input type="text" class="camptext1" id="tipocarrerascodigo' . $dato->get_tipoCarrerasId() . '" name="tipocarrerascodigo' . $dato->get_tipoCarrerasId() . '"  maxlength="10" value="' . $dato->get_tipocarrerascodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoCarreras' . $dato->get_tipoCarrerasId() . '" name="tipoCarreras' . $dato->get_tipoCarrerasId() . '"  value="' . $dato->get_tipoCarreras() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_tipoCarrerasId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_tipoCarrerasId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablaget_tipoCarreras();
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
