<?php
require_once("../Crud/CrudProvincia.php");
function cargarProvincias($opt)
{
    $oCrudprovinciaRecidencia = new \Crud\CrudProvincias();
    $listaprovinciaRecidencia = $oCrudprovinciaRecidencia->mostrar();
    $dato = new \Clasesphp\Provincias();
    $lista = '';
    if ($opt != 0)
        $lista = '<tr class="ui-widget-header">
                    <th>
                        Codigo
                    </th>
                    <th>
                        Provincia
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="camptext1" id="provinciacodigo" name="provinciacodigo"   value=""  required="required" />
                    </td>
                    <td>
                        <input type="text" id="provincia" name="provincia"   value=""  required="required" />
                    </td>
                    <td>
                        <input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">
                    </td>
                </tr>
                       ';
    foreach ($listaprovinciaRecidencia as $dato) {
        if ($dato->getProvinciapais() == $opt) {
            $lista .= '
                    <tr>
                    <td>
                            <input type="text" class="camptext1" id="provinciacodigo' . $dato->getProvinciaId() . '" name="provinciacodigo' . $dato->getProvinciaId() . '"   value="' . $dato->getProvinciacodigo() . '"  required="required" />
                        </td>
                        <td>
                            <input type="text" id="provincia' . $dato->getProvinciaId() . '" name="provincia' . $dato->getProvinciaId() . '"   value="' . $dato->getProvincia() . '"  required="required" />
                        </td>
                        <td>
                        <div class=enlinea>
                            <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getProvinciaId() . ')">
                            <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getProvinciaId() . ')">
                        </div>
                        </td>
                    </tr>';
        }
    }
    return $lista;
}




echo cargarProvincias($_POST['id']);
