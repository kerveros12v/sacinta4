<?php

require_once("../Crud/CrudSetecTipoOcupacion.php");


use Crud\CrudSetecTipoOcupacion;

session_start();

function cargarsetecTipoOcupacion()
{
    $lista = '';
    $crud = new CrudSetecTipoOcupacion();
    $lstdato = $crud->mostrar();
    $lista .= '<tr><td><input type="text" class="text1" id="setectipoocupacioncodigo"  name="setectipoocupacioncodigo" min="0" required="required"  />' .
        '</td><td><input type="text" id="tipoOcupacion" name="tipoOcupacion required="required"  />' .
        '</td><td>
<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
</td>
</tr>';
    foreach ($lstdato as $dato) {
        $lista .=
            '<tr><td><input type="text" id="setectipoocupacioncodigo' . $dato->getIdsetecTipoOcupacion() . '" name="setectipoocupacioncodigo' . $dato->getIdsetecTipoOcupacion() . '" required="required" value="' . $dato->getSetectipoocupacioncodigo() . '"  />' .
            '</td><td><input type="text" id="tipoOcupacion' . $dato->getIdsetecTipoOcupacion() . '" name="tipoOcupacion' . $dato->getIdsetecTipoOcupacion() . '" required="required" value="' . $dato->getTipoOcupacion() . '"  />' .
            '</td><td>
<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdsetecTipoOcupacion() . ')">
 <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdsetecTipoOcupacion() . ')">
</td>
</tr>';
    }
    return $lista;
}

if ($_SESSION['user'] != "") {
    try {
        echo cargarsetecTipoOcupacion();
    } catch (\Throwable $e) {
        echo $e;
    }
} else {
    echo  tiempoExedido();
}
