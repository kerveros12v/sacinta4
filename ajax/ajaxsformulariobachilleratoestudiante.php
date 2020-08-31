<?php
require_once("ajaxsselectcanton.php");
require_once("ajaxsselectprovincia.php");
require_once("ajaxsselectcolegios.php");
require_once("../Crud/CrudBachillerato.php");
require_once("../Crud/CrudColegios.php");
require_once("../Crud/CrudCanton.php");
require_once("ajaxsselect2.php");

use Crud\CrudBachillerato;
use Crud\CrudCantones;
use Crud\CrudColegios;

session_start();
$cedula=isset($_SESSION['campbuscarest'])?$_SESSION['campbuscarest']:"";
    function cargarBachilleratoEstudiantes($cedula){
        $crud=new CrudBachillerato();
        $crudcolegio=new CrudColegios();
        $crudcanton=new CrudCantones();

        $dato=$crud->obtenerBachillerato($cedula);
        $colegio=$crudcolegio->obtenerColegio($dato->get_colegios_idColegios());
        $cantonba=$crudcanton->obtenerCanton($colegio->get_cantonCantonId());
        $r=ajaxs_select2();
        $r.='
        <td>
            <table width=100%>
                <tr class="tabtitulos">
                    <th>
                        BACHILLERATO DEL ESTUDIANTE
                    </th>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <select class="selector"  name="provColegio" id="provColegio">
                                                    '.cargarProvincias($cantonba->get_cantonprovincia()).'
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label class="etiqueta1">	PROVINCIA </label>
                                            </th>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <select class="selector"  name="cantonColegio" id="cantonColegio">
                                                    '.cargarCanton($colegio->get_cantonCantonId(),$cantonba->get_cantonprovincia()).'
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label class="etiqueta1">	CANTON </label>
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
                                                <select class="selector"  name="colegio" id="colegio">
                                                    '.cargarColegios($colegio->get_cantonCantonId(),$dato->get_colegios_idColegios()).'
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label class="etiqueta1">	COLEGIO </label>
                                            </th>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <input type="text" id="graduacion" name="graduacion" maxlength="10" placeholder="Año de Graduacion del Colegio" value="'.$dato->get_anioGraduacion().'"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label class="etiqueta1">	AÑO DE GRADUACION </label>
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
    echo cargarBachilleratoEstudiantes($cedula);