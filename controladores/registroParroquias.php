<?php
require_once("../clasesphp/Parroquia.php");
require_once('../Crud/CrudParroquia.php');
require_once("respuestasgenerales.php");

use Clasesphp\Parroquia;
use Crud\CrudParroquia;

session_start();
function opcionparroquia()
{
    try {
        $parroquia = new Parroquia();
        $crudparroquia = new CrudParroquia();
        $parroquia->setIdparroquias(trim($_POST['id']));
        $parroquia->setParroquiascodigo(trim($_POST['codigo']));
        $parroquia->setParroquia(strtoupper(trim($_POST['parroquia'])));
        $parroquia->setParroquiasCanton($_POST['canton']);
        $parroquia->setParroquiaAccion($_POST['actualizar']);
        $parroquia->setParroquiaOculto($_POST['eliminar']);
        $parroquia->setParroquiasUsuario($_SESSION['tipouser'] . $_SESSION['user']);
        $parroquia->setParroquiafecha(date("Y-m-d"));

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $parroquia->setIdparroquias(null);
                $crudparroquia->insertar($parroquia);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crudparroquia->actualizar($parroquia);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crudparroquia->eliminar($parroquia->getIdparroquias());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return ($e->getMessage());
    }
}


echo opcionparroquia();
