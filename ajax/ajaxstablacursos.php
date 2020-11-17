<?php
require_once("../Crud/CrudCursos.php");
require_once("../controladores/respuestasgenerales.php");
require_once("ajaxsselectparalelo.php");
require_once("ajaxsselect2.php");

use Crud\CrudCursos;

//idCursos, cursoscodigo, fkcarrerasId, fkparaleloId, fknivelAcademicoQueCursaId, fkjJornadaAcademicaId, cursosOculto, cursosAccion, cursosfecha, cursosuser
session_start();
function cargartablaCursos()
{
    $r = "";
    $crud = new CrudCursos();
    $r .= '
<tr>
    <td>
        <table>
            <tr class="ui-widget-header">
                <th>
                </th>
                <th>
                    Codigo
                </th>
                <th>
                    Paralelo
                </th>
                <th>
                </th>
            </tr>
            <tr>
                <td>
                    ' . ajaxs_select2() . '
                </td>
                <td>
                    <input type="text" class="camptext1" id="cursoscodigo" name="cursoscodigo"  maxlength="10" value=""/>
                </td>
                <td>
                    <select class="selector"  id="fkparaleloId" name="fkparaleloId">
                        ' . cargarparalelo(0) . '
                    </select>
                </td>
                <td>
                    <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
                </td>
            </tr>';

    foreach ($crud->mostrar() as $dato) {
        $r .= '
        <tr>
        <td>
        </td>
        <td>
            <input type="text" class="camptext1" id="cursoscodigo' . $dato->getIdCursos() . '" name="cursoscodigo' . $dato->getIdCursos() . '"  maxlength="10" value="' . $dato->getCursoscodigo() . '"/>
        </td>
        <td>
            <select class="selector"  id="fkparaleloId' . $dato->getIdCursos() . '" name="fkparaleloId' . $dato->getIdCursos() . '">
                ' . cargarparalelo($dato->getFkparaleloId()) . '
            </select>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdCursos() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdCursos() . ')">
        </td>
    </tr>
    ';
    }

    return $r .= '</table>

    </td>

</tr>';
}
if ($_SESSION['user'] != "") {
    echo cargartablaCursos();
} else {
    echo  tiempoExedido();
}
