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

        $datos->setIdBimestres($_POST['id']);
        $datos->setBimestre($_POST['nom']);
        $datos->setBimestrescodigo($_POST['cod']);
        $datos->setBimestresOculto($_POST['eliminar']);
        $datos->setBimestresAccion($_POST['actualizar']);
        $datos->setBimestresfecha(date("Y-m-d"));
        $datos->setBimestresuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdBimestres(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdBimestres());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionBimestre();
