<?php

require_once("../Crud/CrudTipoMatricula.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTipomatricula;

session_start();
function cargartablatipoMatricula()
{
    $r = "";
    $crud = new CrudTipomatricula();
    $r .= '
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
            <input type="text" class="camptext1" id="tipomatriculacodigo' . $dato->getTipoMatriculaId() . '" name="tipomatriculacodigo' . $dato->getTipoMatriculaId() . '"  maxlength="10" value="' . $dato->getTipomatriculacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoMatricula' . $dato->getTipoMatriculaId() . '" name="tipoMatricula' . $dato->getTipoMatriculaId() . '"  value="' . $dato->getTipoMatricula() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getTipoMatriculaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getTipoMatriculaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablatipoMatricula();
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
