<?php
require_once("../Crud/CrudDiscapacidad.php");
require_once("../controladores/respuestasgenerales.php");
use Crud\CrudDiscapacidad;
session_start();
function cargartabladiscapacidad()
{
    $r="";
    $crud = new CrudDiscapacidad();


    $r.= '

<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="discapacidadcodigo" name="discapacidadcodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="discapacidad" name="discapacidad"  value=""/>
    </td>
    <td>
 <select class="selector"  id="discapacidadbool" name="discapacidadbool">
    '.boolselect(1).'
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
            <input type="text" class="camptext1" id="discapacidadcodigo' . $dato->get_discapacidadId() . '" name="discapacidadcodigo' . $dato->get_discapacidadId() . '"  maxlength="10" value="' . $dato->get_discapacidadcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="discapacidad' . $dato->get_discapacidadId() . '" name="discapacidad' . $dato->get_discapacidadId() . '"  value="' . $dato->get_discapacidad() . '"/>
        </td>
        <td>
            <select class="selector"  id="discapacidadbool" name="discapacidadbool">
                '.boolselect($dato->get_discapacidadbool()).'
            </select>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_discapacidadId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_discapacidadId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartabladiscapacidad();
} else{
	echo '<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
			'.tiempoExedido().'
		</td>
	</tr>';
}
