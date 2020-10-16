<?php
require_once("../Crud/CrudCuartaRazonBeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudCuartarazonbeca;

session_start();
function cargartablagetCuartaRazonBeca()
{
    $r = "";
    $crud = new CrudCuartarazonbeca();
    $r .= '
<tr>
    <td>
    </td>
    <td>
        <input type="text" class="camptext1" id="cuartarazonbecacodigo" name="cuartarazonbecacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="cuartaRazonBeca" name="cuartaRazonBeca"  value=""/>
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
            <input type="text" class="camptext1" id="cuartarazonbecacodigo' . $dato->getCuartaRazonBecaId() . '" name="cuartarazonbecacodigo' . $dato->getCuartaRazonBecaId() . '"  maxlength="10" value="' . $dato->getCuartarazonbecacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="cuartaRazonBeca' . $dato->getCuartaRazonBecaId() . '" name="cuartaRazonBeca' . $dato->getCuartaRazonBecaId() . '"  value="' . $dato->getCuartaRazonBeca() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getCuartaRazonBecaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getCuartaRazonBecaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablagetCuartaRazonBeca();
} else {
    echo  tiempoExedido();
}
