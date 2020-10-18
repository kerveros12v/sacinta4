<?php
require_once("../clasesphp/Discapacidadesestudiantes.php");
require_once("../Crud/CrudDiscapacidadesestudiantes.php");
require_once("../Crud/CrudDiscapacidad.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectdiscapacidad.php");
require_once("ajaxsselecttipodiscapacidad.php");
require_once("ajaxsselect2.php");

use Clasesphp\Discapacidad;
use Clasesphp\Discapacidadesestudiantes;
use Crud\CrudDiscapacidad;
use Crud\CrudDiscapacidadesestudiantes;
use Crud\CrudPeriodoacademico;

session_start();

$crudperiodoaca = new CrudPeriodoacademico();
$cedula = isset($_SESSION['campbuscarest']) ? $_SESSION['campbuscarest'] : "";
$periodo1 = $crudperiodoaca->obtenerPeriodoAcademicoActual();
function cargarformulariodiscapacidadestudiantes($cedula, $periodo)
{
    $crud = new CrudDiscapacidadesestudiantes();
    $cruddiscapacidad = new CrudDiscapacidad();
    $discapacidad1 = new Discapacidad();

    $dato = new Discapacidadesestudiantes();
    if ($crud->existe($cedula, $periodo) == 1) {
        $dato = $crud->obtenerdiscapacidadesestudiantes($cedula, $periodo);
        $discapacidad1 = $cruddiscapacidad->obtenerDiscapacidad($dato->getFkTipoDiscapacidadTipoDiscapacidadId());
    }

    $r = ajaxs_select2();
    $r .= '<td>
        <table width=100%>
            <tr class="tabtitulos">
			    <th>
				    DISCAPACIDAD
			    </th>
		    </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                      	        TIENE ALGUNA DISCAPACIDAD
           	                </td>
           	                <td>
                                <select class="selector"  name="fkDiscapacidadDiscapacidadId" id="fkDiscapacidadDiscapacidadId" onchange="discapacidadbool()">
                                    ' . discapacidad($dato->getFkTipoDiscapacidadTipoDiscapacidadId()) . '
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
  	        </tr>
            <tr id="discapacidadescarnet" >
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" id="carnetConadisId" name="carnetConadisId"  maxlength="10" class="light camptext1" value="' . $dato->getCarnetConadisId() . '" placeholder="N° Carnet"  required="required" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">NUMERO DE CARNET CONADIS </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
    		                            <td>
                                            <select class="selector"  name="fkTipoDiscapacidadTipoDiscapacidadId" id="fkTipoDiscapacidadTipoDiscapacidadId">
                                                ' . cargarTipoDiscapacidad($discapacidad1->getDiscapacidadbool()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">TIPO DE DISCAPACIDAD</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                        <input type="text"  name="porcentajeDiscapacidad" id="porcentajeDiscapacidad" class="light camptext1" value="' . $dato->getPorcentajeDiscapacidad() . '" placeholder="% discapacidad"  required="required" />


                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">PORCENTAJE DE DISCAPACIDAD</label>
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

    echo cargarformulariodiscapacidadestudiantes($cedula, isset($_SESSION['campbuscarperiodo']) ? $_SESSION['campbuscarperiodo'] : $periodo1->getPeriodoacademicoId());
} catch (\Exception $e) {
    echo "<script>console.log('" . $e . "');</script>";
}
