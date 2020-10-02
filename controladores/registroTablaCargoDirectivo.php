<?php


require_once("../Crud/CrudCargoDirectivo.php");
require_once("respuestasgenerales.php");

use Clasesphp\Cargodirectivo;
use Crud\CrudCargodirectivo;

session_start();
function opcioncargoDirectivo()
{
    try {
        $dato = new Cargodirectivo;
        $crud = new CrudCargodirectivo;
        $dato->setCargoDirectivoId($_POST['id']);
        $dato->setCargodirectivocodigo($_POST['cod']);
        $dato->setCargoDirectivo(strtoupper($_POST['nom']));
        $dato->setCargodirectivoOculto($_POST['eliminar']);
        $dato->setCargodirectivoAccion($_POST['actualizar']);
        $dato->setCargodirectivofecha(date("Y-m-d"));
        $dato->setCargodirectivouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setCargoDirectivoId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getCargoDirectivoId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcioncargoDirectivo();
