<?php

require_once("../Crud/CrudSetecCondicionTrabajo.php");

use Crud\CrudSeteCondicionLaboral;

function cargarSiNo($t)
{
    $lista = '';
    if ($t == 'SI') {
        $lista .= " <option selected='selected' value='SI' ><label>SI</label></option>";
        $lista .= " <option  value='NO' ><label>NO</label></option>";
    } else {
        $lista .= " <option  value='SI' ><label>SI</label></option>";
        $lista .= " <option selected='selected' value='NO' ><label>NO</label></option>";
    }
    return $lista;
}
function cargacondicionlaboral()
{
    $lista = '';
    $crud = new CrudSeteCondicionLaboral();
    $lstdato = $crud->mostrar();
    $lista .= '
    <tr class="ui-widget-header">
    <th>Fecha</th>
    <th>Cedula</th>
    <th>Empresa</th>
   <th>Acenso</th>
   <th>Satisfaccion</th>
   <th>Agotamiento</th>
   <th>Respeto</th>
   <th>Reconocimiento</th>
   <th>Riesgo</th>
   <th>Cambio</th>
   <th>Bonificacion</th>
   <th>Transporte</th>
   <th>Capacitacion</th>
   <th></th>
  </tr>
    <tr>
    <td ><input class="campfecha" name="seteCondicionLaboralFecharegistro" id="seteCondicionLaboralFecharegistro" disabled type="date" value="' . date("Y-m-d") . '"/></td>
    <td ><input name="seteCondicionLaboralCedula" id="seteCondicionLaboralCedula" class="camptext1" type="text" value=""/></td>
    <td><input name="seteCondicionLaboralEmpresa" id="seteCondicionLaboralEmpresa" type="text"  value=""/></td>
    <td > <select name="seteCondicionLaboralacenso" id="seteCondicionLaboralacenso"> ' . cargarSiNo("") . ' </select></td>
    <td ><select name="seteCondicionLaboralsatisfaccion" id="seteCondicionLaboralsatisfaccion"> ' . cargarSiNo("") . ' </select>  </td>
    <td ><select name="seteCondicionLaboralAgotamiento" id="seteCondicionLaboralAgotamiento"> ' . cargarSiNo("") . ' </select>  </td>
    <td ><select name="seteCondicionLaboralRespeto" id="seteCondicionLaboralRespeto"> ' . cargarSiNo("") . ' </select>  </td>
    <td ><select name="seteCondicionLaboralReconocimiento" id="seteCondicionLaboralReconocimiento"> ' . cargarSiNo("") . ' </select>  </td>
    <td ><select name="seteCondicionLaboralRiesgo" id="seteCondicionLaboralRiesgo"> ' . cargarSiNo("") . ' </select>  </td>
    <td ><select name="seteCondicionLaboralCambio" id="seteCondicionLaboralCambio"> ' . cargarSiNo("") . ' </select>  </td>
    <td ><select name="seteCondicionLaboralBonificacion" id="seteCondicionLaboralBonificacion"> ' . cargarSiNo("") . ' </select>  </td>
    <td ><select name="seteCondicionLaboralTransporte" id="seteCondicionLaboralTransporte"> ' . cargarSiNo("") . ' </select>  </td>
    <td ><select name="seteCondicionLaboralCapacitacion" id="seteCondicionLaboralCapacitacion"> ' . cargarSiNo("") . ' </select>  </td>
    <td>
<input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">

</td>
</tr>';
    foreach ($lstdato as $dato) {

        $lista .= '<tr>
        <td ><input class="campfecha" name="seteCondicionLaboralFecharegistro' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralFecharegistro' . $dato->getIdSeteCondicionLaboral() . '" disabled type="date" value="' . $dato->getFecharegistro() . '"/></td>
    <td ><input name="seteCondicionLaboralCedula' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralCedula' . $dato->getIdSeteCondicionLaboral() . '" class="camptext1" type="text" value="' . $dato->getCedula() . '"/></td>
    <td><input name="seteCondicionLaboralEmpresa' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralEmpresa' . $dato->getIdSeteCondicionLaboral() . '" type="text"  value="' . $dato->getEmpresa() . '"/></td>
    <td > <select name="seteCondicionLaboralacenso' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralacenso' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getAcenso()) . ' </select></td>
    <td ><select name="seteCondicionLaboralsatisfaccion' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralsatisfaccion' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getSatisfaccion()) . ' </select>  </td>
    <td ><select name="seteCondicionLaboralAgotamiento' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralAgotamiento' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getAgotamiento()) . ' </select>  </td>
    <td ><select name="seteCondicionLaboralRespeto' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralRespeto' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getRespeto()) . ' </select>  </td>
    <td ><select name="seteCondicionLaboralReconocimiento' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralReconocimiento' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getReconocimiento()) . ' </select>  </td>
    <td ><select name="seteCondicionLaboralRiesgo' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralRiesgo' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getRiesgo()) . ' </select>  </td>
    <td ><select name="seteCondicionLaboralCambio' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralCambio' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getCambio()) . ' </select>  </td>
    <td ><select name="seteCondicionLaboralBonificacion' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralBonificacion' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getBonificacion()) . ' </select>  </td>
    <td ><select name="seteCondicionLaboralTransporte' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralTransporte' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getTransporte()) . ' </select>  </td>
    <td ><select name="seteCondicionLaboralCapacitacion' . $dato->getIdSeteCondicionLaboral() . '" id="seteCondicionLaboralCapacitacion' . $dato->getIdSeteCondicionLaboral() . '"> ' . cargarSiNo($dato->getCapacitacion()) . ' </select>  </td>
    <td>
<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdSeteCondicionLaboral() . ')">
 <input type="button" value="Borrar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdSeteCondicionLaboral() . ')">
</td>
</tr>';
    }
    return $lista;
}
echo cargacondicionlaboral();
