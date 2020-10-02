<?php
require_once("../Crud/CrudResidenciaestudiantes.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectpais.php");
require_once("ajaxsselectprovincia.php");
require_once("ajaxsselectcanton.php");
require_once("ajaxsselectparroquias.php");
require_once("ajaxsselect2.php");

use Clasesphp\Cantones;
use Clasesphp\Paises;
use Clasesphp\Parroquia;
use Clasesphp\Provincias;
use Crud\CrudPaises;
use Crud\CrudCantones;
use Crud\CrudParroquia;
use Crud\CrudProvincias;
use Crud\CrudResidenciaestudiantes;
use Clasesphp\Residenciaestudiantes;
use Crud\CrudPeriodoacademico;

session_start();
$crud1 = new CrudPeriodoacademico();
$cedula = isset($_SESSION['campbuscarest']) ? $_SESSION['campbuscarest'] : "";
$periodo = isset($_SESSION['periodo']) ? $crud1->obtenerPeriodoacademico($_SESSION['periodo']) : $crud1->obtenerPeriodoAcademicoActual();
function cargarresidenciaestudiante($cedula, $periodo)
{
    $crud = new CrudResidenciaestudiantes();
    $crudparroquia = new CrudParroquia();
    $crudcant = new CrudCantones();
    $crudprov = new CrudProvincias();
    $crudpais = new CrudPaises();
    $dato = new Residenciaestudiantes();
    $paisest = new Paises();
    $provest = new Provincias();
    $cantonet = new Cantones();
    $parroquia = new Parroquia();
    if ($crud->existe($cedula, $periodo) == 1) {
        $dato = $crud->obtenerresidenciaestudiantes($cedula, $periodo);
        $parroquia = $crudparroquia->obtenerParroquia($dato->getCodigoPostal());
        $cantonet = $crudcant->obtenerCanton($parroquia->getParroquiasCanton());
        $provest = $crudprov->obtenerProvincia($cantonet->getCantonprovincia());
        $paisest = $crudpais->obtenerPaises($provest->getProvinciapais());
    }

    $r = ajaxs_select2() . '
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
                                ' . cargarPais($paisest->getPaisId()) . '
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
                                            ' . cargarProvincias($provest->getProvinciaId(), $paisest->getPaisId()) . '
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
                                        <select class="selector"  name="cantonRecidencia" id="cantonRecidencia" onchange="parroquiaRecidencia()">
                                            ' . cargarCanton($cantonet->getCantonId(), $provest->getProvinciaId()) . '
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
                                        <select class="selector"  name="parroquiaRecidencia1" id="parroquiaRecidencia1">
                                            ' . cargarParroquia($parroquia->getIdparroquias(), $cantonet->getCantonId()) . '
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
                                        <input type="text" name="direcciondomi" id="direcciondomi" required="required" value="' . $dato->getDireccionDomiciliariaResidencia() . '"/>
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
try {
    echo cargarresidenciaestudiante($cedula, $periodo->getPeriodoacademicoId());
} catch (\Throwable $e) {
    echo  $e;
}
