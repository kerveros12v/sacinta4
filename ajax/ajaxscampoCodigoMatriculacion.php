<?php
require_once("../Crud/CrudMatriculacion.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("ajaxsselect2.php");

use Crud\CrudMatriculas;
use Crud\CrudPeriodoacademico;

session_start();
$crud1 = new CrudPeriodoacademico();
$cedula = $_SESSION['campbuscarest'];
$periodo = $_SESSION['campbuscarperiodo'];
function cargardatosMatricula($cedula, $periodo)
{
    $crud = new CrudMatriculas();
    $dato = $crud->obtenerCodigoMatricula($cedula, $periodo);
    $r = ajaxs_select2();

    $r .= '
    <td>
    <table class="tabtitulos">
        <tr>
            <td>
                Codigo de Matricula:
            </td>
            <td>
                <input type="text" class="codmatricula" id="codmatricula" name="codmatricula"  readonly="readonly" value="' . $dato . '" />
            </td>
        </tr>
    </table>
</td>';
    return $r;
}
try {
    echo cargardatosMatricula($cedula, $periodo);
} catch (\Throwable $e) {
    echo $e;
}
