<?php

require_once("../Crud/CrudSetecEstadoOcupacional.php");

use Crud\CrudSetecEstadoOcupacional;

function cargaSetecEstadoOcupacional()
{
    $lista = '';
    $crud = new CrudSetecEstadoOcupacional();
    $lstdato = $crud->mostrar();
    $lista .= '<tr><td><input type="text" class="camptext1" id="setecestadoocupacionalcodigo"  name="setecestadoocupacionalcodigo" required="required"  />' .
        '</td><td><input type="text" id="estadoOcupacional" name="estadoOcupacional" required="required"  />' .
        '</td><td>
<input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
</td>
</tr>';
    foreach ($lstdato as $dato) {
        $lista .=
            '<tr><td><input type="text" class="camptext1" id="setecestadoocupacionalcodigo' . $dato->getSetecEstadoOcupacionalId() . '" name="setecestadoocupacionalcodigo' . $dato->getSetecEstadoOcupacionalId() . '"  required="required" value="' . $dato->getSetecestadoocupacionalcodigo() . '"  />' .
            '</td><td><input type="text" id="estadoOcupacional' . $dato->getSetecEstadoOcupacionalId() . '" name="estadoOcupacional' . $dato->getSetecEstadoOcupacionalId() . '" required="required" value="' . $dato->getEstadoOcupacional() . '"  />' .
            '</td><td>
<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getSetecEstadoOcupacionalId() . ')">
 <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getSetecEstadoOcupacionalId() . ')">
</td>
</tr>';
    }
    return $lista;
}
echo cargaSetecEstadoOcupacional();
