<?php

require_once("../Crud/CrudSectorEconomico.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudSectorEconomico;

session_start();
function cargartablaSectorEconomico()
{
    $r="";
    $crud = new CrudSectorEconomico();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="sectoreconomicocodigo" name="sectoreconomicocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="SectorEconomico" name="SectorEconomico"  value=""/>
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
            <input type="text" class="camptext1" id="sectoreconomicocodigo' . $dato->get_sectorEconomicoid() . '" name="sectoreconomicocodigo' . $dato->get_sectorEconomicoid() . '"  maxlength="10" value="' . $dato->get_sectoreconomicocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="SectorEconomico' . $dato->get_sectorEconomicoid() . '" name="SectorEconomico' . $dato->get_sectorEconomicoid() . '"  value="' . $dato->get_SectorEconomico() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_sectorEconomicoid() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_sectorEconomicoid() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    try{
        echo cargartablaSectorEconomico();
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
