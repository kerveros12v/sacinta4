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

        $datos->set_estadoCivilId($_POST['id']);
        $datos->set_estadoCivil($_POST['nom']);
        $datos->set_estadoscivilcodigo($_POST['cod']);
        $datos->set_estadoCivilOculto($_POST['eliminar']);
        $datos->set_estadoCivilAccion($_POST['actualizar']);
        $datos->set_estadoCivilfecha(date("Y-m-d"));
        $datos->set_estadoCiviluser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_estadoCivilId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_estadoCivilId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionestadoCivil();
