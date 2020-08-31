<?php
require_once ("../Crud/CrudCanton.php");
require_once ("ajaxsselect2.php");
require_once ("ajaxsselectprovincia.php");
require_once("../controladores/respuestasgenerales.php");

use  Crud\CrudCantones;
use  Clasesphp\Cantones;
session_start();
function cargarCanton($opt,$p){
    $crudc=new CrudCantones();
    $listacanton=null;
    if($opt==-1)$listacanton=$crudc->mostrar();
	else $listacanton=$crudc->mostrarlistapoProvincia($opt);
                $dato=new Cantones();
                $lista='<tr>
                            <th>
                                Codigo
                            </th>
                            <th>
                                Canton
                            </th>
                            <th>

                            </th>
                            <th>

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
                                <input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">
                            </td>
                        </tr>
                        <tr>
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
                                '.ajaxs_select2().'
                            </th>
                    </tr>

                       ';

                foreach($listacanton as $dato){

                    $lista.='
                    <tr>
                    <td>
                            <input type="text" class="camptext1" id="cantoncodigo'.$dato->get_cantonId().'" name="cantoncodigo'.$dato->get_cantonId().'"   value="'.$dato->get_cantoncodigo().'"  required="required" />
                        </td>
                        <td>
                            <input type="text" id="canton'.$dato->get_cantonId().'" name="canton'.$dato->get_cantonId().'"   value="'.$dato->get_canton().'"  required="required" />
                        </td>
                        <td>

                            <select class="selector"  id="provinciacanton1'.$dato->get_cantonId().'" name="provinciacanton1'.$dato->get_cantonId().'">
                            '.cargarProvincias_pais($p,$dato->get_cantonprovincia()).'
                            </select>
                        </td>
                        <td>
                        <div class=enlinea>
                            <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar('.$dato->get_cantonId().')">
                            <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar('.$dato->get_cantonId().')">
                        </div>
                        </td>
                    </tr>';

                }
			return $lista;
}



if ($_SESSION['user']!="") {
 echo cargarCanton(($_POST['id']),($_POST['p']));
 }else {
    echo tiempoExedido();
 }

?>