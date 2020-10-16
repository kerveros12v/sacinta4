<?php
require_once("../Crud/CrudSetecestadoCertificacion.php");
require_once("respuestasgenerales.php");

use Clasesphp\Setecestadoscertificacion;
use Crud\CrudSetecestadoscertificacion;

session_start();

function opcionSetecestadoscertificacion()
{
    try {
        $datos = new Setecestadoscertificacion();
        $crud = new CrudSetecestadoscertificacion();

        $datos->setIdsec($_POST['id']);
        $datos->setSecdetalle(strtoupper($_POST['nom']));
        $datos->setSeccodigo($_POST['cod']);
        $datos->setSecOculto($_POST['eliminar']);
        $datos->setSecAccion($_POST['actualizar']);
        $datos->setSecFecha(date("Y-m-d"));
        $datos->setSecUser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdsec(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdsec());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSetecestadoscertificacion();
