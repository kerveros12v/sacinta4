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
        $dato->set_cantonId($_POST['id']);
        $dato->set_cantoncodigo($_POST['cod']);
        $dato->set_canton(strtoupper($_POST['nom']));
        $dato->set_cantonprovincia($_POST['provincia']);
        $dato->set_cantonOculto($_POST['eliminar']);
        $dato->set_cantonAccion($_POST['actualizar']);
        $dato->set_cantonfecha(date("Y-m-d"));
        $dato->set_cantonuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $dato->set_cantonId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion ==optEliminar()) {
                $crud->eliminar($dato->get_cantonId());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcioncanton();
