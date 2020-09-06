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
        $dato->setProvinciaId($_POST['id']);
        $dato->setProvinciacodigo($_POST['cod']);
        $dato->setProvincia(strtoupper($_POST['nom']));
        $dato->setProvinciapais($_POST['pais']);
        $dato->setProvinciaOculto($_POST['eliminar']);
        $dato->setProvinciaAccion($_POST['actualizar']);
        $dato->setProvinciafecha(date("Y-m-d"));
        $dato->setProvinciauser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setProvinciaId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getProvinciaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionprovincia();
