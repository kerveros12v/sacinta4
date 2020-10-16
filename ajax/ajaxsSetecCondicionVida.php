<?php

require_once("../Crud/CrudSetecCondicionVida.php");

use Crud\CrudSetecCondicionVida;

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
function cargarvivienda($t)
{
    $lst = ['ARRENDADA', 'PROPIA', 'OTROS'];
    $lista = '';
    $vivienda = "";
    foreach ($lst as $vivienda) {
        if ($t == $vivienda) {
            $lista .= " <option selected='selected' value='" . $vivienda . "' ><label>" . $vivienda . "</label></option>";
        } else {
            $lista .= " <option  value='" . $vivienda . "' ><label>" . $vivienda . "</label></option>";
        }
    }
    return $lista;
}
function carga()
{
    $lista = '';
    $crud = new CrudSetecCondicionVida();

    $lstdato = $crud->mostrar();
    $lista .= '
    <tr class="ui-widget-header">
    <th>Fecha</th>
    <th>Cedula del Aspirante</th>
    <th>Jefe de hogar</th>
   <th>Seguro Medico</th>
   <th>Numero de Hijos</th>
   <th>Mayores a 3 y menores a 18</th>
   <th>Asistencia Institucion Educativa</th>
   <th>Vivienda</th>
   <th>Numero Miembros Hogar</th>
   <th>Luz</th>
   <th>Agua</th>
   <th>Internet</th>
   <th></th>
  </tr>
    <tr>
    <td ><input class="campfecha" name="SetecCondiciondeVidaFecha" id="SetecCondiciondeVidaFecha" disabled type="date" value="' . date("Y-m-d") . '"/></td>
    <td ><input name="SetecCondiciondeVidaCedula" id="SetecCondiciondeVidaCedula" class="camptext1" type="text" value=""/></td>
    <td > <select name="Setecjefehogar" id="Setecjefehogar"> ' . cargarSiNo("") . ' </select></td>
    <td ><select name="Setecseguromedico" id="Setecseguromedico"> ' . cargarSiNo("") . ' </select>  </td>
    <td><input name="Setecnumhijos" id="Setecnumhijos" type="number" class="campnum" value=""/></td>
    <td><input name="setechijomayor" id="setechijomayor" type="number" class="campnum" value=""/></td>
    <td><select name="SetecAsistenciaInstitucion" id="SetecAsistenciaInstitucion"> ' . cargarSiNo("") . ' </select></td>
    <td><select name="Setecvivienda" id="Setecvivienda">
    ' . cargarvivienda("") . '
</select>    </td>
    <td ><input name="SetecMienbrosHogar" id="SetecMienbrosHogar" type="number"  class="campnum" value="" /></td>
    <td ><select name="SetecLuz" id="SetecLuz"> ' . cargarSiNo("") . ' </select></td>
    <td><select name="SetecAgua" id="SetecAgua"> ' . cargarSiNo("") . ' </select></td>
    <td><select name="SetecInternet" id="SetecInternet"> ' . cargarSiNo("") . ' </select></td>

    <td>
<input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">

</td>
</tr>';
    foreach ($lstdato as $dato) {

        $lista .= '<tr>
        <td ><input class="campfecha" name="SetecCondiciondeVidaFecha' . $dato->getIdSetecCondiciondeVida() . '" id="SetecCondiciondeVidaFecha' . $dato->getIdSetecCondiciondeVida() . '" type="date" value="' . $dato->getSetecCondiciondeVidaFecha() . '"/></td>

        <td ><input name="SetecCondiciondeVidaCedula' . $dato->getIdSetecCondiciondeVida() . '" id="SetecCondiciondeVidaCedula' . $dato->getIdSetecCondiciondeVida() . '" class="camptext1" type="text" value="' . $dato->getSetecCondiciondeVidaCedula() . '"/></td>
        <td > <select name="Setecjefehogar' . $dato->getIdSetecCondiciondeVida() . '" id="Setecjefehogar' . $dato->getIdSetecCondiciondeVida() . '"> ' . cargarSiNo($dato->getSetecjefehogar()) . ' </select></td>
        <td ><select name="Setecseguromedico' . $dato->getIdSetecCondiciondeVida() . '" id="Setecseguromedico' . $dato->getIdSetecCondiciondeVida() . '"> ' . cargarSiNo($dato->getSetecseguromedico()) . ' </select>  </td>
        <td><input name="Setecnumhijos' . $dato->getIdSetecCondiciondeVida() . '" id="Setecnumhijos' . $dato->getIdSetecCondiciondeVida() . '" type="number" class="campnum" value="' . $dato->getSetecnumhijos() . '"/></td>
        <td><input name="setechijomayor' . $dato->getIdSetecCondiciondeVida() . '" id="setechijomayor' . $dato->getIdSetecCondiciondeVida() . '" type="number" class="campnum" value="' . $dato->getSetechijomayor() . '"/></td>
        <td><select name="SetecAsistenciaInstitucion' . $dato->getIdSetecCondiciondeVida() . '" id="SetecAsistenciaInstitucion' . $dato->getIdSetecCondiciondeVida() . '"> ' . cargarSiNo($dato->getSetecAsistenciaInstitucion()) . ' </select></td>
        <td><select name="Setecvivienda' . $dato->getIdSetecCondiciondeVida() . '" id="Setecvivienda' . $dato->getIdSetecCondiciondeVida() . '">
        ' . cargarvivienda($dato->getSetecvivienda()) . '
        </select>    </td>
        <td ><input name="SetecMienbrosHogar' . $dato->getIdSetecCondiciondeVida() . '" id="SetecMienbrosHogar' . $dato->getIdSetecCondiciondeVida() . '" type="number"  class="campnum" value="' . $dato->getSetecMienbrosHogar() . '" /></td>
        <td ><select name="SetecLuz' . $dato->getIdSetecCondiciondeVida() . '" id="SetecLuz' . $dato->getIdSetecCondiciondeVida() . '"> ' . cargarSiNo($dato->getSetecLuz()) . ' </select></td>
        <td><select name="SetecAgua' . $dato->getIdSetecCondiciondeVida() . '" id="SetecAgua' . $dato->getIdSetecCondiciondeVida() . '"> ' . cargarSiNo($dato->getSetecAgua()) . ' </select></td>
        <td><select name="SetecInternet' . $dato->getIdSetecCondiciondeVida() . '" id="SetecInternet' . $dato->getIdSetecCondiciondeVida() . '"> ' . cargarSiNo($dato->getSetecInternet()) . ' </select></td>
    <td>
<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdSetecCondiciondeVida() . ')">
 <input type="button" value="Borrar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdSetecCondiciondeVida() . ')">
</td>
</tr>';
    }
    return $lista;
}
echo carga();
