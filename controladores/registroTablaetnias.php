<?php
require_once("../Crud/CrudEtnia.php");
require_once("respuestasgenerales.php");

use Clasesphp\Etnias;
use Crud\CrudEtnia;

session_start();
function opcionetnias()
{
    try {
        $dato = new Etnias();
        $crud = new CrudEtnia();
        $dato->setEtniaId($_POST['id']);
        $dato->setEtniascodigo($_POST['cod']);
        $dato->setEtnia(strtoupper($_POST['nom']));
        $dato->setEtniasOculto($_POST['eliminar']);
        $dato->setEtniasAccion($_POST['actualizar']);
        $dato->setEtniasfecha(date("Y-m-d"));
        $dato->setEtniasuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setEtniaId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getEtniaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionetnias();
