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

        $datos->set_JornadaAcademicaId($_POST['id']);
        $datos->set_JornadaAcademica($_POST['nom']);
        $datos->set_JornadaAcademicaCodigo($_POST['cod']);
        $datos->set_jornadasacademicasOculto($_POST['eliminar']);
        $datos->set_jornadasacademicasAccion($_POST['actualizar']);
        $datos->set_jornadasacademicasfecha(date("Y-m-d"));
        $datos->set_jornadasacademicasuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_JornadaAcademicaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_JornadaAcademicaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionJornadasacademicas();
