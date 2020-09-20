<?php
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectcicloperiodo.php");
require_once("ajaxsselect2.php");

use Crud\CrudPeriodoacademico;

function cargarperiodoacademico()
{
    $lista = '';
    $crudperiodoaca = new CrudPeriodoacademico();
    $lstperiodoacademico = $crudperiodoaca->mostrar();
    $lista .=
        '<tr>
                 <td>
                    <input type="text" id="codigoPeriodo" class="camptext1"  name="codigoPeriodo"  required="required" value="" />
                </td>

                <td>
                <select  name="ciclo" id="ciclo">
                    ' . ciclop(0) . '
                </select>
                </td>
                <td>
                    <input type="date" id="fechaInicio" class="campfecha"  name="fechaInicio"  required="required" value="" />
                </td>

                <td>
                    <input type="date" id="fechafin" class="campfecha"  name="fechafin"  required="required" value="" />
                </td>
                <td>
                <input type="text" id="periodoAcademico" class="camptext1"  name="periodoAcademico"  required="required" value="" />
                </td>
                <td>
                    <input type="text" id="observaciones"   name="observaciones"  required="required" value="" />
                </td>
                <td>
                    <input type="radio" name="actual" value="1" id="actual">
                </td>
                <td>
                    <div class=enlinea>
                    <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
                    </div>
                </td>

            </tr>';

    foreach ($lstperiodoacademico as $p) {
        $actual1 = "";
        if ($p->getActual() == 1) {
            $actual1 = ("checked='checked'");
        }

        $lista .=
            '<tr>
                         <td>
                            <input type="text" id="codigoPeriodo' . $p->getPeriodoacademicoId() . '" class="camptext1"  name="codigoPeriodo' . $p->getPeriodoacademicoId() . '"  required="required" value="' . $p->getCodigoPeriodo() . '" />
                        </td>

                        <td>
                        <select   name="ciclo" id="ciclo' . $p->getPeriodoacademicoId() . '">
                            ' . ciclop($p->getCicloperiodoIdcicloperiodo()) . '
                        </select>
                        </td>
                        <td>
                            <input type="date" id="fechaInicio' . $p->getPeriodoacademicoId() . '" class="campfecha"  name="fechaInicio' . $p->getPeriodoacademicoId() . '"  required="required" value="' . $p->getFechaInicio() . '" />
                        </td>

                        <td>
                            <input type="date" id="fechafin' . $p->getPeriodoacademicoId() . '" class="campfecha" name="fechafin' . $p->getPeriodoacademicoId() . '"  required="required" value="' . $p->getfechafin() . '" />
                        </td>
                        <td>
                        <input type="text" id="periodoAcademico' . $p->getPeriodoacademicoId() . '"  class="camptext1" name="periodoAcademico' . $p->getPeriodoacademicoId() . '"  required="required" value="' . $p->getPeriodoAcademico() . '" />
                        </td>
                        <td>
                            <input type="text" id="observaciones' . $p->getPeriodoacademicoId() . '"   name="observaciones' . $p->getPeriodoacademicoId() . '"  required="required" value="' . $p->getobservaciones() . '" />
                        </td>
                        <td>
                            <input type="radio" name="actual" value="1" id="actual' . $p->getPeriodoacademicoId() . ' " ' . $actual1 . '>
                        </td>
                        <td>
                            <div class=enlinea>
                                <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $p->getPeriodoacademicoId() . ')">
                                <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $p->getPeriodoacademicoId() . ')">
                            </div>
                        </td>

                    </tr>';
    }

    return $lista;
}

echo cargarperiodoacademico();
