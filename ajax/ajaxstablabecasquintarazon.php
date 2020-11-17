<?php
require_once("../Crud/CrudQuintaRazonBeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudQuintarazonbeca;

session_start();
function cargartablaQuintaRazonBeca()
{
    $r = "";
    $crud = new CrudQuintarazonbeca();
    $r .= '
<tr>
    <td>
    </td>
    <td>
        <input type="text" class="camptext1" id="quintarazonbecacoldigo" name="quintarazonbecacoldigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="quintaRazonBeca" name="quintaRazonBeca"  value=""/>
    </td>
    <td>
    <select class="selector"  id="discapacidadbool" name="discapacidadbool">
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
            <input type="text" class="camptext1" id="quintarazonbecacoldigo' . $dato->getQuintaRazonBecaId() . '" name="quintarazonbecacoldigo' . $dato->getQuintaRazonBecaId() . '"  maxlength="10" value="' . $dato->getQuintarazonbecacoldigo() . '"/>
        </td>
        <td>
            <input type="text" id="quintaRazonBeca' . $dato->getQuintaRazonBecaId() . '" name="quintaRazonBeca' . $dato->getQuintaRazonBecaId() . '"  value="' . $dato->getQuintaRazonBeca() . '"/>
        </td>
        <td>
        <select class="selector"  id="quintarazonbecabool' . $dato->getQuintaRazonBecaId() . '" name="quintarazonbecabool' . $dato->getQuintaRazonBecaId() . '">
           ' . boolselect($dato->getQuintarazonbecabool()) . '
           </select>
           </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getQuintaRazonBecaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getQuintaRazonBecaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaQuintaRazonBeca();
} else {
    echo  tiempoExedido();
}
