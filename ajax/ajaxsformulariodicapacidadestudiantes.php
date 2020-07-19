<?php
require_once("ajaxsselectdiscapacidad.php");
require_once("ajaxsselecttipodiscapacidad.php");
require_once("../Crud/CrudDiscapacidadesestudiantes.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselect2.php");

session_start();
$crudperiodoaca=new \Crud\CrudPeriodoacademico();
$cedula=isset($_SESSION['est'])?$_SESSION['est']:"";
$periodoacademico=isset($_SESSION['periodo'])?$crudperiodoaca->obtenerPeriodoacademico($_SESSION['periodo']):$crudperiodoaca->obtenerPeriodoAcademicoActual();
echo "<script>console.log('".$cedula."')</script>";
echo "<script>console.log('".$periodo."')</script>";
function cargarformulariodiscapacidadestudiantes($cedula,$periodo){


    $crud=new \Crud\CrudDiscapacidadesestudiantes();
    $dato=new \Clasesphp\Discapacidadesestudiantes();
    if($crud->existe($cedula)==1)$dato=$crud->obtenerdiscapacidadesestudiantes($cedula,$periodo);
    $r=ajaxs_select2();
    $r.='<td>
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
                                <select class="selector"  name="fkDiscapacidadDiscapacidadId" id="fkDiscapacidadDiscapacidadId">
                                    '.discapacidad($dato->get_fkDiscapacidadDiscapacidadId()).'
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
                                            <input type="text" id="CarnetConadisId" name="CarnetConadisId"  maxlength="10" value="'.$dato->get_CarnetConadisId().'" placeholder="Ingrese su N° Carnet"  required="required" />
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
                                            <select class="selector"  name="tipodiscapacidad" id="tipodiscapacidad">
                                                '.cargarTipoDiscapacidad($dato->get_fkTipoDiscapacidadTipoDiscapacidadId()).'
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
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>';
return $r;
}
echo cargarformulariodiscapacidadestudiantes($cedula,$periodoacademico->get_periodoacademicoId());
?>