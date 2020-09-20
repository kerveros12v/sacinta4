<?php
require_once("../Crud/CrudInstitutos.php");
require_once("ajaxsselectcanton.php");
require_once("../Crud/CrudCanton.php");
require_once("ajaxsselecttiposostenimiento.php");
require_once("ajaxsselect2.php");

use Clasesphp\Institutos;
use Crud\CrudInstitutos;
use Crud\CrudCantones;

function cargartablainstituto($opt)
{
    $oCrudinstituto = new CrudInstitutos;
    $listainstituto = $oCrudinstituto->mostrar();
    $crudcant = new CrudCantones();
    $dato = new Institutos;
    $lista = '<tr class="ui-widget-header">
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Canton</th>
    <th>Forma de Sostenimiento</th>
    <th>' . ajaxs_select2() . '</th>
  </tr>';
    if ($opt != 0) {
        $lista .= '     <tr>
                    <td>
                        <input type="text" class="camptext1" id="institutoscodigo" name="institutoscodigo"   value=""  required="required" />
                    </td>
                    <td>
                        <input type="text" id="institutoNombre" name="institutoNombre"   value=""  required="required" />
                    </td>
                    <td>

                    <select  class="selector" name="cantonId" id="cantonId">
                        ' . cargarCanton(0, $opt) . '
                    </select>
                </td>
                <td>
                <select  class="selector" name="fkidSostenimiento" id="fkidSostenimiento">
                    ' . cargarSotenimiento(0) . '
                </select>
            </td>


                    <td>
                        <input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">
                    </td>
                </tr>
                       ';

        foreach ($listainstituto as $dato) {
            $cantonet = $crudcant->obtenerCanton($dato->getCantonId());
            $lista .= '
                    <tr>
                    <td>
                            <input type="text" class="camptext1" id="institutoscodigo' . $dato->getInstitutosId() . '" name="institutoscodigo' . $dato->getInstitutosId() . '"   value="' . $dato->getinstitutoscodigo() . '"  required="required" />
                        </td>
                        <td>
                            <input type="text" id="institutoNombre' . $dato->getInstitutosId() . '" name="institutoNombre' . $dato->getInstitutosId() . '"   value="' . $dato->getinstitutoNombre() . '"  required="required" />
                        </td>
                        <td>
                    <select  class="selector" name="cantonId' . $dato->getInstitutosId() . '" id="cantonId' . $dato->getInstitutosId() . '">
                        ' . cargarCanton($cantonet->getCantonId(), $cantonet->getCantonprovincia()) . '
                    </select>
                </td>
                <td>
                <select  class="selector" name="fkidSostenimiento' . $dato->getInstitutosId() . '" id="fkidSostenimiento' . $dato->getInstitutosId() . '">
                    ' . cargarSotenimiento($dato->getFkidSostenimiento()) . '
                </select>
            </td>
                        <td>
                        <div class=enlinea>
                            <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getInstitutosId() . ')">
                            <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getInstitutosId() . ')">
                        </div>
                        </td>
                    </tr>';
        }
    }
    return $lista;
}




echo cargartablainstituto($_POST['id']);
