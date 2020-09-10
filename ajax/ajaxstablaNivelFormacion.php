<?php

require_once("../Crud/Crudnivelformacion.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudNivelformacion;

session_start();
function cargartablanivelFormacion()
{
    $r = "";
    $crud = new CrudNivelformacion();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="codigonivelFormacion" name="codigonivelFormacion"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="nivelFormacion" name="nivelFormacion"  value=""/>
    </td>
    <td>
        <input type="number" id="nivelInstruccion" name="nivelInstruccion"  value="0"/>
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
            <input type="text" class="camptext1" id="codigonivelFormacion' . $dato->getNivelFormacionId() . '" name="codigonivelFormacion' . $dato->getNivelFormacionId() . '"  maxlength="10" value="' . $dato->getCodigonivelFormacion() . '"/>
        </td>
        <td>
            <input type="text" id="nivelFormacion' . $dato->getNivelFormacionId() . '" name="nivelFormacion' . $dato->getNivelFormacionId() . '"  value="' . $dato->getNivelFormacion() . '"/>
        </td>
        <td>
        <input type="number" id="nivelInstruccion' . $dato->getNivelFormacionId() . '" name="nivelInstruccion' . $dato->getNivelFormacionId() . '"  value="' . $dato->getNivelInstruccion() . '"/>

    </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getNivelFormacionId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getNivelFormacionId() . ')">
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
