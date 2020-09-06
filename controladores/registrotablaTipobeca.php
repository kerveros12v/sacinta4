<?php
require_once("../Crud/CrudTipoBeca.php");
require_once("respuestasgenerales.php");

session_start();

use Crud\CrudTipoBeca;
use Clasesphp\Tipobeca;

function opcionTipodocumento()
{
    try {
        $datos = new Tipobeca();
        $crud = new CrudTipoBeca();

        $datos->setTipoBecaId($_POST['id']);
        $datos->setTipoBeca(strtoupper($_POST['nom']));
        $datos->setTipobecacodigo($_POST['cod']);
        $datos->setTipobecaOculto($_POST['eliminar']);
        $datos->setTipobecaAccion($_POST['actualizar']);
        $datos->setTipobecafecha(date("Y-m-d"));
        $datos->setTipobecauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTipoBecaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTipoBecaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
