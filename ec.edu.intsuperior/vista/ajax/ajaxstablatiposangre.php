<?php
require_once("../Crud/CrudTipoSangre.php");
require_once("../controladores/respuestasgenerales.php");
use Crud\CrudTipoSangre;
session_start();
function cargartablatipoSangre()
{
    $r="";
    $crud = new CrudTipoSangre();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="tipossangrescodigo" name="tipossangrescodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="tipoSangre" name="tipoSangre"  value=""/>
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
            <input type="text" class="camptext1" id="tipossangrescodigo' . $dato->get_tipoSangreId() . '" name="tipossangrescodigo' . $dato->get_tipoSangreId() . '"  maxlength="10" value="' . $dato->get_tipossangrescodigo() . '"/>
        </td>
        <td>
            <input type="text" id="tipoSangre' . $dato->get_tipoSangreId() . '" name="tipoSangre' . $dato->get_tipoSangreId() . '"  value="' . $dato->get_tipoSangre() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_tipoSangreId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_tipoSangreId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablatipoSangre();
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
