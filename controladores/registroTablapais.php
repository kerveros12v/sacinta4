<?php
require_once("../Crud/CrudPaises.php");
require_once("respuestasgenerales.php");
session_start();
function opcionpais()
{
    try {
        $dato = new \Clasesphp\Paises();
        $crud = new \Crud\CrudPaises();
        $dato->set_paisId($_POST['id']);
        $dato->set_codigo($_POST['cod']);
        $dato->set_pais(strtoupper($_POST['nom']));
        $dato->set_oculto($_POST['eliminar']);
        $dato->set_estado($_POST['actualizar']);
        $dato->set_fecha(date("Y-m-d"));
        $dato->set_user($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $dato->set_paisId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->get_paisId());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionpais();
