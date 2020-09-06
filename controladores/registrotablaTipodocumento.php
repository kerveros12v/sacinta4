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

        $datos->setTipoDocumentoId($_POST['id']);
        $datos->setTipoDocumento(strtoupper($_POST['nom']));
        $datos->setTipoDocumentocodigo($_POST['cod']);
        $datos->setTipoDocumentoOculto($_POST['eliminar']);
        $datos->setTipoDocumentoAccion($_POST['actualizar']);
        $datos->setTipoDocumentofecha(date("Y-m-d"));
        $datos->setTipoDocumentouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTipoDocumentoId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTipoDocumentoId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
