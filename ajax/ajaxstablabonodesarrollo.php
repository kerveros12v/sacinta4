<?php
require_once("../Crud/CrudBonodesarrollo.php");
use Crud\CrudBonodesarrollo;
function cargartablatitulotercernivel()
{
    $r="";
    $crud = new CrudBonodesarrollo();
    $r.= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="bonodesarrollocodigo" name="bonodesarrollocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="bonoDesarrollo" name="bonoDesarrollo"  value=""/>
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
            <input type="text" class="camptext1" id="bonodesarrollocodigo' . $dato->get_bonoDesarrolloId() . '" name="bonodesarrollocodigo' . $dato->get_bonoDesarrolloId() . '"  maxlength="10" value="' . $dato->get_bonodesarrollocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="bonoDesarrollo' . $dato->get_bonoDesarrolloId() . '" name="bonoDesarrollo' . $dato->get_bonoDesarrolloId() . '"  value="' . $dato->get_bonoDesarrollo() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_bonoDesarrolloId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_bonoDesarrolloId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
echo cargartablatitulotercernivel();
