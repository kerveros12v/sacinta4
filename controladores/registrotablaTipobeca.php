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

        $datos->set_tipoBecaId($_POST['id']);
        $datos->set_tipoBeca(strtoupper($_POST['nom']));
        $datos->set_tipobecacodigo($_POST['cod']);
        $datos->set_tipobecaOculto($_POST['eliminar']);
        $datos->set_tipobecaAccion($_POST['actualizar']);
        $datos->set_tipobecafecha(date("Y-m-d"));
        $datos->set_tipobecauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_tipoBecaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_tipoBecaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
