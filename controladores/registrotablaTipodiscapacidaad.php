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

        $datos->set_tipoDiscapacidadid($_POST['id']);
        $datos->set_tipoDiscapacidad(strtoupper($_POST['nom']));
        $datos->set_tdcodigo($_POST['cod']);
        $datos->set_tdOculto($_POST['eliminar']);
        $datos->set_tdAccion($_POST['actualizar']);
        $datos->set_tdfecha(date("Y-m-d"));
        $datos->set_tduser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_tipoDiscapacidadid(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_tipoDiscapacidadid());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
