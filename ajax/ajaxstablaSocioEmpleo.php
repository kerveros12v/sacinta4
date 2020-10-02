<?php

require_once("../Crud/CrudSocioEmpleo.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudSocioEmpleo;

session_start();
function cargartablasocioempleo()
{
    $r = "";
    $crud = new CrudSocioEmpleo();
    /* $r .= '
<tr>
    <td>

    </td>

    <td>
        <input type="text" id="socioEmpleoregistro" name="socioEmpleoregistro"  value=""/>
    </td>
    <td>

        <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
    </td>
</tr>
';
*/
    foreach ($crud->mostrar() as $dato) {
        $r .= '
    <tr>
        <td>

        </td>

        <td>
            <input type="text" id="socioEmpleoregistro' . $dato->getIdsocioempleo() . '" name="socioEmpleoregistro' . $dato->getIdsocioempleo() . '"  value="' . $dato->getSocioEmpleoregistro() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdsocioempleo() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    try {
        echo cargartablasocioempleo();
    } catch (\Exception $e) {
        echo $e;
    }
} else {
    echo  tiempoExedido();
}
