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

        $datos->setPueblonacionalidadId($_POST['id']);
        $datos->setPueblonacionalidad(strtoupper($_POST['nom']));
        $datos->setPueblonacionalidadescodigo($_POST['cod']);
        $datos->setPnetnia($_POST['pnetnia']);
        $datos->setPueblonacionalidadOculto($_POST['eliminar']);
        $datos->setPueblonacionalidadAccion($_POST['actualizar']);
        $datos->setPueblonacionalidadfecha(date("Y-m-d"));
        $datos->setPueblonacionalidaduser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setPueblonacionalidadId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getPueblonacionalidadId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
