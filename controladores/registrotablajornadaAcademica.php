<?php

require_once("../Crud/CrudJornadasAcademicas.php");
require_once("respuestasgenerales.php");


use Clasesphp\Jornadasacademicas;
use Crud\CrudJornadasAcademicas;

session_start();



function opcionJornadasacademicas()
{
    try {
        $datos = new Jornadasacademicas();
        $crud = new CrudJornadasAcademicas();

        $datos->setJornadaAcademicaId($_POST['id']);
        $datos->setJornadaAcademica(strtoupper($_POST['nom']));
        $datos->setJornadaAcademicaCodigo($_POST['cod']);
        $datos->setJornadasacademicasOculto($_POST['eliminar']);
        $datos->setJornadasacademicasAccion($_POST['actualizar']);
        $datos->setJornadasacademicasfecha(date("Y-m-d"));
        $datos->setJornadasacademicasuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setJornadaAcademicaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getJornadaAcademicaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionJornadasacademicas();
