<?php

require_once("../Crud/Crudnivelformacion.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudNivelformacion;
session_start();
function cargartablanivelFormacion()
{
    $r="";
    $crud = new CrudNivelformacion();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="codigonivelFormacion" name="codigonivelFormacion"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="nivelFormacion" name="nivelFormacion"  value=""/>
    </td>
    <td>
        <input type="number" id="nivelInstruccion" name="nivelInstruccion"  value="0"/>
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
            <input type="text" class="camptext1" id="codigonivelFormacion' . $dato->get_nivelFormacionId() . '" name="codigonivelFormacion' . $dato->get_nivelFormacionId() . '"  maxlength="10" value="' . $dato->get_codigonivelFormacion() . '"/>
        </td>
        <td>
            <input type="text" id="nivelFormacion' . $dato->get_nivelFormacionId() . '" name="nivelFormacion' . $dato->get_nivelFormacionId() . '"  value="' . $dato->get_nivelFormacion() . '"/>
        </td>
        <td>
        <input type="number" id="nivelInstruccion' . $dato->get_nivelFormacionId() . '" name="nivelInstruccion' . $dato->get_nivelFormacionId() . '"  value="'.$dato->get_NivelInstruccion().'"/>

    </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_nivelFormacionId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_nivelFormacionId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    try{
        echo cargartablanivelFormacion();
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
