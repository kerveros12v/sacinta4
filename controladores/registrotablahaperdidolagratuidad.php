<?php
require_once("../Crud/CrudHaperdidoLaGratuidad.php");
require_once("respuestasgenerales.php");


use Clasesphp\Haperdidolagratuidad;
use Crud\CrudHaperdidoLaGratuidad;

session_start();



function opciongratuidad()
{
    try {
        $datos = new Haperdidolagratuidad();
        $crud = new CrudHaperdidoLaGratuidad();

        $datos->set_HaPerdidoLaGratuidadId($_POST['id']);
        $datos->set_haPerdidoLaGratuidad(strtoupper($_POST['nom']));
        $datos->set_haperdidolagratuidadcodigo($_POST['cod']);
        $datos->set_haperdidolagratuidadOculto($_POST['eliminar']);
        $datos->set_haperdidolagratuidadAccion($_POST['actualizar']);
        $datos->set_haperdidolagratuidadfecha(date("Y-m-d"));
        $datos->set_haperdidolagratuidaduser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_HaPerdidoLaGratuidadId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_HaPerdidoLaGratuidadId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opciongratuidad();
