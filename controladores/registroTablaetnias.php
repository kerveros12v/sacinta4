<?php
require_once("../Crud/CrudEtnia.php");
require_once("respuestasgenerales.php");
session_start();
use Clasesphp\Etnias;
use Crud\CrudEtnia;
function opcionetnias()
{
    try {
        $dato = new Etnias();
        $crud = new CrudEtnia();
        $dato->set_etniaId($_POST['id']);
        $dato->set_etniascodigo($_POST['cod']);
        $dato->set_etnia(strtoupper($_POST['nom']));
        $dato->set_etniasOculto($_POST['eliminar']);
        $dato->set_etniasAccion($_POST['actualizar']);
        $dato->set_etniasfecha(date("Y-m-d"));
        $dato->set_etniasuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $dato->set_etniaId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion ==optEliminar()) {
                $crud->eliminar($dato->get_etniaId());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionetnias();
