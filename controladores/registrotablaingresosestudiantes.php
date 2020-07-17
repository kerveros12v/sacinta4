<?php
require_once("../Crud/CrudIngresosestudiante.php");
require_once("respuestasgenerales.php");

use Clasesphp\Ingresosestudiante;
use Crud\CrudIngresosestudiante;

session_start();



function opcioningresosestudiantes()
{
    try {
        $datos = new Ingresosestudiante();
        $crud = new CrudIngresosestudiante();

        $datos->set_ingresosestudianteId($_POST['id']);
        $datos->set_ingresosestudiante($_POST['nom']);
        $datos->set_ingresosestudiantecodigo($_POST['cod']);
        $datos->set_ingresosestudianteOculto($_POST['eliminar']);
        $datos->set_ingresosestudianteAccion($_POST['actualizar']);
        $datos->set_ingresosestudiantefecha(date("Y-m-d"));
        $datos->set_ingresosestudianteuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_ingresosestudianteId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_ingresosestudianteId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcioningresosestudiantes();
