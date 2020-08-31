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

        $datos->set_tipoSangreId($_POST['id']);
        $datos->set_tipoSangre($_POST['nom']);
        $datos->set_tipossangrescodigo($_POST['cod']);
        $datos->set_tipossangreOculto($_POST['eliminar']);
        $datos->set_tipossangreAccion($_POST['actualizar']);
        $datos->set_tipossangrefecha(date("Y-m-d"));
        $datos->set_tipossangreuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_tipoSangreId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_tipoSangreId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
