<?php
require_once("../Crud/CrudTerceraRazonBeca.php");
require_once("respuestasgenerales.php");

use Clasesphp\Tercerarazonbeca;
use Crud\CrudTercerarazonbeca;

session_start();

function opcionTercerarazonbeca()
{
    try {
        $datos = new Tercerarazonbeca();
        $crud = new CrudTercerarazonbeca();

        $datos->setTerceraRazonBecaId($_POST['id']);
        $datos->setTerceraRazonBeca(strtoupper($_POST['nom']));
        $datos->setTercerarazonbecacodigo($_POST['cod']);
        $datos->setTercerarazonbecaOculto($_POST['eliminar']);
        $datos->setTercerarazonbecaAccion($_POST['actualizar']);
        $datos->setTercerarazonbecafecha(date("Y-m-d"));
        $datos->setTercerarazonbecauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTerceraRazonBecaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTerceraRazonBecaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTercerarazonbeca();
