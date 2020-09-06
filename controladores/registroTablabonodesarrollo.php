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

        $datos->setBonoDesarrolloId($_POST['id']);
        $datos->setBonoDesarrollo(strtoupper($_POST['nom']));
        $datos->setBonodesarrollocodigo($_POST['cod']);
        $datos->setBonodesarrolloOculto($_POST['eliminar']);
        $datos->setBonodesarrolloAccion($_POST['actualizar']);
        $datos->setBonodesarrollofecha(date("Y-m-d"));
        $datos->setBonodesarrollouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setBonoDesarrolloId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getBonoDesarrolloId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionbonodesarrollo();
