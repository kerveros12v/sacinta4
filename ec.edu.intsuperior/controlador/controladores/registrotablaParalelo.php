<?php

require_once("../Crud/CrudParalelo.php");
require_once("respuestasgenerales.php");

use Clasesphp\Paralelos;
use Crud\CrudParalelo;

session_start();



function opcionParalelos()
{
    try {
        $datos = new Paralelos();
        $crud = new CrudParalelo();

        $datos->set_paraleloId($_POST['id']);
        $datos->set_paralelo(strtoupper($_POST['nom']));
        $datos->set_paralelocodigo(trim($_POST['cod']));
        $datos->set_paraleloOculto($_POST['eliminar']);
        $datos->set_paraleloAccion($_POST['actualizar']);
        $datos->set_paralelofecha(date("Y-m-d"));
        $datos->set_paralelouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_paraleloId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_paraleloId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionParalelos();
