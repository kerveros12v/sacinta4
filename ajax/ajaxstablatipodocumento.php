<?php
require_once("../Crud/CrudTipoDocumento.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTipodocumento;

session_start();
function cargartablatipodocumento()
{
    $r = "";
    $crud = new CrudTipodocumento();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="tipoDocumentocodigo" name="tipoDocumentocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tipoDocumento" name="tipoDocumento"  value=""/>
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
            <input type="text" class="camptext1" id="tipoDocumentocodigo' . $dato->getTipoDocumentoId() . '" name="tipoDocumentocodigo' . $dato->getTipoDocumentoId() . '"  maxlength="10" value="' . $dato->getTipoDocumentocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoDocumento' . $dato->getTipoDocumentoId() . '" name="tipoDocumento' . $dato->getTipoDocumentoId() . '"  value="' . $dato->getTipoDocumento() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getTipoDocumentoId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getTipoDocumentoId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablatipodocumento();
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
