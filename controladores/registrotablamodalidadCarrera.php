<?php

require_once("../Crud/CrudModalidadCarrera.php");
require_once("respuestasgenerales.php");

use Clasesphp\Modalidadcarreras;
use Crud\CrudModalidadcarreras;

session_start();



function opcionmodalidadCarrera()
{
    try {
        $datos = new Modalidadcarreras();
        $crud = new CrudModalidadcarreras();

        $datos->set_modalidadCarreraId($_POST['id']);
        $datos->set_modalidadCarrera(strtoupper($_POST['nom']));
        $datos->set_modalidadcarreracodigo(trim($_POST['cod']));
        $datos->set_modalidadcarreraOculto($_POST['eliminar']);
        $datos->set_modalidadcarreraAccion($_POST['actualizar']);
        $datos->set_modalidadcarrerafecha(date("Y-m-d"));
        $datos->set_modalidadcarrerauser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_modalidadCarreraId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_modalidadCarreraId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionmodalidadCarrera();
