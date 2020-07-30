<?php
require_once("../Crud/CrudResidenciaestudiantes.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectpais.php");
require_once("ajaxsselectprovincia.php");
require_once("ajaxsselectcanton.php");
require_once("ajaxsselectparroquia.php");
require_once("ajaxsselect2.php");

session_start();
$crud1=new \Crud\CrudPeriodoacademico();
$cedula=isset($_SESSION['campbuscarest'])?$_SESSION['campbuscarest']:"";
$periodo=isset($_SESSION['periodo'])?$crud1->obtenerPeriodoacademico($_SESSION['periodo']):$crud1->obtenerPeriodoAcademicoActual();
function cargarresidenciaestudiante($cedula,$periodo){
    $crud=new \Crud\CrudResidenciaestudiantes();
    $dato=$crud->obtenerresidenciaestudiantes($cedula,$periodo);
    $r=ajaxs_select2().'
<td>
    <table width=100%>
        <tr class="tabtitulos">
            <th>
                LUGAR DE RESIDENCIA ACTUAL
            </th>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            <select class="selector"  id="paisRecidencia" name="paisRecidencia" onchange="cargarProvinciasest2()">
                                '.cargarPais($dato->get_paisResidencia()).'
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label class="etiqueta1">PAIS DE RESIDENCIA ACTUAL</label>
                        </th>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>
                           <table>
                                <tr>
                                    <td>
                                        <select class="selector"  name="provinciaRecidencia" id="provinciaRecidencia" onchange="cargarCantonest2()">
                                            '.cargarProvincias($dato->get_provinciaResidencia()).'
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label class="etiqueta1">PROVINCIA DE RESIDENCIA ACTUAL</label>
                                    </th>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <select class="selector"  name="cantonRecidencia" id="cantonRecidencia" >
                                            '.cargarCanton($dato->get_cantonResidencia(),$dato->get_provinciaResidencia()).'
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label class="etiqueta1">CANTON DE RESIDENCIA ACTUAL</label>
                                    </th>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <select class="selector"  name="parroquiaRecidencia" id="parroquiaRecidencia">
                                            '.cargarParroquia($dato->get_codigoPostal(),$dato->get_cantonResidencia()).'
                                        </select>
                                     </td>
                                </tr>
                                <tr>
                                    <th>
                                         <label class="etiqueta1">PARROQUIA DE RESIDENCIA ACTUAL</label>
                                    </th>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <input type="text" name="direcciondomi" id="direcciondomi" required="required" value="'.$dato->get_direccionDomiciliariaResidencia().'"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label class="etiqueta1">CALLE PRINCIPAL , CALLE SECUNDARIA Y NUMERO DE CASA DE LA RESIDENCIA ACTUAL</label>
                                    </th>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</td>';
    return $r;
    }
    echo cargarresidenciaestudiante($cedula,$periodo->get_periodoacademicoId());