<?php

require_once("../Crud/CrudTipoCarreras.php");
require_once("respuestasgenerales.php");

use Clasesphp\Tipocarreras;
use Crud\CrudTipoCarreras;

session_start();



function opcionTipocarrera()
{
    try {
        $datos = new Tipocarreras();
        $crud = new CrudTipoCarreras();

        $datos->set_tipoCarrerasId($_POST['id']);
        $datos->set_tipoCarreras(strtoupper($_POST['nom']));
        $datos->set_tipocarrerascodigo($_POST['cod']);
        $datos->set_tipocarrerasOculto($_POST['eliminar']);
        $datos->set_tipocarrerasAccion($_POST['actualizar']);
        $datos->set_tipocarrerasfecha(date("Y-m-d"));
        $datos->set_tipocarrerasuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_tipoCarrerasId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_tipoCarrerasId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipocarrera();
