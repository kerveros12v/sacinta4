<?php
require_once("../Crud/CrudTituloTercerNivel.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTituloTercerNivel;

session_start();
function cargartablatitulotercernivel()
{
    $r = "";
    $crud = new CrudTituloTercerNivel();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="titulotercernivelcodigo" name="titulotercernivelcodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tituloTercerNivel" name="tituloTercerNivel"  value=""/>
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
            <input type="text" class="camptext1" id="titulotercernivelcodigo' . $dato->getTituloTercerNivelId() . '" name="titulotercernivelcodigo' . $dato->getTituloTercerNivelId() . '"  maxlength="10" value="' . $dato->getTitulotercernivelcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tituloTercerNivel' . $dato->getTituloTercerNivelId() . '" name="tituloTercerNivel' . $dato->getTituloTercerNivelId() . '"  value="' . $dato->getTituloTercerNivel() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getTituloTercerNivelId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getTituloTercerNivelId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablatitulotercernivel();
} else {
    echo '<tr>
		<td>
			' . tiempoExedido() . '
		</td>
	</tr>';
}
