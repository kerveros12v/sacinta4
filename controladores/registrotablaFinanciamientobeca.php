<?php
require_once("../Crud/CrudFinanciamientobeca.php");
require_once("respuestasgenerales.php");

use Clasesphp\Financiamientobeca;
use Crud\CrudFinanciamientobeca;

session_start();

function opcionFinanciamientobeca()
{
    try {
        $datos = new Financiamientobeca();
        $crud = new CrudFinanciamientobeca();

        $datos->setFinanciamientoBecaid($_POST['id']);
        $datos->setFinanciamientoBeca(strtoupper($_POST['nom']));
        $datos->setFinanciamientobecacodigo($_POST['cod']);
        $datos->setFinanciamientobecaOculto($_POST['eliminar']);
        $datos->setFinanciamientobecaAccion($_POST['actualizar']);
        $datos->setFinanciamientobecafecha(date("Y-m-d"));
        $datos->setFinanciamientobecauser($_SESSION['tipouser'] . $_SESSION['user']);
        $datos->setFinanciamientobecabool($_POST['financiamientobecabool']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setFinanciamientoBecaid(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getFinanciamientoBecaid());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionFinanciamientobeca();
