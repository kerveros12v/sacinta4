<?php
require_once("ajaxsselectcanton.php");
require_once("ajaxsselectprovincia.php");
require_once("ajaxsselectcolegios.php");
require_once("../Crud/CrudBachillerato.php");
require_once("../Crud/CrudColegios.php");
require_once("../Crud/CrudCanton.php");
require_once("ajaxsselect2.php");
require_once("ajaxsselectipobachillerato.php");

use Crud\CrudBachillerato;
use Crud\CrudCantones;
use Crud\CrudColegios;

session_start();
$cedula = isset($_SESSION['campbuscarest']) ? $_SESSION['campbuscarest'] : "";
function cargarBachilleratoEstudiantes($cedula)
{
    $crud = new CrudBachillerato();
    $crudcolegio = new CrudColegios();
    $crudcanton = new CrudCantones();
    $r = ajaxs_select2();
    if ($crud->existe($cedula) == 0) {
        $r .= '
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
                                                    <select class="selector"  name="provColegio" id="provColegio" onchange="cargarCantonest3()">
                                                        ' . cargarProvinciasporpais(56) . '
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
                                                    <select class="selector"  name="cantonColegio" id="cantonColegio" onchange="cargarColegio()">
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
                                                <select class="selector"  name="fkTiposBacilleratotiposBacilleratoId" id="fkTiposBacilleratotiposBacilleratoId">
                                                ' . cargartipobachillerato(0) . '
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label class="etiqueta1">TIPO DE BACHILLERATO </label>
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
                                                    <input type="text" id="graduacion" name="graduacion" maxlength="10" placeholder="Año de Graduacion del Colegio" value=""/>
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
    } else {
        $dato = $crud->obtenerBachillerato($cedula);
        $colegio = $crudcolegio->obtenerColegio($dato->getColegiosidColegios());
        $cantonba = $crudcanton->obtenerCanton($colegio->getCantonCantonId());
        $r .= '
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
                                                        ' . cargarProvincias_pais(56, $cantonba->getCantonprovincia()) . '
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
                                                        ' . cargarCanton($colegio->getCantonCantonId(), $cantonba->getCantonprovincia()) . '
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
                                                ' . cargarColegios($colegio->getCantonCantonId(), $dato->getColegiosidColegios()) . '
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
                                            <select class="selector"  name="fkTiposBacilleratotiposBacilleratoId" id="fkTiposBacilleratotiposBacilleratoId">
                                            ' . cargartipobachillerato($dato->getFkTiposBacilleratotiposBacilleratoId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">TIPO DE BACHILLERATO </label>
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
                                                <input type="text" id="graduacion" name="graduacion" maxlength="10" placeholder="Año de Graduacion del Colegio" value="' . $dato->getAnioGraduacion() . '"/>
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
    }


    return $r;
}
try {
    echo cargarBachilleratoEstudiantes($cedula);
} catch (\Throwable $e) {
    echo $e;
}
