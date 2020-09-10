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

        $datos->setNivelAcademicoQueCursaId($_POST['id']);
        $datos->setNivelAcademicoQueCursa(strtoupper($_POST['nom']));
        $datos->setNivelacademicocodigo(trim($_POST['cod']));
        $datos->setNivelacademicoOculto($_POST['eliminar']);
        $datos->setNivelacademicoAccion($_POST['actualizar']);
        $datos->setNivelacademicofecha(date("Y-m-d"));
        $datos->setNivelacademicouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setNivelAcademicoQueCursaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getNivelAcademicoQueCursaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionnivelacademico();
