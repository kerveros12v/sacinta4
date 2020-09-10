<?php
require_once("../Crud/CrudPaises.php");
require_once("respuestasgenerales.php");
session_start();
function opcionpais()
{
    try {
        $dato = new \Clasesphp\Paises();
        $crud = new \Crud\CrudPaises();
        $dato->setPaisId($_POST['id']);
        $dato->setPaisescodigo($_POST['cod']);
        $dato->setPais(strtoupper($_POST['nom']));
        $dato->setPaisesOculto($_POST['eliminar']);
        $dato->setPaisesAccion($_POST['actualizar']);
        $dato->setPaisesfecha(date("Y-m-d"));
        $dato->setPaisesuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setPaisId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getPaisId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionpais();
