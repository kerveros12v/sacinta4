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

        $datos->setIdidiomaAncestral($_POST['id']);
        $datos->setIdioma(strtoupper($_POST['nom']));
        $datos->setIdiomasancestralcodigo($_POST['cod']);
        $datos->setIdiomaetnia($_POST['etnia']);
        $datos->setIdiomaancestralOculto($_POST['eliminar']);
        $datos->setIdiomaancestralAccion($_POST['actualizar']);
        $datos->setIdiomaancestralfecha(date("Y-m-d"));
        $datos->setIdiomaancestraluser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdidiomaAncestral(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdidiomaAncestral());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionIdiomas();
