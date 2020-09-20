<?php
require_once("../Crud/CrudCanton.php");
require_once("ajaxsselect2.php");
require_once("ajaxsselectprovincia.php");
require_once("../controladores/respuestasgenerales.php");

use  Crud\CrudCantones;
use  Clasesphp\Cantones;

session_start();
function cargarCanton($opt, $p)
{
    $crudc = new CrudCantones();
    $listacanton = null;
    $listacanton = $crudc->mostrarlistapoProvincia($opt);
    $dato = new Cantones();

    if ($opt != 0)
        $lista = ' <tr class="ui-widget-header">
        <th>
            Codigo
        </th>
        <th>
            Canton
        </th>
        <th>
            PROVINCIA
        </th>
        <th>
            ' . ajaxs_select2() . '
        </th>
    </tr>
                        <tr>
                            <td>
                                <input type="text" class="camptext1" id="cantoncodigo" name="cantoncodigo"   value=""  required="required" />
                            </td>
                            <td>
                                <input type="text" id="canton" name="canton"   value=""  required="required" />
                            </td>
                            <td>
                            <label>' . cargarProvinciaEtiqueta($opt) . '</label>
                            </td>
                            <td>
                                <input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">
                            </td>
                        </tr>


                       ';

    foreach ($listacanton as $dato) {

        $lista .= '
                    <tr>
                    <td>
                            <input type="text" class="camptext1" id="cantoncodigo' . $dato->getCantonId() . '" name="cantoncodigo' . $dato->getCantonId() . '"   value="' . $dato->getCantoncodigo() . '"  required="required" />
                        </td>
                        <td>
                            <input type="text" id="canton' . $dato->getCantonId() . '" name="canton' . $dato->getCantonId() . '"   value="' . $dato->getCanton() . '"  required="required" />
                        </td>
                        <td>

                            <select class="selector"  id="provinciacanton1' . $dato->getCantonId() . '" name="provinciacanton1' . $dato->getCantonId() . '">
                            ' . cargarProvincias_pais($p, $dato->getCantonprovincia()) . '
                            </select>
                        </td>
                        <td>
                        <div class=enlinea>
                            <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getCantonId() . ')">
                            <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getCantonId() . ')">
                        </div>
                        </td>
                    </tr>';
    }
    return $lista;
}



if ($_SESSION['user'] != "") {
    echo cargarCanton(($_POST['id']), ($_POST['p']));
} else {
    echo tiempoExedido();
}
