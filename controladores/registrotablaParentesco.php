<?php

require_once("../Crud/CrudParentesco.php");
require_once("respuestasgenerales.php");


use Clasesphp\Parentescos;
use Crud\CrudParentescos;


session_start();



function opcionparentesco()
{
    try {
        $datos = new Parentescos();
        $crud = new CrudParentescos();

        $datos->setIdParentescos($_POST['id']);
        $datos->setParentesco($_POST['nom']);
        $datos->setParentescocodigo($_POST['cod']);
        $datos->setParentescosOculto($_POST['eliminar']);
        $datos->setParentescosAccion($_POST['actualizar']);
        $datos->setParentescosfecha(date("Y-m-d"));
        $datos->setParentescosuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdParentescos(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdParentescos());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionparentesco();
