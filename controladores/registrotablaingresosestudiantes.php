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

        $datos->setIngresosestudianteId($_POST['id']);
        $datos->setIngresosestudiante(strtoupper($_POST['nom']));
        $datos->setIngresosestudiantecodigo($_POST['cod']);
        $datos->setIngresosestudianteOculto($_POST['eliminar']);
        $datos->setIngresosestudianteAccion($_POST['actualizar']);
        $datos->setIngresosestudiantefecha(date("Y-m-d"));
        $datos->setIngresosestudianteuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIngresosestudianteId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIngresosestudianteId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcioningresosestudiantes();
