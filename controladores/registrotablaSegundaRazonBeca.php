<?php
require_once("../Crud/CrudSegundaaRazonBeca.php");
require_once("respuestasgenerales.php");

use Clasesphp\Segundarazonbeca;
use Crud\CrudsegundarazonBeca;

session_start();

function opcionSegundarazonbeca()
{
    try {
        $datos = new Segundarazonbeca();
        $crud = new CrudsegundarazonBeca();

        $datos->setSegundaRazonBecaId($_POST['id']);
        $datos->setSegundaRazonBeca(strtoupper($_POST['nom']));
        $datos->setSegundarazonbecabool($_POST['bool']);
        $datos->setSegundarazonbecacodigo($_POST['cod']);
        $datos->setSegundarazonbecaOculto($_POST['eliminar']);
        $datos->setSegundarazonbecaAccion($_POST['actualizar']);
        $datos->setSegundarazonbecafecha(date("Y-m-d"));
        $datos->setSegundarazonbecauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setSegundaRazonBecaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getSegundaRazonBecaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSegundarazonbeca();
