<?php
require_once("../Crud/CrudTipoDocumento.php");
require_once("respuestasgenerales.php");

session_start();

use Crud\CrudTipodocumento;
use Clasesphp\Tipodocumento;

function opcionTipodocumento()
{
    try {
        $datos = new Tipodocumento();
        $crud = new CrudTipodocumento();

        $datos->set_tipoDocumentoId($_POST['id']);
        $datos->set_tipoDocumento($_POST['nom']);
        $datos->set_tipoDocumentocodigo($_POST['cod']);
        $datos->set_tipoDocumentoOculto($_POST['eliminar']);
        $datos->set_tipoDocumentoAccion($_POST['actualizar']);
        $datos->set_tipoDocumentofecha(date("Y-m-d"));
        $datos->set_tipoDocumentouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_tipoDocumentoId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_tipoDocumentoId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
