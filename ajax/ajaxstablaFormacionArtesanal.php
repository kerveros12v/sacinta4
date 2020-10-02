<?php

require_once("../Crud/CrudFormacionArtesanal.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudFormacionArtesanal;

session_start();
function cargartablaformacionArtesanal()
{
    $r = "";
    $crud = new CrudFormacionArtesanal();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="formacionartesanocodigo" name="formacionartesanocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="formacionArtesanal" name="formacionArtesanal"  value=""/>
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
            <input type="text" class="camptext1" id="formacionartesanocodigo' . $dato->getIdformacionArtesano() . '" name="formacionartesanocodigo' . $dato->getIdformacionArtesano() . '"  maxlength="10" value="' . $dato->getFormacionartesanocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="formacionArtesanal' . $dato->getIdformacionArtesano() . '" name="formacionArtesanal' . $dato->getIdformacionArtesano() . '"  value="' . $dato->getFormacionArtesanal() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdformacionArtesano() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdformacionArtesano() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    try {
        echo cargartablaformacionArtesanal();
    } catch (\Exception $e) {
        echo $e;
    }
} else {
    echo  tiempoExedido();
}
