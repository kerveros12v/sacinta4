<?php
require_once("../Crud/CrudBimestre.php");
require_once("../controladores/respuestasgenerales.php");
use Crud\CrudBimestres;
session_start();
function cargartablabimestre()
{
    $r="";
    $crud = new CrudBimestres();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="bimestrescodigo" name="bimestrescodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="bimestre" name="bimestre"  value=""/>
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
            <input type="text" class="camptext1" id="bimestrescodigo' . $dato->get_idBimestres() . '" name="bimestrescodigo' . $dato->get_idBimestres() . '"  maxlength="10" value="' . $dato->get_bimestrescodigo() . '"/>
        </td>
        <td>
            <input type="text" id="bimestre' . $dato->get_idBimestres() . '" name="bimestre' . $dato->get_idBimestres() . '"  value="' . $dato->get_bimestre() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_idBimestres() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_idBimestres() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablabimestre();
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
