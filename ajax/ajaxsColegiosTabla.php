<?php
require_once("../Crud/CrudColegios.php");
require_once("ajaxsselectTipoColegios.php");
require_once("ajaxsselect2.php");

use Clasesphp\Colegios;
use Crud\CrudColegios;


function cargarcolegiost($opt)
{
   $colegios = new Colegios();
   $id = $opt;
   $crudcolegios = new CrudColegios();
   $lstcolegios = $crudcolegios->listaColegios($id);
   $lista = "";
   $lista .= '<tr>
   <th>
      Codigo
   </th>
   <th>
      Colegio
   </th>
   <th>
      Tipo de Colegio
   </th>
   <th>
' . ajaxs_select2() . '
   </th>
</tr>
<tr>
   <td>
      <input type="text" class="camptext1" id="colegioscodigo" name="colegioscodigo"   value=" "  required="required" />
   </td>
   <td>
      <input type="text"  id="colegios" name="colegios"   value=""  required="required" />
   </td>
   <td>
   <select class="selector"  id="TipoColegio_tipoColegioId" name="TipoColegio_tipoColegioId">
   ' . cargartipoColegio(-1) . '
   </select>
</td>
   <td>
   <input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">
</td>
</tr>';
   foreach ($lstcolegios as $colegios) {
      $lista .= '
   <tr>
      <td>
         <input type="text" class="camptext1" id="colegioscodigo' . $colegios->getIdcolegios() . '" name="colegioscodigo' . $colegios->getIdcolegios() . '"   value="  ' . $colegios->getColegioscodigo() . '"  required="required" />
      </td>
      <td>
         <input type="text"  id="colegios' . $colegios->getIdcolegios() . '" name="colegios' . $colegios->getIdcolegios() . '"   value="' . $colegios->getColegio() . '"  required="required" />
      </td>
      <td>
      <select class="selector"  id="TipoColegio_tipoColegioId' . $colegios->getIdcolegios() . '" name="TipoColegio_tipoColegioId' . $colegios->getIdcolegios() . '">
   ' . cargartipoColegio($colegios->getTipoColegioTipoColegioId()) . '
   </select>
   </td>
      <td>
      <div class=enlinea>
          <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $colegios->getIdcolegios() . ')">
          <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $colegios->getIdcolegios() . ')">
      </div>
      </td>
   </tr>';
   }
   return $lista;
}
echo cargarcolegiost($_POST['id']);
