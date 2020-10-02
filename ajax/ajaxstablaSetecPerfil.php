<?php
require_once("../Crud/CrudSetecPerfil.php");

use Crud\CrudSetecPerfil;

function cargasetecperfil()
{
    $lista = '';
    $crud = new CrudSetecPerfil();
    $lstdato = $crud->mostrar();
    $lista .= '<tr>
                    </td><td>
                    <td>
                        <input type="text" id="setecperfilcodigo"  name="setecperfilcodigo" class="camptext1"  min="0" required="required"  />' .
        '           </td>
                    <td>
                        <input type="text" id="setecperfilnombre" name="setecperfilnombre required="required"  />' .
        '           </td>
                    <td>
                    <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
                    </td>
                </tr>';
    foreach ($lstdato as $dato) {
        $lista .=
            '<tr></td><td>
            <td><input type="text" id="setecperfilcodigo' . $dato->getIdsetecperfil() . '" class="camptext1" name="setecperfilcodigo' . $dato->getIdsetecperfil() . '" readonly="readonly" required="required" value="' . $dato->getSetecperfilcodigo() . '"  />' .
            '</td><td><input type="text" id="setecperfilnombre' . $dato->getIdsetecperfil() . '" name="setecperfilnombre' . $dato->getIdsetecperfil() . '" required="required" value="' . $dato->getSetecperfilnombre() . '"  />' .
            '</td><td>
<input type="button" value="Actualizar"  id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdsetecperfil() . ')">
 <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdsetecperfil() . ')">
</td>
</tr>';
    }
    return $lista;
}
echo cargasetecperfil();
