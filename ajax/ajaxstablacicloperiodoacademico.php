<?php

require_once("../Crud/CrudCicloPeriodo.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudCicloPeriodo;

session_start();
function cargartablanivelFormacion()
{
    $r = "";
    $crud = new CrudCicloPeriodo();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="cicloperiodocodigo" name="cicloperiodocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="ciclo" name="ciclo"  value=""/>
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
            <input type="text" class="camptext1" id="cicloperiodocodigo' . $dato->getIdcicloperiodo() . '" name="codigonivelFormacion' . $dato->getIdcicloperiodo() . '"  maxlength="10" value="' . $dato->getCicloperiodocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="ciclo' . $dato->getIdcicloperiodo() . '" name="nivelFormacion' . $dato->getIdcicloperiodo() . '"  value="' . $dato->getCiclo() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdcicloperiodo() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdcicloperiodo() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    try {
        echo cargartablanivelFormacion();
    } catch (\Exception $e) {
        echo $e;
    }
} else {
    echo '<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
			' . tiempoExedido() . '
		</td>
	</tr>';
}
