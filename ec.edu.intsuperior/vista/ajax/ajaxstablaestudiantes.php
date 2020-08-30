<?php

require_once("../Crud/CrudEstudiante.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudEstudiantes;

session_start();
function cargartablaEstudiantes()
{
    $r="";
    $crud = new CrudEstudiantes();
    $r.= '

';

    foreach ($crud->mostrar() as $dato) {
        $nombre="";
        if($dato->get_primerApellido()!=""){
            $nombre=$nombre.$dato->get_primerApellido() ." ";
        }
        if($dato->get_segundoApellido()!=""){
            $nombre=$nombre.$dato->get_segundoApellido() ." ";
        }
        if($dato->get_primerNombre()!=""){
            $nombre=$nombre.$dato->get_primerNombre() ." ";
        }
        if($dato->get_segundoNombre()!=""){
            $nombre=$nombre.$dato->get_segundoNombre() ." ";
        }
        $r .= '
    <tr>
        <td>

        </td>
        <td>
            <input type="text" class="camptext1" id="numeroIdentificacion' . $dato->get_numeroIdentificacion() . '" name="numeroIdentificacion' . $dato->get_numeroIdentificacion() . '"  maxlength="10" value="' . $dato->get_numeroIdentificacion() . '"/>
        </td>
        <td>
            <input type="text" id="nombre' .  $dato->get_numeroIdentificacion(). '" name="nombre' . $dato->get_numeroIdentificacion() . '"  value="' . $nombre. '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Mostrar Informacion" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_numeroIdentificacion() . ')">

        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablaEstudiantes();
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
