<?php
require_once("../Crud/CrudTipoBeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTipoBeca;
session_start();
function cargartablatipoBeca()
{
    $r="";
    $crud = new CrudTipoBeca();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="tipobecacodigo" name="tipobecacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tipoBeca" name="tipoBeca"  value=""/>
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
            <input type="text" class="camptext1" id="tipobecacodigo' . $dato->get_tipoBecaId() . '" name="tipobecacodigo' . $dato->get_tipoBecaId() . '"  maxlength="10" value="' . $dato->get_tipobecacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoBeca' . $dato->get_tipoBecaId() . '" name="tipoBeca' . $dato->get_tipoBecaId() . '"  value="' . $dato->get_tipoBeca() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_tipoBecaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_tipoBecaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablatipoBeca();
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
