<?php

require_once("../Crud/CrudContactosemergencia.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectparentesco.php");
require_once("ajaxsselect2.php");

session_start();
$crud1 = new \Crud\CrudPeriodoacademico();
$cedula = isset($_SESSION['campbuscarest']) ? $_SESSION['campbuscarest'] : "";
$periodo = isset($_SESSION['periodo']) ? $periodo = $crudperiodoaca->obtenerPeriodoacademico($_SESSION['periodo']) : $periodo = $crud1->obtenerPeriodoAcademicoActual();

function cargarContactoEmergencia($cedula, $periodo)
{
    $crud = new \Crud\CrudContactosemergencia();
    $dato = $crud->obtenerContactoEmergencia($cedula, $periodo);
    $r = ajaxs_select2();
    $r .= '
    <td>
        <table>
            <tr class="tabtitulos">
                <th>
                    CONTACTO DE EMERGENCIA
                </th>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                               <table class="fulltext">
                                    <tr>
                                        <td>
                                            <input type="text" name="nomcontactoemergen" id="nomcontactoemergen" class="fulltext" required="required" value="' . $dato->getNombreContactoEmergencia() . '"/>
                                        </td>
                                    </tr>
                                    <tr>
      			                        <th>
                                            <label class="etiqueta1">NOMBRE DE CONTACTO DE EMERGENCIA</label>
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
                                                        <input type="text" name="numcontacto" id="numcontacto" value="' . $dato->getNumeroContactosEmergencia() . '"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="etiqueta1"> NUMERO DE CONTACTO DE EMERGENCIA</label>
                                                    </th>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <select class="selector"  name="parentesco1" id="parentesco1">
                                                            ' . cargarparentesco($dato->getParentescosIdParentescos()) . '
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <label class="etiqueta1">PARENTESCO </label>
                                                    </th>
                                                </tr>
                                            </table>
                                        </td>
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
echo cargarContactoEmergencia($cedula, $periodo->get_periodoacademicoId());
