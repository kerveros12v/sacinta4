<?php
require_once("../Crud/CrudMatriculacion.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselect2.php");

use Crud\CrudMatriculas;
use Crud\CrudPeriodoacademico;

session_start();
$crud1 = new CrudPeriodoacademico();
$cedula = isset($_SESSION['est']) ? $_SESSION['est'] : "";
$periodo = isset($_SESSION['periodo']) ? $crud1->obtenerPeriodoacademico($_SESSION['periodo']) : $crud1->obtenerPeriodoAcademicoActual();
function cargardatosMatricula($cedula, $periodo)
{
    $crud = new CrudMatriculas();
    $dato = $crud->obtenerMatricula($cedula, $periodo);
    $r = ajaxs_select2();
    if ($dato->getCodigoMatricula() != "" && $dato->getCodigoMatricula() != null) {
        $r .= '
    <td>
    <table class="tabtitulos">
        <tr>
            <td>
                Codigo de Matricula:
            </td>
            <td>
                <input type="text" class="codmatricula" id="codmatricula" name="codmatricula"  readonly="readonly" value="' . $dato->getCodigoMatricula() . '" />
            </td>
        </tr>
    </table>
</td>';
    }
    return $r;
}
echo cargardatosMatricula($cedula, $periodo->getPeriodoacademicoId());
