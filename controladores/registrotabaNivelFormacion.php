<?php
require_once("../Crud/Crudnivelformacion.php");
require_once("respuestasgenerales.php");

use Clasesphp\Nivelformacion;
use Crud\CrudNivelformacion;

session_start();

function opcionnivelFormacion()
{
    try {
        $datos = new Nivelformacion();
        $crud = new CrudNivelformacion();

        $datos->set_nivelFormacionId($_POST['id']);
        $datos->set_nivelFormacion($_POST['nom']);
        $datos->set_codigonivelFormacion($_POST['cod']);
        $datos->set_nivelInstruccion($_POST['nivel']);
        $datos->set_nivelformacionOculto($_POST['eliminar']);
        $datos->set_nivelformacionAccion($_POST['actualizar']);
        $datos->set_nivelformacionfecha(date("Y-m-d"));
        $datos->set_nivelformacionuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_nivelFormacionId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_nivelFormacionId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionnivelFormacion();
