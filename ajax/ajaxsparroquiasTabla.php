<?php
//require_once("../clasesphp/Parroquia.php");
require_once("../Crud/CrudParroquia.php");

use Clasesphp\Parroquia;
use Crud\CrudParroquia;


function cargarParroquia($opt)
{
   $parroquia = new Parroquia();
   //echo($parroquia->__toString()."<br>");
   //echo "<script>console.log(Serivdor recibe'".$opt."');</script>";
   $id = $opt;
   $crudparroquia = new CrudParroquia();
   $lstparroquia = $crudparroquia->mostrarporCiudad($id);
   $lista="";
   $lista .= '<tr>
   <th>
      Codigo
   </th>
   <th>
      Parroquia
   </th>
   <th>

   </th>
</tr>
<tr>
   <td>
      <input type="text" class="camptext1" id="codigoparroquia" name="codigoparroquia"   value=" "  required="required" />
   </td>
   <td>
      <input type="text"  id="parroquia' . $parroquia->get_idparroquias() . '" name="parroquia' . $parroquia->get_idparroquias() . '"   value="' . $parroquia->get_parroquiascodigo() . '"  required="required" />
   </td>
   <td>
   <input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">
</td>
</tr>';
   foreach ($lstparroquia as $parroquia) {
      $lista .= '
   <tr>
      <td>
         <input type="text" class="camptext1" id="codigoparroquia' . $parroquia->get_idparroquias() . '" name="codigoparroquia' . $parroquia->get_idparroquias() . '"   value="  ' . $parroquia->get_parroquiascodigo() . '"  required="required" />
      </td>
      <td>
         <input type="text"  id="parroquia' . $parroquia->get_idparroquias() . '" name="parroquia' . $parroquia->get_idparroquias() . '"   value="' . $parroquia->get_parroquia() . '"  required="required" />
      </td>
      <td>
      <div class=enlinea>
          <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $parroquia->get_idparroquias() . ')">
          <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $parroquia->get_idparroquias() . ')">
      </div>
      </td>
   </tr>';
   }
   return $lista;
}
echo cargarParroquia($_POST['id']);
