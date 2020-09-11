<?php

require_once("../Crud/CrudTipoDiscapacidad.php");
require_once("respuestasgenerales.php");

use Clasesphp\Tipodiscapacidad;
use Crud\CrudTipoDiscapacidad;

session_start();



function opcionTipodocumento()
{
    try {
        $datos = new Tipodiscapacidad();
        $crud = new CrudTipoDiscapacidad();

        $datos->setTipoDiscapacidadid($_POST['id']);
        $datos->setTipoDiscapacidad(strtoupper($_POST['nom']));
        $datos->setTdcodigo($_POST['cod']);
        $datos->setTipodiscapacidadbool($_POST['tipodiscapacidadbool']);
        $datos->setTdOculto($_POST['eliminar']);
        $datos->setTdAccion($_POST['actualizar']);
        $datos->setTdfecha(date("Y-m-d"));
        $datos->setTduser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTipoDiscapacidadid(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTipoDiscapacidadid());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
