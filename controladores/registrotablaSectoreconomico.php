<?php
require_once("../Crud/CrudSectorEconomico.php");
require_once("respuestasgenerales.php");

use Clasesphp\Sectoreconomico;
use Crud\CrudSectorEconomico;

session_start();


function opcionSectoreconomico()
{
    try {
        $datos = new Sectoreconomico();
        $crud = new CrudSectorEconomico();

        $datos->setSectorEconomicoid($_POST['id']);
        $datos->setSectorEconomico(strtoupper($_POST['nom']));
        $datos->setSectoreconomicocodigo($_POST['cod']);
        $datos->setSectoreconomicoOculto($_POST['eliminar']);
        $datos->setSectoreconomicoAccion($_POST['actualizar']);
        $datos->setSectoreconomicofecha(date("Y-m-d"));
        $datos->setSectoreconomicouser($_SESSION['tipouser'] . $_SESSION['user']);


        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setSectorEconomicoid(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getSectorEconomicoid());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSectoreconomico();
