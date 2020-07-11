<?php
require_once("../Crud/CrudPueblonacionalidad.php");
require_once("respuestasgenerales.php");

use Clasesphp\PueblosNacionalidad;
use Crud\CrudPuebloNacionalidad;

session_start();
function opcionTipodocumento()
{
    try {
        $datos = new PueblosNacionalidad();
        $crud = new CrudPuebloNacionalidad();

        $datos->set_pueblonacionalidadId($_POST['id']);
        $datos->set_pueblonacionalidad($_POST['nom']);
        $datos->set_pueblonacionalidadescodigo($_POST['cod']);
        $datos->set_pueblonacionalidadOculto($_POST['eliminar']);
        $datos->set_pueblonacionalidadAccion($_POST['actualizar']);
        $datos->set_pueblonacionalidadfecha(date("Y-m-d"));
        $datos->set_pueblonacionalidaduser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_pueblonacionalidadId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_pueblonacionalidadId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
