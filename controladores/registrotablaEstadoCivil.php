<?php
require_once("../Crud/CrudEstadoCivil.php");
require_once("respuestasgenerales.php");

use Clasesphp\Estadosciviles;
use Crud\CrudEStadoCivil;

session_start();

function opcionestadoCivil()
{
    try {
        $datos = new Estadosciviles();
        $crud = new CrudEStadoCivil();

        $datos->setEstadoCivilId($_POST['id']);
        $datos->setEstadoCivil(strtoupper($_POST['nom']));
        $datos->setEstadoscivilcodigo($_POST['cod']);
        $datos->setEstadoCivilOculto($_POST['eliminar']);
        $datos->setEstadoCivilAccion($_POST['actualizar']);
        $datos->setEstadoCivilfecha(date("Y-m-d"));
        $datos->setEstadoCiviluser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setEstadoCivilId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getEstadoCivilId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionestadoCivil();
