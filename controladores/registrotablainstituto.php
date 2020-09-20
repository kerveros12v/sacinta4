<?php
require_once("../Crud/CrudInstitutos.php");
require_once("respuestasgenerales.php");

use Clasesphp\Institutos;
use Crud\CrudInstitutos;

session_start();

function opcionIntituto()
{
    try {
        $datos = new Institutos();
        $crud = new CrudInstitutos();

        $datos->setInstitutosId($_POST['id']);
        $datos->setInstitutoNombre(strtoupper($_POST['nom']));
        $datos->setInstitutoscodigo($_POST['cod']);
        $datos->setCantonId($_POST['canton']);
        $datos->setFkidSostenimiento($_POST['sostenimiento']);
        $datos->setInstitutosOculto($_POST['eliminar']);
        $datos->setInstitutosAccion($_POST['actualizar']);
        $datos->setInstitutosfecha(date("Y-m-d"));
        $datos->setInstitutosuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setInstitutosId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getInstitutosId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionIntituto();
