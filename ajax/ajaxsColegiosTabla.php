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
   $lista="";
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
'.ajaxs_select2().'
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
   '.cargartipoColegio(-1).'
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
         <input type="text" class="camptext1" id="colegioscodigo' . $colegios->get_idcolegios() . '" name="colegioscodigo' . $colegios->get_idcolegios() . '"   value="  ' . $colegios->get_colegioscodigo() . '"  required="required" />
      </td>
      <td>
         <input type="text"  id="colegios' . $colegios->get_idcolegios() . '" name="colegios' . $colegios->get_idcolegios() . '"   value="' . $colegios->get_colegio() . '"  required="required" />
      </td>
      <td>
      <select class="selector"  id="TipoColegio_tipoColegioId' . $colegios->get_idcolegios() . '" name="TipoColegio_tipoColegioId' . $colegios->get_idcolegios() . '">
   '.cargartipoColegio($colegios->get_tipoColegioTipoColegioId()).'
   </select>
   </td>
      <td>
      <div class=enlinea>
          <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $colegios->get_idcolegios() . ')">
          <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $colegios->get_idcolegios() . ')">
      </div>
      </td>
   </tr>';
   }
   return $lista;
}
echo cargarcolegiost($_POST['id']);
