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

        $datos->setModalidadCarreraId($_POST['id']);
        $datos->setModalidadCarrera(strtoupper($_POST['nom']));
        $datos->setModalidadcarreracodigo(trim($_POST['cod']));
        $datos->setModalidadcarreraOculto($_POST['eliminar']);
        $datos->setModalidadcarreraAccion($_POST['actualizar']);
        $datos->setModalidadcarrerafecha(date("Y-m-d"));
        $datos->setModalidadcarrerauser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setModalidadCarreraId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getModalidadCarreraId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionmodalidadCarrera();
