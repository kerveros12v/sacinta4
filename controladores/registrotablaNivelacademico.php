<?php

require_once("../Crud/CrudNivelacademico.php");
require_once("respuestasgenerales.php");

use Clasesphp\Nivelacademico;
use Crud\CrudNivelacademico;

session_start();



function opcionnivelacademico()
{
    try {
        $datos = new Nivelacademico();
        $crud = new CrudNivelacademico();

        $datos->set_nivelAcademicoQueCursaQueCursaId($_POST['id']);
        $datos->set_nivelAcademicoQueCursa(strtoupper($_POST['nom']));
        $datos->set_nivelacademicocodigo(trim($_POST['cod']));
        $datos->set_nivelacademicoOculto($_POST['eliminar']);
        $datos->set_nivelacademicoAccion($_POST['actualizar']);
        $datos->set_nivelacademicofecha(date("Y-m-d"));
        $datos->set_nivelacademicouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_nivelAcademicoQueCursaQueCursaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_nivelAcademicoQueCursaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionnivelacademico();
