<?php
require_once("../Crud/CrudFormacionArtesanal.php");
require_once("respuestasgenerales.php");

use Clasesphp\FormacionArtesanal;
use Crud\CrudFormacionArtesanal;

session_start();

function opcionFormacionArtesanal()
{
    try {
        $datos = new FormacionArtesanal();
        $crud = new CrudFormacionArtesanal();

        $datos->setIdformacionArtesano($_POST['id']);
        $datos->setFormacionArtesanal(strtoupper($_POST['nom']));
        $datos->setFormacionartesanocodigo($_POST['cod']);
        $datos->setFormacionartesanoOculto($_POST['eliminar']);
        $datos->setFormacionartesanoAccion($_POST['actualizar']);
        $datos->setFormacionartesanofecha(date("Y-m-d"));
        $datos->setFormacionartesanouser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdformacionArtesano(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdformacionArtesano());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionFormacionArtesanal();
