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

        $datos->set_tiposBacilleratoId($_POST['id']);
        $datos->set_tipoBacillerato($_POST['nom']);
        $datos->set_tiposbacilleratocodigo($_POST['cod']);
        $datos->set_tiposbacilleratoOculto($_POST['eliminar']);
        $datos->set_tiposbacilleratoAccion($_POST['actualizar']);
        $datos->set_tiposbacilleratofecha(date("Y-m-d"));
        $datos->set_tiposbacilleratouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_tiposBacilleratoId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_tiposBacilleratoId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipobachillerato();
