<?php

require_once("../Crud/CrudEstadoCivil.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudEStadoCivil;

session_start();
function cargartablaestadocivil()
{
    $r = "";
    $crud = new CrudEStadoCivil();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="estadoscivilcodigo" name="estadoscivilcodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="estadoCivil" name="estadoCivil"  value=""/>
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
            <input type="text" class="camptext1" id="estadoscivilcodigo' . $dato->getEstadoCivilId() . '" name="estadoscivilcodigo' . $dato->getEstadoCivilId() . '"  maxlength="10" value="' . $dato->getEstadoscivilcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="estadoCivil' . $dato->getEstadoCivilId() . '" name="estadoCivil' . $dato->getEstadoCivilId() . '"  value="' . $dato->getEstadoCivil() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getEstadoCivilId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getEstadoCivilId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaestadocivil();
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
