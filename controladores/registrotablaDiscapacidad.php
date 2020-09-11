<?php
require_once("../Crud/CrudDiscapacidad.php");
require_once("respuestasgenerales.php");


use Clasesphp\Discapacidad;
use Crud\CrudDiscapacidad;

session_start();



function opcionDiscapacidad()
{
    try {
        $datos = new Discapacidad();
        $crud = new CrudDiscapacidad();

        $datos->setDiscapacidadId($_POST['id']);
        $datos->setDiscapacidad(strtoupper($_POST['nom']));
        $datos->setDiscapacidadcodigo($_POST['cod']);
        $datos->setDiscapacidadbool($_POST['bool']);
        $datos->setDiscapacidadOculto($_POST['eliminar']);
        $datos->setDiscapacidadAccion($_POST['actualizar']);
        $datos->setDiscapacidadfecha(date("Y-m-d"));
        $datos->setDiscapacidaduser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setDiscapacidadId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getDiscapacidadId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionDiscapacidad();
