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

        $datos->set_tipoMatriculaId($_POST['id']);
        $datos->set_tipoMatricula($_POST['nom']);
        $datos->set_tipomatriculacodigo($_POST['cod']);
        $datos->set_tipomatriculaOculto($_POST['eliminar']);
        $datos->set_tipomatriculaAccion($_POST['actualizar']);
        $datos->set_tipomatriculafecha(date("Y-m-d"));
        $datos->set_tipomatriculauser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_tipoMatriculaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion ==optEliminar()) {
                $crud->eliminar($datos->get_tipoMatriculaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
