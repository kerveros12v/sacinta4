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
require_once("ajaxsselectestudianteocupacion.php");
require_once("ajaxsselectbonodesarrollo.php");
require_once("ajaxsselectestudianteocupacion.php");
require_once("ajaxsselectingresosestudiantes.php");
require_once("ajaxsselect2.php");

use Crud\CrudMatriculas;
use Crud\CrudPeriodoacademico;
session_start();
$crud1=new CrudPeriodoacademico();
$cedula=isset($_SESSION['campbuscarest'])?$_SESSION['campbuscarest']:"";

$periodo=isset($_SESSION['periodo'])?$crud1->obtenerPeriodoacademico($_SESSION['periodo']):$crud1->obtenerPeriodoAcademicoActual();
function cargarcodigoMatricula($cedula,$periodo){
    $sesion=isset($_SESSION['tipouser'])?$_SESSION['tipouser']:"est";
    $crud=new CrudMatriculas();
    $dato=$crud->obtenerMatricula($cedula,$periodo);
    $r=ajaxs_select2().'
    <td>
        <table>
            <tr class="tabtitulos">
                <th>
                    DATOS DE LA CARRERA Y NIVEL A MATICULARCE
                </th>
            </tr>
            <tr >
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="selector"  name="periodoacademico" id="periodoacademico">
                                                '.(($sesion=="est")?cargarperiodo(0):cargarperiodo(1)).'
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
                                            <select  class="selector" name="jornadaAcademica" id="jornadaAcademica">
                                                '.cargarJornadaAcademica($dato->get_jornadasacademicas_JornadaAcademicaId()).'
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
                                            <input type="date" name="fechaMatricula" id="fechaMatricula"  required="required" value="'.$dato->get_fechaMatricula().'"/>
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
                                            <input type="date" name="fechacarrera" id= "fechacarrera" readonly="readonly"  required="required" value="'.$dato->get_fechainicioCarrera().'" />
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
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <select  class="selector" name="carreras" id="carreras">
                                                '.( cargarCarrera($dato->get_carreras_carrerasId())).'
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
                            <td>
                            <table>
                                <tr>
                                    <td>
                                        <select class="selector"  name="tipoMatricula" id="tipoMatricula">
                                            '.cargartipoMatricula($dato->get_tipomatricula_tipoMatriculaId()).'
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
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <select class="selector"  name="nivelacademico" id="nivelacademico">
                                            '.cargarnivelAcademico($dato->get_nivelAcademico_NivelAcademicoQueCursaId()).'
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
                        <td >
                            <table>
                                <tr>
                                    <td>
                                        <select class="selector"  name="paralelo" id="paralelo">
                                            '.cargarparalelo($dato->get_paralelo_paraleloId()).'
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
            <tr class="tabtitulos">
                <th>
                    NIVEL DE FORMACION FAMILIAR
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
                                            <select class="selector"  name="formacionpadre" id="formacionpadre">
                                                '.cargarnivelformacion($dato->get_fkNivelFormacionPadre()).'
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
                                            <select class="selector"  name="formacionmadre" id="formacionmadre">
                                                '.cargarnivelformacion($dato->get_fkNivelFormacionMadre()).'
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
	                        	¿RECIBE EL BONO DE DESARROLLO HUMANO?
	                        </td>
                            <td>
                                <select  class="selector" name="bonoDesarrollo" id="bonoDesarrollo">
                                    '.cargarbonodesarrollo($dato->get_bonodesarrollo_bonoDesarrolloId()).'
                                </select>
	                        </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tabtitulos">
                <th>
                   ESTADO LABORAL
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
                                            <select class="selector"  name="estudianteocupacion" id="estudianteocupacion">
                                                '.cargarestudianteocupacion($dato->get_estudianteocupacion_estudianteOcupacionId()).'
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
                                            <select  class="selector" name="estudianteingresos" id="estudianteingresos">
                                                '.cargaringresosEstudiantes($dato->get_ingresosestudiante_ingresosestudianteId()).'
                                            </select>
                                        </td>
                                    <tr>
                                    <tr>
                                        <th>
                                            <label class="etiqueta1">OCUPACION DE LOS INGRESOS DEL ESTUDIANTE : </label>
                                        </th>
                                    </tr>
                            </tr>
        </table>

    </td>';
return $r;
}
echo cargarcodigoMatricula($cedula,$periodo->get_periodoacademicoId());

