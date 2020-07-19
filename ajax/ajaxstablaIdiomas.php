<?php

require_once("../Crud/CrudIdiomas.php");
require_once("../controladores/respuestasgenerales.php");
require_once("ajaxsselectetnia.php");
require_once("ajaxsselect2.php");

use Crud\CrudIdiomas;
session_start();
function cargartablaidioma()
{
    $r=ajaxs_select2();
    $crud = new CrudIdiomas();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="codigo" name="codigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="idioma" name="idioma"  value=""/>
    </td>
    <td>
    <select class="selector"  id="idiomaetnia" name="idiomaetnia">
    '.cargarEtnia(-1).'
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
            <input type="text" class="camptext1" id="codigo' . $dato->get_ididiomaAncestral() . '" name="codigo' . $dato->get_ididiomaAncestral() . '"  maxlength="10" value="' . $dato->get_idiomasancestralcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="idioma' . $dato->get_ididiomaAncestral() . '" name="idioma' . $dato->get_ididiomaAncestral() . '"  value="' . $dato->get_idioma() . '"/>
        </td>
        <td>

        <select class="selector"  id="idiomaetnia'.$dato->get_ididiomaAncestral().'" name="idiomaetnia'.$dato->get_ididiomaAncestral().'">
        '.cargarEtnia($dato->get_idiomaetnia()).'
        </select>
    </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_ididiomaAncestral() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_ididiomaAncestral() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    try{
        echo cargartablaidioma();
    }
    catch(\Exception $e){
        echo $e;
    }
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
