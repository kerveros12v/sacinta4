<?php
require_once("../Crud/Crudrecibepensiondiferenciada.php");
require_once("respuestasgenerales.php");
session_start();

use Clasesphp\Recibepensiondiferenciada;
use Crud\Crudrecibepensiondiferenciada;

function opcionRecibepenciondiferenciada()
{
    try {
        $datos = new Recibepensiondiferenciada();
        $crud = new Crudrecibepensiondiferenciada();

        $datos->setRecibePensionDiferenciadaId($_POST['id']);
        $datos->setRecibePensionDiferenciada(strtoupper($_POST['nom']));
        $datos->setRecibepensiondiferenciadacodigo($_POST['cod']);
        $datos->setRecibepensiondiferenciadaOculto($_POST['eliminar']);
        $datos->setRecibepensiondiferenciadaAccion($_POST['actualizar']);
        $datos->setRecibepensiondiferenciadafecha(date("Y-m-d"));
        $datos->setRecibepensiondiferenciadauser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setRecibePensionDiferenciadaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getRecibePensionDiferenciadaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionRecibepenciondiferenciada();
