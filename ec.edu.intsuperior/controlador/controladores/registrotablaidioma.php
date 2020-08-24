<?php
require_once("../Crud/CrudIdiomas.php");
require_once("respuestasgenerales.php");
use Clasesphp\Idiomas;
use Crud\CrudIdiomas;

session_start();

function opcionIdiomas()
{
    try {
        $datos = new Idiomas();
        $crud = new CrudIdiomas();

        $datos->set_ididiomaAncestral($_POST['id']);
        $datos->set_idioma($_POST['nom']);
        $datos->set_idiomasancestralcodigo($_POST['cod']);
        $datos->set_idiomaetnia($_POST['etnia']);
        $datos->set_idiomaancestralOculto($_POST['eliminar']);
        $datos->set_idiomaancestralAccion($_POST['actualizar']);
        $datos->set_idiomaancestralfecha(date("Y-m-d"));
        $datos->set_idiomaancestraluser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_ididiomaAncestral(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_ididiomaAncestral());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionIdiomas();
