<?php
require_once("../Crud/CrudJornadasAcademicas.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudJornadasAcademicas;

session_start();
function cargartablajornadaAcademica()
{
    $r = "";
    $crud = new CrudJornadasAcademicas();
    $r .= '
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
            <input type="text" class="camptext1" id="jornadaAcademicaCodigo' . $dato->getJornadaAcademicaId() . '" name="jornadaAcademicaCodigo' . $dato->getJornadaAcademicaId() . '"  maxlength="10" value="' . $dato->getJornadaAcademicaCodigo() . '"/>
        </td>
        <td>
            <input type="text" id="jornadaAcademica' . $dato->getJornadaAcademicaId() . '" name="jornadaAcademica' . $dato->getJornadaAcademicaId() . '"  value="' . $dato->getJornadaAcademica() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getJornadaAcademicaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getJornadaAcademicaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablajornadaAcademica();
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
