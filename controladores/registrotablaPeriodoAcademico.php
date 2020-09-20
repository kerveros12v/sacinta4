<?php
require_once("../Crud/CrudPeriodoacademico.php");
require_once("respuestasgenerales.php");

use Clasesphp\Periodoacademico;
use Crud\CrudPeriodoacademico;

session_start();

function opcionPeriodoAcademico()
{
    try {
        $datos = new Periodoacademico();
        $crud = new CrudPeriodoacademico();

        $datos->setPeriodoacademicoId($_POST['periodoacademicoId']);
        $datos->setPeriodoAcademico(strtoupper($_POST['periodoAcademico']));
        $datos->setCodigoPeriodo($_POST['codigoPeriodo']);
        $datos->setCicloperiodoIdcicloperiodo($_POST['ciclo']);
        $datos->setFechaInicio($_POST['fechaInicio']);
        $datos->setfechafin($_POST['fechafin']);
        $datos->setobservaciones($_POST['observaciones']);
        $datos->setActual($_POST['actual']);
        $datos->setPeriodoacademicoOculto($_POST['eliminar']);
        $datos->setPeriodoacademicoAccion($_POST['actualizar']);
        $datos->setPeriodoacademicofecha(date("Y-m-d"));
        $datos->setPeriodoacademicouser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                if ($datos->getActual() == 1) {
                    $periodoacademicoactual1 = $crud->obtenerPeriodoAcademicoActual();
                    $periodoacademicoactual1->setPeriodoacademicoAccion(1);
                    $periodoacademicoactual1->setActual(0);
                    $crud->actualizar($periodoacademicoactual1);
                }

                $datos->setPeriodoacademicoId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                if ($datos->getActual() == 1) {
                    $periodoacademicoactual1 = $crud->obtenerPeriodoAcademicoActual();
                    $periodoacademicoactual1->setPeriodoacademicoAccion(1);
                    $periodoacademicoactual1->setActual(0);
                    $crud->actualizar($periodoacademicoactual1);
                }
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getPeriodoacademicoId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionPeriodoAcademico();
