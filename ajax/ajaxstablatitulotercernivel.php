<?php
require_once("../Crud/CrudTituloTercerNivel.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTituloTercerNivel;
session_start();
function cargartablatitulotercernivel()
{
    $r="";
    $crud = new CrudTituloTercerNivel();
    $r.= '
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
            <input type="text" class="camptext1" id="titulotercernivelcodigo' . $dato->get_tituloTercerNivelId() . '" name="titulotercernivelcodigo' . $dato->get_tituloTercerNivelId() . '"  maxlength="10" value="' . $dato->get_titulotercernivelcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tituloTercerNivel' . $dato->get_tituloTercerNivelId() . '" name="tituloTercerNivel' . $dato->get_tituloTercerNivelId() . '"  value="' . $dato->get_tituloTercerNivel() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_tituloTercerNivelId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_tituloTercerNivelId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablatitulotercernivel();
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
