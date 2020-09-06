<?php

require_once("../Crud/CrudTipoBachillerato.php");
require_once("respuestasgenerales.php");

use Clasesphp\Tiposbacillerato;
use Crud\CrudTipoBachillerato;

session_start();


function opcionTipobachillerato()
{
    try {
        $datos = new Tiposbacillerato();
        $crud = new CrudTipoBachillerato();

        $datos->setTiposBacilleratoId($_POST['id']);
        $datos->setTipoBacillerato(strtoupper($_POST['nom']));
        $datos->setTiposbacilleratocodigo($_POST['cod']);
        $datos->setTiposbacilleratoOculto($_POST['eliminar']);
        $datos->setTiposbacilleratoAccion($_POST['actualizar']);
        $datos->setTiposbacilleratofecha(date("Y-m-d"));
        $datos->setTiposbacilleratouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTiposBacilleratoId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTiposBacilleratoId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipobachillerato();
