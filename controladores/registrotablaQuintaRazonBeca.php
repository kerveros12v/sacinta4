<?php
require_once("../Crud/CrudQuintaRazonBeca.php");
require_once("respuestasgenerales.php");

use Clasesphp\Quintarazonbeca;
use Crud\CrudQuintarazonbeca;

session_start();

function opcionQuintarazonbeca()
{
    try {
        $datos = new Quintarazonbeca();
        $crud = new CrudQuintarazonbeca();

        $datos->setQuintaRazonBecaId($_POST['id']);
        $datos->setQuintaRazonBeca(strtoupper($_POST['nom']));
        $datos->setQuintarazonbecacoldigo($_POST['cod']);
        $datos->setQuintarazonbecabool($_POST['bool']);
        $datos->setQuintarazonbecaOculto($_POST['eliminar']);
        $datos->setQuintarazonbecaAccion($_POST['actualizar']);
        $datos->setQuintarazonbecafecha(date("Y-m-d"));
        $datos->setQuintarazonbecauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setQuintaRazonBecaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getQuintaRazonBecaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionQuintarazonbeca();
