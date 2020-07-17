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

        $datos->set_discapacidadId($_POST['id']);
        $datos->set_discapacidad(strtoupper($_POST['nom']));
        $datos->set_discapacidadcodigo($_POST['cod']);
        $datos->set_discapacidadOculto($_POST['eliminar']);
        $datos->set_discapacidadAccion($_POST['actualizar']);
        $datos->set_discapacidadfecha(date("Y-m-d"));
        $datos->set_discapacidaduser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_discapacidadId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_discapacidadId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionDiscapacidad();
