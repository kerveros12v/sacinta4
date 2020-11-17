<?php
require_once("../Crud/CrudPrimeraRazonBeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudPrimeraRazonBeca;

session_start();
function cargartablaprimeraRazonBeca()
{
    $r = "";
    $crud = new CrudPrimeraRazonBeca();
    $r .= '
<tr>
    <td>
    </td>
    <td>
        <input type="text" class="camptext1" id="primerarazonbecacodigo" name="primerarazonbecacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="primeraRazonBeca" name="primeraRazonBeca"  value=""/>
    </td>
    <td>
    <select class="selector"  id="primerarazonbecabool" name="primerarazonbecabool">
       ' . boolselect(1) . '
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
            <input type="text" class="camptext1" id="primerarazonbecacodigo' . $dato->getPrimeraRazonBecaId() . '" name="primerarazonbecacodigo' . $dato->getPrimeraRazonBecaId() . '"  maxlength="10" value="' . $dato->getPrimerarazonbecacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="primeraRazonBeca' . $dato->getPrimeraRazonBecaId() . '" name="primeraRazonBeca' . $dato->getPrimeraRazonBecaId() . '"  value="' . $dato->getPrimeraRazonBeca() . '"/>
        </td>
        <td>
        <select class="selector"  id="primerarazonbecabool' . $dato->getPrimeraRazonBecaId() . '" name="primerarazonbecabool' . $dato->getPrimeraRazonBecaId() . '">
           ' . boolselect($dato->getPrimerarazonbecabool()) . '
           </select>
           </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getPrimeraRazonBecaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getPrimeraRazonBecaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaprimeraRazonBeca();
} else {
    echo  tiempoExedido();
}
