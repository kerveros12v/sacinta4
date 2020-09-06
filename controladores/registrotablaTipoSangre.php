<?php
require_once("../Crud/CrudTipoSangre.php");
require_once("respuestasgenerales.php");

use Clasesphp\Tipossangre;
use Crud\CrudTipoSangre;

session_start();



function opcionTipodocumento()
{
    try {
        $datos = new Tipossangre();
        $crud = new CrudTipoSangre();

        $datos->setTipoSangreId($_POST['id']);
        $datos->setTipoSangre(strtoupper($_POST['nom']));
        $datos->setTipossangrescodigo($_POST['cod']);
        $datos->setTipossangreOculto($_POST['eliminar']);
        $datos->setTipossangreAccion($_POST['actualizar']);
        $datos->setTipossangrefecha(date("Y-m-d"));
        $datos->setTipossangreuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTipoSangreId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTipoSangreId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
