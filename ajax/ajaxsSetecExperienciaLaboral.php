<?php

require_once("../Crud/CrudSetecExperienciaLaboral.php");

use Crud\CrudSetecExperienciaLaboral;

function cargaSetecExperienciaLaboral()
{
    $lista = '';
    $crud = new CrudSetecExperienciaLaboral();

    $lstdato = $crud->mostrar();
    $lista .= '
    <tr class="ui-widget-header">
    <th>Cedula</th>
    <th>Nombre de la Empresa</th>
    <th>Tiempo de trabajo</th>
    <th>Actividad Realizada</th>
    <th></th>
    </tr>
    <tr>
    <td ><input name="fknumidentificacion" id="fknumidentificacion" type="text" class="camptext1" value=""/></td>
    <td ><input name="experiencianombreEmpresa" id="experiencianombreEmpresa" type="text" value=""/></td>
    <td ><input name="tiempodetrabajo" id="tiempodetrabajo" type="number" class="campnum" value=""/></td>
   <td><input name="setecactividadRealizada" id="setecactividadRealizada" type="text" value=""/></td>
    <td>
<input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">

</td>
</tr>';
    foreach ($lstdato as $dato) {

        $lista .= '<tr>
        <td ><input name="fknumidentificacion' . $dato->getIdsetecExperienciaLaboral() . '" id="fknumidentificacion' . $dato->getIdsetecExperienciaLaboral() . '" type="text" class="camptext1" value="' . $dato->getFknumidentificacion() . '"/></td>
        <td ><input name="experiencianombreEmpresa' . $dato->getIdsetecExperienciaLaboral() . '" id="experiencianombreEmpresa' . $dato->getIdsetecExperienciaLaboral() . '" type="text" value="' . $dato->getExperiencianombreEmpresa() . '"/></td>
        <td >
        <input name="tiempodetrabajo' . $dato->getIdsetecExperienciaLaboral() . '" id="tiempodetrabajo' . $dato->getIdsetecExperienciaLaboral() . '" type="number" class="campnum" value="' . $dato->getTiempodetrabajo() . '"/></td>
       <td><input name="setecactividadRealizada' . $dato->getIdsetecExperienciaLaboral() . '" id="setecactividadRealizada' . $dato->getIdsetecExperienciaLaboral() . '" type="text" value="' . $dato->getSetecactividadRealizada() . '"/></td>

    <td>
<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdsetecExperienciaLaboral() . ')">
 <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdsetecExperienciaLaboral() . ')">
</td>
</tr>';
    }
    return $lista;
}
echo cargaSetecExperienciaLaboral();
