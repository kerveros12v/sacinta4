<?php
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselectcicloperiodo.php");
require_once("ajaxsselect2.php");
use Crud\CrudPeriodoacademico;
function cargarperiodoacademico(){
    $lista='';
    $crudperiodoaca=new CrudPeriodoacademico();
    $lstperiodoacademico=$crudperiodoaca->mostrar();

    $lista.=
    '<tr>
    <td>
    '.ajaxs_select2().'
    </td>
    <td>
        <input type="text" id="codigoPeriodo" class="camptext1"  name="codigoPeriodo"  required="required"  />
    </td>
    <td>
        <input type="text" id="periodoAcademico"  name="periodoAcademico"  required="required"  />
    </td>
'./*'
    <td>
    <select class="selector"  name="ciclo" id="ciclo">
        '.ciclop(0).'
    </select>
</td>
<td>
    <input type="date" id="fechaInicio" class="campfecha"  name="fechaInicio"  required="required"  />
</td>

<td>
    <input type="text" id="duracionPeriodoAcademico" class="camptext"  name="duracionPeriodoAcademico"  required="required"  />
</td>

<td>
    <input type="text" id="anioPeriodoAcademico" class="camptext2"  name="anioPeriodoAcademico"  required="required"  />
</td>
<td>
    <input type="radio" name="actual" value="1" id="actual">
</td>
<td>
    <input type="button" value="Guardar" id="btnregistro" class="btnunico" onclick="registro()">
</td>
*/'
</tr>';

/*
        foreach($lstperiodoacademico as $p){
            $actual1="";
            if($p->get_actual()==1){$actual1=("checked='checked'");}

                $lista.=
                    '<tr>
                        <td>
                            <input type="hidden" id="periodoacademicoId'.$p->get_periodoacademicoId().'" class="camptext"  name="periodoacademicoId"  required="required" value="'.$p->get_periodoacademicoId().'"  />
                        </td>
                        <td>
                            <input type="text" id="codigoPeriodo'.$p->get_periodoacademicoId().'" class="camptext1"  name="codigoPeriodo"  required="required" value="'.$p->get_codigo().'" />
                        </td>
                        <td>
                            <input type="text" id="periodoAcademico'.$p->get_periodoacademicoId().'"   name="periodoAcademico"  required="required" value="'.$p->get_periodoAcademico().'" />
                        </td>
                        <td>
                        <select class="selector"  name="ciclo" id="ciclo'.$p->get_periodoacademicoId().'">
                            '.ciclop($p->get_ciclo()).'
                        </select>
                        </td>
                        <td>
                            <input type="date" id="fechaInicio'.$p->get_periodoacademicoId().'" class="campfecha"  name="fechaInicio"  required="required" value="'.$p->get_fechaInicio().'" />
                        </td>

                        <td>
                            <input type="text" id="duracionPeriodoAcademico'.$p->get_periodoacademicoId().'" class="camptext"  name="duracionPeriodoAcademico"  required="required" value="'.$p->get_duracionPeriodoAcademico().'" />
                        </td>

                        <td>
                            <input type="text" id="anioPeriodoAcademico'.$p->get_periodoacademicoId().'" class="camptext2"  name="anioPeriodoAcademico"  required="required" value="'.$p->get_anioPeriodoAcademico().'" />
                        </td>
                        <td>
                            <input type="radio" name="actual" value="1" id="actual'.$p->get_periodoacademicoId().' " '.$actual1.'>
                        </td>
                        <td>
                            <div class=enlinea>
                                <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar('.$p->get_periodoacademicoId().')">
                                <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar('.$p->get_periodoacademicoId().')">
                            </div>
                        </td>

                    </tr>';

        }
*/
   return $lista;
}

echo cargarperiodoacademico();
?>