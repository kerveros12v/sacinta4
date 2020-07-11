<?php
require_once("../clasesphp/Provincias.php");
require_once("../Crud/CrudProvincia.php");
require_once("respuestasgenerales.php");

session_start();
function opcionprovincia()
{
    try {
        $dato = new \Clasesphp\Provincias();
        $crud = new \Crud\CrudProvincias();
        $dato->set_provinciaId($_POST['id']);
        $dato->set_provinciacodigo($_POST['cod']);
        $dato->set_provincia(strtoupper($_POST['nom']));
        $dato->set_provinciapais($_POST['pais']);
        $dato->set_provinciaOculto($_POST['eliminar']);
        $dato->set_provinciaAccion($_POST['actualizar']);
        $dato->set_provinciafecha(date("Y-m-d"));
        $dato->set_provinciauser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $dato->set_provinciaId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->get_provinciaId());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());

    } catch (Exception $e) {
        return $e;
    }
}
echo opcionprovincia();
