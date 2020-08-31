<?php

require_once("../Crud/CrudTipoMatricula.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTipomatricula;

session_start();
function cargartablatipoMatricula()
{
    $r="";
    $crud = new CrudTipomatricula();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="tipomatriculacodigo" name="tipomatriculacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tipoMatricula" name="tipoMatricula"  value=""/>
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
            <input type="text" class="camptext1" id="tipomatriculacodigo' . $dato->get_tipoMatriculaId() . '" name="tipomatriculacodigo' . $dato->get_tipoMatriculaId() . '"  maxlength="10" value="' . $dato->get_tipomatriculacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoMatricula' . $dato->get_tipoMatriculaId() . '" name="tipoMatricula' . $dato->get_tipoMatriculaId() . '"  value="' . $dato->get_tipoMatricula() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_tipoMatriculaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_tipoMatriculaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablatipoMatricula();
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
