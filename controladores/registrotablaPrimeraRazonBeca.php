<?php
require_once("../Crud/CrudPrimeraRazonBeca.php");
require_once("respuestasgenerales.php");

use Clasesphp\PrimeraRazonBeca;
use Crud\CrudPrimeraRazonBeca;

session_start();

function opcionPrimeraRazonBeca()
{
    try {
        $datos = new PrimeraRazonBeca();
        $crud = new CrudPrimeraRazonBeca();

        $datos->setPrimeraRazonBecaId($_POST['id']);
        $datos->setPrimeraRazonBeca(strtoupper($_POST['nom']));
        $datos->setPrimerarazonbecacodigo($_POST['cod']);
        $datos->setPrimerarazonbecaOculto($_POST['eliminar']);
        $datos->setPrimerarazonbecaAccion($_POST['actualizar']);
        $datos->setPrimerarazonbecafecha(date("Y-m-d"));
        $datos->setPrimerarazonbecauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setPrimeraRazonBecaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getPrimeraRazonBecaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionPrimeraRazonBeca();
