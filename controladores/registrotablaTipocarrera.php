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

        $datos->setTipoCarrerasId($_POST['id']);
        $datos->setTipoCarreras(strtoupper($_POST['nom']));
        $datos->setTipocarrerascodigo($_POST['cod']);
        $datos->setTipocarrerasOculto($_POST['eliminar']);
        $datos->setTipocarrerasAccion($_POST['actualizar']);
        $datos->setTipocarrerasfecha(date("Y-m-d"));
        $datos->setTipocarrerasuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTipoCarrerasId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTipoCarrerasId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipocarrera();
