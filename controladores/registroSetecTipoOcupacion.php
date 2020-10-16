<?php

require_once("../Crud/CrudSetecTipoOcupacion.php");
require_once("respuestasgenerales.php");

use Clasesphp\SetecTipoOcupacion;
use Crud\CrudSetecTipoOcupacion;

session_start();
function opcionSetecTipoOcupacion()
{
    $dato = new SetecTipoOcupacion();
    $crud = new CrudSetecTipoOcupacion();
    $dato->setIdsetecTipoOcupacion($_POST['id']);
    $dato->setTipoOcupacion(strtoupper($_POST['nom']));
    $dato->setSetectipoocupacioncodigo($_POST['cod']);
    $dato->setSetectipoocupacionoculto($_POST['eliminar']);
    $dato->setSetectipoocupacionaccion($_POST['actualizar']);
    $dato->setSetectipoocupacionfecha(date("Y-m-d"));
    $dato->setSetectipoocupacionuser($_SESSION['tipouser'] . $_SESSION['user']);

    $opcion = $_POST['opt'];
    if ($opcion == 1) {
        $dato->setIdsetecTipoOcupacion(null);
        $crud->insertar($dato);
        return (guardarR());
    }
    if ($opcion == 2) {
        $crud->actualizar($dato);
        return (actualizarR());
    }
    if ($opcion == 0) {
        $crud->eliminar($dato->getIdsetecTipoOcupacion());
        return (eliminarR());
    }
}
echo opcionSetecTipoOcupacion();
