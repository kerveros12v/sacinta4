<?php

use Clasesphp\Parentescos;
use Crud\CrudParentescos;

require_once("../Crud/CrudParentesco.php");
require_once("respuestasgenerales.php");



session_start();



function opcionparentesco()
{
    try {
        $datos = new Parentescos();
        $crud = new CrudParentescos();

        $datos->set_idParentescos($_POST['id']);
        $datos->set_parentesco($_POST['nom']);
        $datos->set_parentescocodigo($_POST['cod']);
        $datos->set_parentescosOculto($_POST['eliminar']);
        $datos->set_parentescosAccion($_POST['actualizar']);
        $datos->set_parentescosfecha(date("Y-m-d"));
        $datos->set_parentescosuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_idParentescos(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_idParentescos());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionparentesco();
