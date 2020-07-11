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

        $datos->set_sectorEconomicoid($_POST['id']);
        $datos->set_SectorEconomico(strtoupper($_POST['nom']));
        $datos->set_sectoreconomicocodigo($_POST['cod']);
        $datos->set_sectoreconomicoOculto($_POST['eliminar']);
        $datos->set_sectoreconomicoAccion($_POST['actualizar']);
        $datos->set_sectoreconomicofecha(date("Y-m-d"));
        $datos->set_sectoreconomicouser($_SESSION['tipouser'] . $_SESSION['user']);


        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_sectorEconomicoid(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_sectorEconomicoid());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSectoreconomico();
