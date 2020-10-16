<?php
require_once("../Crud/CrudFinanciamientobeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudFinanciamientobeca;

session_start();
function cargartablagetfinanciamientoBeca()
{
    $r = "";
    $crud = new CrudFinanciamientobeca();
    $r .= '
<tr>
    <td>
    </td>
    <td>
        <input type="text" class="camptext1" id="financiamientobecacodigo" name="financiamientobecacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="financiamientoBeca" name="financiamientoBeca"  value=""/>
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
            <input type="text" class="camptext1" id="financiamientobecacodigo' . $dato->getFinanciamientoBecaid() . '" name="financiamientobecacodigo' . $dato->getFinanciamientoBecaid() . '"  maxlength="10" value="' . $dato->getFinanciamientobecacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="financiamientoBeca' . $dato->getFinanciamientoBecaid() . '" name="financiamientoBeca' . $dato->getFinanciamientoBecaid() . '"  value="' . $dato->getFinanciamientoBeca() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getFinanciamientoBecaid() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getFinanciamientoBecaid() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablagetfinanciamientoBeca();
} else {
    echo  tiempoExedido();
}
