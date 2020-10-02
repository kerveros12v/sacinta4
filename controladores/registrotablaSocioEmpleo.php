<?php
require_once("../Crud/CrudSocioEmpleo.php");
require_once("respuestasgenerales.php");

use Clasesphp\SocioEmpleo;
use Crud\CrudSocioEmpleo;

session_start();

function opcionsocioEmpleo()
{
    try {
        $datos = new SocioEmpleo();
        $crud = new CrudSocioEmpleo();

        $datos->setIdsocioempleo($_POST['id']);
        $datos->setSocioEmpleoregistro(strtoupper($_POST['nom']));
        $datos->setSocioempleoOculto($_POST['eliminar']);
        $datos->setSocioempleoAccion($_POST['actualizar']);
        $datos->setSocioempleofecha(date("Y-m-d"));
        $datos->setSocioempleouser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdsocioempleo(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdsocioempleo());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionsocioEmpleo();
