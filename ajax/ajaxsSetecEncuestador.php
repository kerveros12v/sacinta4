<?php

require_once("../Crud/CrudSetecEncuestador.php");
require_once("ajaxsselectetnia.php");
require_once("ajaxsselect2.php");

use Crud\CrudSetecEncuestador;

function carga()
{
    $lista = '';
    $crud = new CrudSetecEncuestador();
    $lstdato = $crud->mostrar();
    $lista .= '
    <tr>
        <td> ' . ajaxs_select2() . '
            <table>
                <tr>

                    <td>
                       Numero de Identificacion <input type="text" id="idsetecEncuestadornumIdentificacion" class="camptext1" name="idsetecEncuestadornumIdentificacion"  required="required"  />
                    </td>
                </tr>
                <tr>
                    <td>
                       Nombre del Encuestador <input type="text" id="nombre" name="nombre" required="required"  />
                    </td>
                </tr>
                <tr>
                    <td>Etnia del Encuestador
                        <select class="selector"  id="etnias_etniaId" name="etnias_etniaId">
                            ' . cargarEtnia(0) . '
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    Perfil del Encuestador

                        <input type="text" id="setecencuestadorperfil" name="setecencuestadorperfil" required="required"  />
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="button" value="Guardar" class="btnunico" id="btnguardar" onclick="registro()">
                    </td>
                </tr>
            </table>
        </td>
    </tr>

<tr>
<td>
<table>
<tr class="ui-widget-header">
<th></th>
<th>Numero de Identificacion</th>
<th>Apellidos y Nombres</th>
<th>Etnia</th>
<th>Perfil</th>
<th></th>

</tr>';
    foreach ($lstdato as $dato) {
        $lista .=
            ' <td>
    <input type="text" class="camptext1" id="idsetecEncuestadornumIdentificacion' . $dato->getIdnumIdentificacion() . '"  readonly="readonly"   name="idsetecEncuestadornumIdentificacion"  required="required" value="' . $dato->getIdnumIdentificacion() . '" />' .
            '</td>
<td>
    <input type="text" id="nombre' . $dato->getIdnumIdentificacion() . '" name="nombre required="required" value="' . $dato->getNombre() . '"  />' .
            '</td>
<td>
<select class="selector"  id="etnias_etniaId' . $dato->getIdnumIdentificacion() . '" name="etnias_etniaId">
' . cargarEtnia($dato->getEtniasEtniaId()) . '
</select>' .
            '</td>
<td>

<input type="text" id="setecencuestadorperfil' . $dato->getIdnumIdentificacion() . '" name="setecencuestadorperfil' . $dato->getIdnumIdentificacion() . '" required="required" value="' . $dato->getSetecencuestadorperfil() . '" />

</td>
<td>
<input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdnumIdentificacion() . ')">
 <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdnumIdentificacion() . ')">
</td>
</tr>';
    }
    $lista .= '</table>
    </td>
    </tr>';
    return $lista;
}
echo carga();
