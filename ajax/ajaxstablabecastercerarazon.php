<?php
require_once("../Crud/CrudTerceraRazonBeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTercerarazonbeca;

session_start();
function cargartablaterceraRazonBeca()
{
    $r = "";
    $crud = new CrudTercerarazonbeca();
    $r .= '
<tr>
    <td>
    </td>
    <td>
        <input type="text" class="camptext1" id="tercerarazonbecacodigo" name="tercerarazonbecacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="terceraRazonBeca" name="terceraRazonBeca"  value=""/>
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
            <input type="text" class="camptext1" id="tercerarazonbecacodigo' . $dato->getTerceraRazonBecaId() . '" name="tercerarazonbecacodigo' . $dato->getTerceraRazonBecaId() . '"  maxlength="10" value="' . $dato->getTercerarazonbecacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="terceraRazonBeca' . $dato->getTerceraRazonBecaId() . '" name="terceraRazonBeca' . $dato->getTerceraRazonBecaId() . '"  value="' . $dato->getTerceraRazonBeca() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getTerceraRazonBecaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getTerceraRazonBecaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaterceraRazonBeca();
} else {
    echo  tiempoExedido();
}
