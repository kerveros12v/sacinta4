<?php

require_once("../Crud/CrudMatriculacion.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectipomatricula.php");
require_once("ajaxsselectperiodoacademico.php");
require_once("ajaxsselectcarreras.php");
require_once("ajaxsselectjornadaacademica.php");
require_once("ajaxsselectnivelacdemico.php");
require_once("ajaxsselectparalelo.php");
require_once("ajaxsselectniveldeformacion.php");
require_once("ajaxsselectbonodesarrollo.php");
require_once("ajaxsselectestudianteocupacion.php");
require_once("ajaxsselectingresosestudiantes.php");
require_once("ajaxsselectperdiolagratuidad.php");
require_once("ajaxsselectrepetidounamateria.php");

require_once("ajaxsselect2.php");

use Crud\CrudMatriculas;
use Crud\CrudPeriodoacademico;

session_start();
//echo ("Periodo : " . $_SESSION['peridoactual']);

$crud11 = new CrudPeriodoacademico();
$cedula11 = isset($_SESSION['campbuscarest']) ? $_SESSION['campbuscarest'] : "";
$periodo = isset($_SESSION['periodo']) ? $crud11->obtenerPeriodoacademico($_SESSION['periodo']) : $crud11->obtenerPeriodoAcademicoActual();
function cargarMatricula($cedula, $periodo)
{

    $sesion = isset($_SESSION['tipouser']) ? $_SESSION['tipouser'] : "est";
    $crud = new CrudMatriculas();
    $dato = $crud->obtenerMatricula($cedula, $periodo);
    $r = ajaxs_select2() . '
    <td>
        <table>
            <tr class="tabtitulos">
                <th>
                    DATOS DE LA CARRERA Y NIVEL A MATICULARCE
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
                                            <select class="selector" name="periodoacademico" id="periodoacademico">
                                                ' . (($sesion == "est") ? cargarperiodo(0) : cargarperiodo(1)) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">PERIODO ACADEMICO</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="jornadaAcademica" id="jornadaAcademica">
                                                ' . cargarJornadaAcademica($dato->getJjornadaAcademicaId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">JORNADA ACADEMICO</label>
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
                                            <input type="date" name="fechaMatricula" id="fechaMatricula" required="required" value="' . $dato->getFechaMatricula() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">FECHA DE MATRICULA</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="date" name="fechacarrera" id="fechacarrera"  required="required" value="' . $dato->getFechainicioCarrera() . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">FECHA DE INICIO DE LA CARRERA</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                <td>
            </tr>
            <!--------->
            <tr>
                <td>
                    <table>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>
                                                    <select class="selector" name="carreras" id="carreras">
                                                        ' . (cargarCarrera($dato->getCcarrerasId())) . '
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="etiqueta1">CARRERA</label>
                                                </th>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <select class="selector" name="tipoMatricula" id="tipoMatricula">
                                            ' . cargartipoMatricula($dato->getTtipoMatriculaId()) . '
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label class="etiqueta1">Tipo Matricula</label>
                                    </th>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </table>
                </td>
            </tr>
            <!----->
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="nivelacademico" id="nivelacademico">
                                                ' . cargarnivelAcademico($dato->getNnivelAcademicoQueCursaId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">NIVEL ACADEMICO QUE CURSA</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="paralelo" id="paralelo">
                                                ' . cargarparalelo($dato->getPparaleloId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">PARALELO</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-------->
            <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <select class="selector" name="gratuidad" id="gratuidad">
                                            ' . cargarHaperdidolagratuidad($dato->getHhaPerdidoLaGratuidadId()) . '
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label class="etiqueta1">HA PERDIDO LA GRATUIDAD</label>
                                    </th>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <select class="selector" name="nivelperdido" id="nivelperdido">
                                            ' . cargarHarepetidoalmenosunamateria($dato->getHhaRepetidoAlMenosUnaMateriaid()) . '
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <label class="etiqueta1">HA REPETIDO AL MENOS UNA MATERIA</label>
                                    </th>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!------>
            <tr class="tabtitulos">
                <th>
                    NIVEL DE FORMACION FAMILIAR
                </th>
            </tr>
            <!----->
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="formacionpadre" id="formacionpadre">
                                                ' . cargarnivelformacion($dato->getFkNivelFormacionPadre()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">NIVEL DE FORMACION DEL PADRE</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="formacionmadre" id="formacionmadre">
                                                ' . cargarnivelformacion($dato->getFkNivelFormacionMadre()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">NIVEL DE FORMACION DE LA MADRE</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tabtitulos">
                <th>
                    AYUDA ECONOMICA
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
                                            ¿RECIBE EL BONO DE DESARROLLO HUMANO?
                                        </td>
                                        <td>
                                            <select class="selector" name="bonoDesarrollo" id="bonoDesarrollo">
                                                ' . cargarbonodesarrollo($dato->getBbonoDesarrolloId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ¿RECIBE PENCION DIFENRENCIADA?
                                        </td>
                                        <td>
                                            <select class="selector" name="penciond" id="penciond">
                                                ' . cargarbonodesarrollo($dato->getBbonoDesarrolloId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" name="creditoe" id="creditoe" readonly="readonly" required="required" value="' . (($dato->getMontoCreditoEducativo() == "" || $dato->getMontoCreditoEducativo() == null) ? "0" : $dato->getMontoCreditoEducativo()) . '" />
                                        </td>
                                        <td>
                                            <input type="text" name="ayudaeco" id="ayudaeco" readonly="readonly" required="required" value="' . (($dato->getMontoAyudaEconomica() == "" || $dato->getMontoAyudaEconomica() == null) ? "0" : $dato->getMontoAyudaEconomica()) . '" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        <label class="etiqueta1"> MONTO DE CREDITO EDUCATIVO</label>
                                        </th>
                                        <th>
                                        <label class="etiqueta1"> MONTO DE AYUDA ECONOMICA</label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tabtitulos">
                <th>
                    ESTADO FAMILIAR
                </th>
            </tr>
            <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            <input type="text" name="miembroshogar" id="miembroshogar"  required="required" value="' . $dato->getCantidadMiembrosHogar() . '" />
                        </td>
                        <td>
                            <input type="text" name="totalingresos" id="totalingresos"  required="required" value="' . $dato->getIngresoTotalHogar() . '" />
                        </td>
                    </tr>
                    <tr>
                        <th>
                        <label class="etiqueta1">CANTIDAD DE MIENBROS EN SU HOGAR</label>
                        </th>
                        <th>
                        <label class="etiqueta1"> TOTAL DE INGRESOS EN SU HOGAR</label>
                        </th>
                    </tr>
                </table>
            </td>
        </tr>
            <tr class="tabtitulos">
                <th>
                    ESTADO LABORAL
                </th>
            </tr>
            <!------>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="estudianteocupacion" id="estudianteocupacion">
                                                ' . cargarestudianteocupacion($dato->getEestudianteOcupacionId()) . '
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">ESTADO OCUPACIONAL DEL ESTUDIANTE : </label>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector" name="estudianteingresos" id="estudianteingresos">
                                                ' . cargaringresosEstudiantes($dato->getIingresosestudianteId()) . '
                                            </select>
                                        </td>
                                    <tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">OCUPACION DE LOS INGRESOS DEL ESTUDIANTE : </label>
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

echo cargarMatricula($cedula11, $periodo->getPeriodoacademicoId());
