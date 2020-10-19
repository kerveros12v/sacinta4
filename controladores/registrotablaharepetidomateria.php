<?php
require_once("../Crud/CrudHarepetidoalmenosunamateria.php");
require_once("respuestasgenerales.php");

use Clasesphp\Harepetidoalmenosunamateria;
use Crud\CrudHarepetidoalmenosunamateria;

session_start();

function opcionHarepetidoalmenosunamateria()
{
    try {
        $datos = new Harepetidoalmenosunamateria();
        $crud = new CrudHarepetidoalmenosunamateria();

        $datos->setHaRepetidoAlMenosUnaMateriaid($_POST['id']);
        $datos->setHaRepetidoAlMenosUnaMateria(strtoupper($_POST['nom']));
        $datos->setHarepetidoalmenosunamateriacodigo($_POST['cod']);
        $datos->setHarepetidoalmenosunamateriaOculto($_POST['eliminar']);
        $datos->setHarepetidoalmenosunamateriaAccion($_POST['actualizar']);
        $datos->setHarepetidoalmenosunamateriafecha(date("Y-m-d"));
        $datos->setHarepetidoalmenosunamateriauser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setHaRepetidoAlMenosUnaMateriaid(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getHaRepetidoAlMenosUnaMateriaid());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionHarepetidoalmenosunamateria();
