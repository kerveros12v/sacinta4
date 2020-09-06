<?php

require_once("../Crud/CrudTipoMatricula.php");
require_once("respuestasgenerales.php");


use Clasesphp\Tipomatricula;
use Crud\CrudTipomatricula;

session_start();



function opcionTipodocumento()
{
    try {
        $datos = new Tipomatricula();
        $crud = new CrudTipomatricula();

        $datos->setTipoMatriculaId($_POST['id']);
        $datos->setTipoMatricula(strtoupper($_POST['nom']));
        $datos->setTipomatriculacodigo($_POST['cod']);
        $datos->setTipomatriculaOculto($_POST['eliminar']);
        $datos->setTipomatriculaAccion($_POST['actualizar']);
        $datos->setTipomatriculafecha(date("Y-m-d"));
        $datos->setTipomatriculauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTipoMatriculaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTipoMatriculaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
