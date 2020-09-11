<?php

require_once("../Crud/CrudIdiomas.php");
require_once("../controladores/respuestasgenerales.php");
require_once("ajaxsselectetnia.php");
require_once("ajaxsselect2.php");

use Crud\CrudIdiomas;

session_start();
function cargartablaidioma()
{

    $crud = new CrudIdiomas();
    $r = '
    <tr class="ui-widget-header">
        <th>CODIGO</th>
       <th>IDIOMA</th>
       <th>ETNIA</th>
       <th>' . ajaxs_select2() . '</th>
    </tr>
    <tr>
        <td>
            <input type="text" class="camptext1" id="codigo" name="codigo"  maxlength="10" value=""/>
        </td>
        <td>
            <input type="text" id="idioma" name="idioma"  value=""/>
        </td>
        <td>
            <select class="selector"  id="idiomaetnia" name="idiomaetnia">
                ' . cargarEtnia(-1) . '
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
            <input type="text" class="camptext1" id="codigo' . $dato->getIdidiomaAncestral() . '" name="codigo' . $dato->getIdidiomaAncestral() . '"  maxlength="10" value="' . $dato->getIdiomasancestralcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="idioma' . $dato->getIdidiomaAncestral() . '" name="idioma' . $dato->getIdidiomaAncestral() . '"  value="' . $dato->getIdioma() . '"/>
        </td>
        <td>

        <select class="selector"  id="idiomaetnia' . $dato->getIdidiomaAncestral() . '" name="idiomaetnia' . $dato->getIdidiomaAncestral() . '">
        ' . cargarEtnia($dato->getIdiomaetnia()) . '
        </select>
    </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdidiomaAncestral() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdidiomaAncestral() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    try {
        echo cargartablaidioma();
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
