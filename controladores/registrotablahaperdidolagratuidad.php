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

        $datos->setHaPerdidoLaGratuidadId($_POST['id']);
        $datos->setHaPerdidoLaGratuidad(strtoupper($_POST['nom']));
        $datos->setHaperdidolagratuidadcodigo($_POST['cod']);
        $datos->setHaperdidolagratuidadOculto($_POST['eliminar']);
        $datos->setHaperdidolagratuidadAccion($_POST['actualizar']);
        $datos->setHaperdidolagratuidadfecha(date("Y-m-d"));
        $datos->setHaperdidolagratuidaduser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setHaPerdidoLaGratuidadId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getHaPerdidoLaGratuidadId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opciongratuidad();
