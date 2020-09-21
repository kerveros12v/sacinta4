<?php
require_once("../Crud/CrudCarreras.php");
require_once("respuestasgenerales.php");

use Clasesphp\Carreras;
use Crud\CrudCarreras;

session_start();

function opcioncarreras()
{
    try {
        $dato = new Carreras();
        $crud = new CrudCarreras();
        $dato->setCarrerasId($_POST['id']);
        $dato->setCodigoCarreras($_POST['cod']);
        $dato->setCarrera(strtoupper($_POST['nom']));
        $dato->setEstado($_POST['estado']);
        $dato->setCarreraTituloAOptener($_POST['carreraTituloAOptener']);
        $dato->setFktipoCarrerasId($_POST['fktipoCarrerasId']);
        $dato->setFkmodalidadCarreraId($_POST['fkmodalidadCarreraId']);
        $dato->setCarrerasinstituto($_POST['instituto']);
        $dato->setCarreraOculto($_POST['eliminar']);
        $dato->setCarreraAccion($_POST['actualizar']);
        $dato->setCarrerafecha(date("Y-m-d"));
        $dato->setCarrerauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setCarrerasId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getCarrerasId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return "¡Seleccione primero una Provincia!";
    }
}
echo opcioncarreras();
