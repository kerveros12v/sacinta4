<?php


require_once("../Crud/CrudSetecEstadoOcupacional.php");
require_once("respuestasgenerales.php");

use Clasesphp\SetecEstadoOcupacional;
use Crud\CrudSetecEstadoOcupacional;
//
session_start();
function opcionSetecEstadoOcupacional()
{
    $dato = new SetecEstadoOcupacional();
    $crud = new CrudSetecEstadoOcupacional();
    $dato->setSetecEstadoOcupacionalId($_POST['id']);
    $dato->setEstadoOcupacional(strtoupper($_POST['nom']));
    $dato->setSetecestadoocupacionalcodigo($_POST['cod']);
    $dato->setSeoOculto($_POST['eliminar']);
    $dato->setSeoAccion($_POST['actualizar']);
    $dato->setSeofecha(date("Y-m-d"));
    $dato->setSeouser($_SESSION['tipouser'] . $_SESSION['user']);

    $opcion = $_POST['opt'];
    if ($opcion == 1) {
        $dato->setSetecEstadoOcupacionalId(null);
        $crud->insertar($dato);
        return (guardarR());
    }
    if ($opcion == 2) {
        $crud->actualizar($dato);
        return (actualizarR());
    }
    if ($opcion == 0) {
        $crud->eliminar($dato->getSetecEstadoOcupacionalId());
        return (eliminarR());
    }
}
try {
    echo opcionSetecEstadoOcupacional();
} catch (\Throwable $e) {
    echo "Los campos no han sido completados";
}
