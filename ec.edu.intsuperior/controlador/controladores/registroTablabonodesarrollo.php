<?php

require_once("../Crud/CrudBonodesarrollo.php");
require_once("respuestasgenerales.php");

use Clasesphp\Bonodesarrollo;
use Crud\CrudBonodesarrollo;

session_start();


function opcionbonodesarrollo()
{
    try {
        $datos = new Bonodesarrollo();
        $crud = new CrudBonodesarrollo();

        $datos->set_bonoDesarrolloId($_POST['id']);
        $datos->set_bonoDesarrollo(strtoupper($_POST['nom']));
        $datos->set_bonodesarrollocodigo($_POST['cod']);
        $datos->set_bonodesarrolloOculto($_POST['eliminar']);
        $datos->set_bonodesarrolloAccion($_POST['actualizar']);
        $datos->set_bonodesarrollofecha(date("Y-m-d"));
        $datos->set_bonodesarrollouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_bonoDesarrolloId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_bonoDesarrolloId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionbonodesarrollo();
