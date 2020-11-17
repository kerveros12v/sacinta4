<?php
require_once("../Crud/CrudTipoBeca.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTipoBeca;

session_start();
function cargartablatipoBeca()
{
    $r = "";
    $crud = new CrudTipoBeca();
    $r .= '
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
        <select class="selector"  id="tipobecabool" name="tipobecabool">
         ' . boolselect(1) . '
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
            <input type="text" class="camptext1" id="tipobecacodigo' . $dato->getTipoBecaId() . '" name="tipobecacodigo' . $dato->getTipoBecaId() . '"  maxlength="10" value="' . $dato->getTipobecacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoBeca' . $dato->getTipoBecaId() . '" name="tipoBeca' . $dato->getTipoBecaId() . '"  value="' . $dato->getTipoBeca() . '"/>
        </td>
        <td>
        <select class="selector"  id="tipobecabool' . $dato->getTipoBecaId() . '" name="tipobecabool' . $dato->getTipoBecaId() . '">
         ' . boolselect($dato->getTipobecabool()) . '
         </select>
      </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getTipoBecaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getTipoBecaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablatipoBeca();
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
