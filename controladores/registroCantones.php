<?php
require_once("../Crud/CrudCanton.php");
require_once("respuestasgenerales.php");

use  Crud\CrudCantones;
use  Clasesphp\Cantones;

session_start();

function opcioncanton()
{
    try {
        $dato = new Cantones();
        $crud = new CrudCantones();
        $dato->setCantonId($_POST['id']);
        $dato->setCantoncodigo($_POST['cod']);
        $dato->setCanton(strtoupper($_POST['nom']));
        $dato->setCantonprovincia($_POST['provincia']);
        $dato->setCantonOculto($_POST['eliminar']);
        $dato->setCantonAccion($_POST['actualizar']);
        $dato->setCantonfecha(date("Y-m-d"));
        $dato->setCantonuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setCantonId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getCantonId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return "¡Seleccione primero una Provincia!";
    }
}
echo opcioncanton();
