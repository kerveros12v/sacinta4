<?php
require_once("../Crud/CrudSegundaaRazonBeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudsegundarazonBeca;

session_start();
function cargartablasegundarazonBeca()
{
    $r = "";
    $crud = new CrudsegundarazonBeca();
    $r .= '
<tr>
    <td>
    </td>
    <td>
        <input type="text" class="camptext1" id="segundarazonbecacodigo" name="segundarazonbecacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="segundaRazonBeca" name="segundaRazonBeca"  value=""/>
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
            <input type="text" class="camptext1" id="segundarazonbecacodigo' . $dato->getSegundaRazonBecaId() . '" name="segundarazonbecacodigo' . $dato->getSegundaRazonBecaId() . '"  maxlength="10" value="' . $dato->getSegundarazonbecacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="segundaRazonBeca' . $dato->getSegundaRazonBecaId() . '" name="segundaRazonBeca' . $dato->getSegundaRazonBecaId() . '"  value="' . $dato->getSegundaRazonBeca() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getSegundaRazonBecaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getSegundaRazonBecaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablasegundarazonBeca();
} else {
    echo  tiempoExedido();
}
