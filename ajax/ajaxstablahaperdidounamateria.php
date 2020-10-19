<?php

require_once("../Crud/CrudHarepetidoalmenosunamateria.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudHarepetidoalmenosunamateria;

session_start();
function cargartabaHarepetidoalmenosunamateria()
{
    $r = "";
    $crud = new CrudHarepetidoalmenosunamateria();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="harepetidoalmenosunamateriacodigo" name="harepetidoalmenosunamateriacodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="haRepetidoAlMenosUnaMateria" name="haRepetidoAlMenosUnaMateria"  value=""/>
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
            <input type="text" class="camptext1" id="harepetidoalmenosunamateriacodigo' . $dato->getHaRepetidoAlMenosUnaMateriaid() . '" name="harepetidoalmenosunamateriacodigo' . $dato->getHaRepetidoAlMenosUnaMateriaid() . '"  maxlength="10" value="' . $dato->getHarepetidoalmenosunamateriacodigo() . '"/>
        </td>
        <td>
            <input type="text" id="haRepetidoAlMenosUnaMateria' . $dato->getHaRepetidoAlMenosUnaMateriaid() . '" name="haRepetidoAlMenosUnaMateria' . $dato->getHaRepetidoAlMenosUnaMateriaid() . '"  value="' . $dato->getHaRepetidoAlMenosUnaMateria() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getHaRepetidoAlMenosUnaMateriaid() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getHaRepetidoAlMenosUnaMateriaid() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartabaHarepetidoalmenosunamateria();
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
