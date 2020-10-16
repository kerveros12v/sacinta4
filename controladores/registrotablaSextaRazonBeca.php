<?php
require_once("../Crud/CrudSextaRazonBeca.php");
require_once("respuestasgenerales.php");

use Clasesphp\Sextarazonbeca;
use Crud\CrudSextarazonbeca;

session_start();

function opcionSextaRazonBeca()
{
    try {
        $datos = new Sextarazonbeca();
        $crud = new CrudSextarazonbeca();

        $datos->setSextaRazonBecaId($_POST['id']);
        $datos->setSextaRazonBeca(strtoupper($_POST['nom']));
        $datos->setSextarazonbecacodigo($_POST['cod']);
        $datos->setSextarazonbecaOculto($_POST['eliminar']);
        $datos->setSextarazonbecaAccion($_POST['actualizar']);
        $datos->setSextarazonbecafecha(date("Y-m-d"));
        $datos->setSextarazonbecauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setSextaRazonBecaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getSextaRazonBecaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSextaRazonBeca();
