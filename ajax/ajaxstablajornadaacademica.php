<?php
require_once("../Crud/CrudJornadasAcademicas.php");
require_once("../controladores/respuestasgenerales.php");
use Crud\CrudJornadasAcademicas;
session_start();
function cargartablajornadaAcademica()
{
    $r="";
    $crud = new CrudJornadasAcademicas();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="jornadaAcademicaCodigo" name="jornadaAcademicaCodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="jornadaAcademica" name="jornadaAcademica"  value=""/>
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
            <input type="text" class="camptext1" id="jornadaAcademicaCodigo' . $dato->get_JornadaAcademicaId() . '" name="jornadaAcademicaCodigo' . $dato->get_JornadaAcademicaId() . '"  maxlength="10" value="' . $dato->get_JornadaAcademicaCodigo() . '"/>
        </td>
        <td>
            <input type="text" id="jornadaAcademica' . $dato->get_JornadaAcademicaId() . '" name="jornadaAcademica' . $dato->get_JornadaAcademicaId() . '"  value="' . $dato->get_JornadaAcademica() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_JornadaAcademicaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_JornadaAcademicaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablajornadaAcademica();
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
