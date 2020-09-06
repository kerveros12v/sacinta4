<?php
require_once("../Crud/CrudSexo.php");
require_once("respuestasgenerales.php");
session_start();

use Clasesphp\Sexos;
use Crud\CrudSexo;

function opcionsexo()
{
    try {
        $dato = new Sexos();
        $crud = new CrudSexo();
        $dato->setSexoId($_POST['id']);
        $dato->setSexocodigo($_POST['cod']);
        $dato->setSexo(strtoupper($_POST['nom']));
        $dato->setSexoOculto($_POST['eliminar']);
        $dato->setSexoAccion($_POST['actualizar']);
        $dato->setSexofecha(date("Y-m-d"));
        $dato->setSexouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setSexoId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getSexoId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionsexo();
