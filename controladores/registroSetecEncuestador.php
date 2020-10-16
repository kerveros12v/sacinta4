<?php

require('../Crud/CrudSetecEncuestador.php');
require_once("respuestasgenerales.php");

use Clasesphp\SetecEncuestador;
use Crud\CrudSetecEncuestador;

session_start();

function opcionSetecEncuestador()
{
    try {
        $crud = new CrudSetecEncuestador();
        $datos = new SetecEncuestador();
        $datos->setIdnumIdentificacion(trim($_POST['idsetecEncuestadornumIdentificacion']));
        $datos->setNombre(strtoupper($_POST['nombre']));
        $datos->setEtniasEtniaId($_POST['etnias_etniaId']);
        $datos->setSetecencuestadorOculto($_POST['eliminar']);
        $datos->setSetecencuestadorAccion($_POST['actualizar']);
        $datos->setSetecencuestadorfecha(date("Y-m-d"));
        $datos->setSetecencuestadoruser($_SESSION['tipouser'] . $_SESSION['user']);
        $datos->setSetecencuestadorperfil(strtoupper($_POST['setecencuestadorperfil']));

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $datos->formatoJSON();
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdnumIdentificacion());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSetecEncuestador();
