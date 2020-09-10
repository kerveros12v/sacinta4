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

        $datos->setNivelFormacionId($_POST['id']);
        $datos->setNivelFormacion($_POST['nom']);
        $datos->setCodigonivelFormacion($_POST['cod']);
        $datos->setNivelInstruccion($_POST['nivel']);
        $datos->setNivelformacionOculto($_POST['eliminar']);
        $datos->setNivelformacionAccion($_POST['actualizar']);
        $datos->setNivelformacionfecha(date("Y-m-d"));
        $datos->setNivelformacionuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setNivelFormacionId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getNivelFormacionId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionnivelFormacion();
