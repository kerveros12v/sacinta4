<?php
require_once("../Crud/CrudSetecPerfil.php");
require_once("respuestasgenerales.php");

session_start();

use Clasesphp\SetecPerfil;
use Crud\CrudSetecPerfil;

function opcionSetecPerfil()
{
    try {
        $datos = new SetecPerfil();
        $crud = new CrudSetecPerfil();

        $datos->setIdsetecperfil($_POST['id']);
        $datos->setSetecperfilnombre(strtoupper($_POST['nom']));
        $datos->setSetecperfilcodigo($_POST['cod']);
        $datos->setSetecperfilOculto($_POST['eliminar']);
        $datos->setSetecperfilAccion($_POST['actualizar']);
        $datos->setSetecperfilfecha(date("Y-m-d"));
        $datos->setSetecperfiluser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdsetecperfil(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdsetecperfil());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSetecPerfil();
