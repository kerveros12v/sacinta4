<?php
require_once ("../Crud/CrudProvincia.php");
function cargarProvincias($opt){
	$oCrudprovinciaRecidencia=new \Crud\CrudProvincias();
				$listaprovinciaRecidencia=$oCrudprovinciaRecidencia->mostrar();
				$dato=new \Clasesphp\Provincias();
                $lista='<tr>
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
                foreach($listaprovinciaRecidencia as $dato){
                    if($dato->get_provinciapais()==$opt){
                    $lista.='
                    <tr>
                    <td>
                            <input type="text" class="camptext1" id="provinciacodigo'.$dato->get_provinciaId().'" name="provinciacodigo'.$dato->get_provinciaId().'"   value="'.$dato->get_provinciacodigo().'"  required="required" />
                        </td>
                        <td>
                            <input type="text" id="provincia'.$dato->get_provinciaId().'" name="provincia'.$dato->get_provinciaId().'"   value="'.$dato->get_provincia().'"  required="required" />
                        </td>
                        <td>
                        <div class=enlinea>
                            <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar('.$dato->get_provinciaId().')">
                            <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar('.$dato->get_provinciaId().')">
                        </div>
                        </td>
                    </tr>';
                    }
                }
			return $lista;
}




echo cargarProvincias($_POST['id']);
?>