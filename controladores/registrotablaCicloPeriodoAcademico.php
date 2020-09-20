<?php
require_once("../Crud/CrudCicloPeriodo.php");
require_once("respuestasgenerales.php");

use Clasesphp\CicloPeriodo;
use Crud\CrudCicloPeriodo;

session_start();

function opcioncicloPeriodoAcademico()
{
    try {
        $datos = new CicloPeriodo();
        $crud = new CrudCicloPeriodo();

        $datos->setIdcicloperiodo($_POST['id']);
        $datos->setCiclo(strtoupper($_POST['nom']));
        $datos->setCicloperiodocodigo($_POST['cod']);
        $datos->setCicloperiodoOculto($_POST['eliminar']);
        $datos->setCicloperiodoAccion($_POST['actualizar']);
        $datos->setCicloperiodofecha(date("Y-m-d"));
        $datos->setCicloperiodouser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdcicloperiodo(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdcicloperiodo());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcioncicloPeriodoAcademico();
