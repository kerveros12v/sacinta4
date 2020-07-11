<?php
require_once("../Crud/CrudTipoDocumento.php");
require_once("../controladores/respuestasgenerales.php");
use Crud\CrudTipodocumento;
session_start();
function cargartablatipodocumento()
{
    $r="";
    $crud = new CrudTipodocumento();
    $r.= '
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
            <input type="text" class="camptext1" id="tipoDocumentocodigo' . $dato->get_tipoDocumentoId() . '" name="tipoDocumentocodigo' . $dato->get_tipoDocumentoId() . '"  maxlength="10" value="' . $dato->get_tipoDocumentocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoDocumento' . $dato->get_tipoDocumentoId() . '" name="tipoDocumento' . $dato->get_tipoDocumentoId() . '"  value="' . $dato->get_tipoDocumento() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_tipoDocumentoId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_tipoDocumentoId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablatipodocumento();
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
