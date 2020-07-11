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
        $parroquia->set_idparroquias(trim($_POST['id']));
        $parroquia->set_parroquiascodigo(trim($_POST['codigo']));
        $parroquia->set_parroquia(strtoupper(trim($_POST['parroquia'])));
        $parroquia->set_parroquiasCanton($_POST['canton']);
        $parroquia->set_parroquiaAccion($_POST['actualizar']);
        $parroquia->set_parroquiaOculto($_POST['eliminar']);
        $parroquia->set_parroquiasUsuario($_SESSION['tipouser'] . $_SESSION['user']);
        $parroquia->set_parroquiafecha(date("Y-m-d"));

        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $parroquia->set_idparroquias(null);
                $crudparroquia->insertar($parroquia);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crudparroquia->actualizar($parroquia);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crudparroquia->eliminar($parroquia->get_idparroquias());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());
    } catch (Exception $e) {
        return ($e->getMessage());
    }
}


echo opcionparroquia();
