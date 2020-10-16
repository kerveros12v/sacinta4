<?php
require_once("../Crud/CrudCuartaRazonBeca.php");
require_once("respuestasgenerales.php");

use Clasesphp\Cuartarazonbeca;
use Crud\CrudCuartarazonbeca;

session_start();

function opcionCuartarazonbeca()
{
    try {
        $datos = new Cuartarazonbeca();
        $crud = new CrudCuartarazonbeca();

        $datos->setCuartaRazonBecaId($_POST['id']);
        $datos->setCuartaRazonBeca(strtoupper($_POST['nom']));
        $datos->setCuartarazonbecacodigo($_POST['cod']);
        $datos->setCuartarazonbecaOculto($_POST['eliminar']);
        $datos->setCuartarazonbecaAccion($_POST['actualizar']);
        $datos->setCuartarazonbecafecha(date("Y-m-d"));
        $datos->setCuartarazonbecauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setCuartaRazonBecaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getCuartaRazonBecaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionCuartarazonbeca();
