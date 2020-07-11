<?php

require_once("../Crud/Crudrecibepensiondiferenciada.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\Crudrecibepensiondiferenciada;

session_start();
function cargartablaresivepenciondiferenciada()
{
    $r="";
    $crud = new Crudrecibepensiondiferenciada();
    $r.= '
<tr>
    <td>
    </td>
    <td>
        <input type="text" class="camptext1" id="recibepensiondiferenciadacodigo" name="recibepensiondiferenciadacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="recibePensionDiferenciada" name="recibePensionDiferenciada"  value=""/>
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
            <input type="text" class="camptext1" id="recibepensiondiferenciadacodigo' . $dato->get_recibePensionDiferenciadaId() . '" name="recibepensiondiferenciadacodigo' . $dato->get_recibePensionDiferenciadaId() . '"  maxlength="10" value="' . $dato->get_recibepensiondiferenciadacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="recibePensionDiferenciada' . $dato->get_recibePensionDiferenciadaId() . '" name="recibePensionDiferenciada' . $dato->get_recibePensionDiferenciadaId() . '"  value="' . $dato->get_recibePensionDiferenciada() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_recibePensionDiferenciadaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_recibePensionDiferenciadaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    try{
        echo cargartablaresivepenciondiferenciada();
    }
    catch(\Exception $e){
        echo $e;
    }
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
