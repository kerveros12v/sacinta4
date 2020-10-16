<?php
require_once("../Crud/CrudSetecOcupacion.php");
require_once("ajaxsselect2.php");
require_once("ajaxsselecttipoocupacion.php");
require_once("ajaxsselectSetecestadoocupacion.php");

use Crud\CrudSetecOcupacion;

function cargasetecocupacionaspirantes()
{
    $lista = '';
    $crud = new CrudSetecOcupacion();
    $lstdato = $crud->mostrar();
    $lista .= '
    <tr class="ui-widget-header">
      <th>
      ' . ajaxs_select2() . '
      </th>
      <th>Cedula</th>
      <th>Tipo Ocupacion</th>
      <th>Ocupacion Asignada</th>
      <th>Estado Ocupacional</th>
      <th>Horas Trabajadas por Semana</th>
      <th>Area/Departamento</th>
      <th></th>
    </tr>
    <tr>
                    </td><td>
                    <td>
                        <input type="text" id="fkaspirantesetec"  name="fkaspirantesetec" class="camptext1"  min="0" required="required"  />
                    </td>
                    <td>
                        <select id="fktipoOcupacion" name="fktipoOcupacion" class="selector">
                        ' . cargartipoOcupacion(0) . '
                        </select>
                    </td>
                    <td>
                        <input type="text" id="setecocupacionAsignada" name="setecocupacionAsignada required="required"  />
                    </td>
                    <td>
                        <select id="fkestadoOcupacional" name="fkestadoOcupacional" class="selector">
                        ' . cargarEstadoOcupacional(0) . '
                        </select>
                    </td>
                    <td>
                        <input type="text" id="horasTrabajadasxSemana"  name="horasTrabajadasxSemana" class="camptext"  min="0" required="required"  />
                    </td>
                    <td>
                        <input type="text" id="fkareadepartamento"  name="fkareadepartamento" class="camptext"  min="0" required="required"  />
                    </td>
                    <td>
                    <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
                    </td>
                </tr>';
    foreach ($lstdato as $dato) {
        $lista .= '  <tr>
        </td><td>
        <td>
            <input type="text" id="fkaspirantesetec' . $dato->getSetecOcupacionId() . '"  name="fkaspirantesetec' . $dato->getSetecOcupacionId() . '" class="camptext1"  min="0" required="required"  value="' . $dato->getFkaspirantesetec() . '"/>
        </td>
        <td>
            <select id="fktipoOcupacion' . $dato->getSetecOcupacionId() . '" name="fktipoOcupacion' . $dato->getSetecOcupacionId() . '" class="selector">
            ' . cargartipoOcupacion($dato->getFktipoOcupacion()) . '
            </select>
        </td>
        <td>
            <input type="text" id="setecocupacionAsignada' . $dato->getSetecOcupacionId() . '" name="setecocupacionAsignada' . $dato->getSetecOcupacionId() . '" required="required"  value="' . $dato->getSetecocupacionAsignada() . '"/>
        </td>
        <td>
            <select id="fkestadoOcupacional' . $dato->getSetecOcupacionId() . '" name="fkestadoOcupacional' . $dato->getSetecOcupacionId() . '" class="selector">
            ' . cargarEstadoOcupacional($dato->getFkestadoOcupacional()) . '
            </select>
        </td>
        <td>
            <input type="text" id="horasTrabajadasxSemana' . $dato->getSetecOcupacionId() . '"  name="horasTrabajadasxSemana' . $dato->getSetecOcupacionId() . '" class="camptext"  min="0" required="required" value="' . $dato->getHorasTrabajadasxSemana() . '" />
        </td>
        <td>
            <input type="text" id="fkareadepartamento' . $dato->getSetecOcupacionId() . '"  name="fkareadepartamento' . $dato->getSetecOcupacionId() . '" class="camptext"  min="0" required="required"  value="' . $dato->getFkareadepartamento() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getSetecOcupacionId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getSetecOcupacionId() . ')">
        </td>
    </tr>';
    }
    return $lista;
}
try {
    echo cargasetecocupacionaspirantes();
} catch (\Throwable $e) {
    echo $e;
}
