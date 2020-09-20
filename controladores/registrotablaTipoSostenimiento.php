<?php
require_once("../Crud/CrudTipoSostenimiento.php");
require_once("respuestasgenerales.php");

session_start();

use Clasesphp\Sostenimientos;
use Crud\CrudTipoSostenimientos;

function opcionTiposostenimiento()
{
    try {
        $datos = new Sostenimientos();
        $crud = new CrudTipoSostenimientos();

        $datos->setIdSostenimiento($_POST['id']);
        $datos->setSostenimiento(strtoupper($_POST['nom']));
        $datos->setSostenimientoscodigo($_POST['cod']);
        $datos->setSostenimientosOculto($_POST['eliminar']);
        $datos->setSostenimientosAccion($_POST['actualizar']);
        $datos->setSostenimientosfecha(date("Y-m-d"));
        $datos->setSostenimientosuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdSostenimiento(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdSostenimiento());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTiposostenimiento();
