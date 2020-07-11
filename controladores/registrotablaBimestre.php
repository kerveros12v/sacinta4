<?php
require_once("../Crud/CrudBimestre.php");
require_once("respuestasgenerales.php");

use Clasesphp\Bimestres;
use Crud\CrudBimestres;

session_start();



function opcionBimestre()
{
    try {
        $datos = new Bimestres();
        $crud = new CrudBimestres();

        $datos->set_idBimestres($_POST['id']);
        $datos->set_bimestre($_POST['nom']);
        $datos->set_bimestrescodigo($_POST['cod']);
        $datos->set_bimestresOculto($_POST['eliminar']);
        $datos->set_bimestresAccion($_POST['actualizar']);
        $datos->set_bimestresfecha(date("Y-m-d"));
        $datos->set_bimestresuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_idBimestres(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_idBimestres());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionBimestre();
