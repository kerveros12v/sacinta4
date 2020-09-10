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

        $datos->setParaleloId($_POST['id']);
        $datos->setParalelo(strtoupper($_POST['nom']));
        $datos->setParalelocodigo(trim($_POST['cod']));
        $datos->setParaleloOculto($_POST['eliminar']);
        $datos->setParaleloAccion($_POST['actualizar']);
        $datos->setParalelofecha(date("Y-m-d"));
        $datos->setParalelouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setParaleloId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getParaleloId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionParalelos();
