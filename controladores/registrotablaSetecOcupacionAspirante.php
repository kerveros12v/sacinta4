<?php
require_once("../Crud/CrudSetecOcupacion.php");
require_once("respuestasgenerales.php");

session_start();

use Clasesphp\SetecOcupacion;
use Crud\CrudSetecOcupacion;

function opcionSetecOcupacion()
{
    try {
        $datos = new SetecOcupacion();
        $crud = new CrudSetecOcupacion();

        $datos->setSetecOcupacionId($_POST['id']);
        $datos->setFkaspirantesetec(strtoupper($_POST['fkaspirantesetec']));
        $datos->setFktipoOcupacion($_POST['fktipoOcupacion']);
        $datos->setSetecocupacionAsignada(strtoupper($_POST['setecocupacionAsignada']));
        $datos->setFkestadoOcupacional($_POST['fkestadoOcupacional']);
        $datos->setHorasTrabajadasxSemana($_POST['horasTrabajadasxSemana']);
        $datos->setFkareadepartamento(strtoupper($_POST['fkareadepartamento']));
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setSetecOcupacionId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getSetecOcupacionId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSetecOcupacion();
