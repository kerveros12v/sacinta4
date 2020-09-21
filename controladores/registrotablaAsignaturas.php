<?php
require_once("../Crud/CrudAsignaturas.php");
require_once("respuestasgenerales.php");

use Clasesphp\Asignaturas;
use Crud\CrudAsignaturas;

session_start();

function opcionAsignatura()
{
    try {
        $datos = new Asignaturas();
        $crud = new CrudAsignaturas();

        $datos->setAsignaturasId($_POST['id']);
        $datos->setMateria(strtoupper($_POST['nom']));
        $datos->setCodigoMateria($_POST['cod']);
        $datos->setAsignaturasOculto($_POST['eliminar']);
        $datos->setAsignaturasAccion($_POST['actualizar']);
        $datos->setAsignaturasfecha(date("Y-m-d"));
        $datos->setAsignaturasuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setAsignaturasId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getAsignaturasId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionAsignatura();
