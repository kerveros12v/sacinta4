<?php
require_once("../clasesphp/Discapacidadesestudiantes.php");
require_once("../Crud/CrudDiscapacidadesestudiantes.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectdiscapacidad.php");
require_once("ajaxsselecttipodiscapacidad.php");
require_once("ajaxsselect2.php");

use Clasesphp\Discapacidadesestudiantes;
use Crud\CrudDiscapacidadesestudiantes;
use Crud\CrudPeriodoacademico;

session_start();

$crudperiodoaca=new CrudPeriodoacademico();
$cedula=isset($_SESSION['campbuscarest'])?$_SESSION['campbuscarest']:"";
$periodo1=$crudperiodoaca->obtenerPeriodoAcademicoActual();
function cargarformulariodiscapacidadestudiantes($cedula,$periodo){
    $crud=new CrudDiscapacidadesestudiantes();
    $dato=new Discapacidadesestudiantes();
    if($crud->existe($cedula,$periodo)==1){
        $dato=$crud->obtenerdiscapacidadesestudiantes($cedula,$periodo);
        }

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
                                            <input type="text" id="CarnetConadisId" name="CarnetConadisId"  maxlength="10" class="light camptext1" value="'.$dato->get_CarnetConadisId().'" placeholder="N° Carnet"  required="required" />
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
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                        <input type="text"  name="porcentajeDiscapacidad" id="porcentajeDiscapacidad" class="light camptext1" value="'.$dato->get_porcentajeDiscapacidad().'" placeholder="% discapacidad"  required="required" />


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
try{

    echo cargarformulariodiscapacidadestudiantes($cedula,isset($_SESSION['campbuscarperiodo'])?$_SESSION['campbuscarperiodo']:$periodo1->get_periodoacademicoId());
}
catch(\Exception $e){
echo "<script>console.log('".$e."');</script>";
}
