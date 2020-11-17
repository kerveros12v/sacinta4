<?php
require_once("../Crud/CrudSextaRazonBeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudSextarazonbeca;

session_start();
function cargartablaSextarazonbeca()
{
    $r = "";
    $crud = new CrudSextarazonbeca();
    $r .= '
<tr>
    <td>
    </td>
    <td>
        <input type="text" class="camptext1" id="sextarazonbecacodigo" name="sextarazonbecacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="sextaRazonBeca" name="sextaRazonBeca"  value=""/>
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
            <input type="text" class="camptext1" id="sextarazonbecacodigo' . $dato->getSextaRazonBecaId() . '" name="sextarazonbecacodigo' . $dato->getSextaRazonBecaId() . '"  maxlength="10" value="' . $dato->getSextarazonbecacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="sextaRazonBeca' . $dato->getSextaRazonBecaId() . '" name="sextaRazonBeca' . $dato->getSextaRazonBecaId() . '"  value="' . $dato->getSextaRazonBeca() . '"/>
        </td>
        <td>
        <select class="selector"  id="sextarazonbecabool' . $dato->getSextaRazonBecaId() . '" name="sextarazonbecabool' . $dato->getSextaRazonBecaId() . '">
           ' . boolselect($dato->getSextarazonbecabool()) . '
           </select>
           </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getSextaRazonBecaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getSextaRazonBecaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaSextarazonbeca();
} else {
    echo  tiempoExedido();
}
