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

        $datos->set_recibePensionDiferenciadaId($_POST['id']);
        $datos->set_recibePensionDiferenciada(strtoupper($_POST['nom']));
        $datos->set_recibepensiondiferenciadacodigo($_POST['cod']);
        $datos->set_recibepensiondiferenciadaOculto($_POST['eliminar']);
        $datos->set_recibepensiondiferenciadaAccion($_POST['actualizar']);
        $datos->set_recibepensiondiferenciadafecha(date("Y-m-d"));
        $datos->set_recibepensiondiferenciadauser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_recibePensionDiferenciadaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_recibePensionDiferenciadaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionRecibepenciondiferenciada();
