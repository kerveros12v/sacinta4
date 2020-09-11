<?php
require_once("../Crud/CrudGeneros.php");
require_once("respuestasgenerales.php");

use Clasesphp\Generos;
use Crud\CrudGeneros;

session_start();
function opcionGeneros()
{
    try {
        $dato = new Generos();
        $crud = new CrudGeneros();
        $dato->setGeneroId($_POST['id']);
        $dato->setGeneroscodigo($_POST['cod']);
        $dato->setGenero(strtoupper($_POST['nom']));
        $dato->setGeneroOculto($_POST['eliminar']);
        $dato->setGeneroAccion($_POST['actualizar']);
        $dato->setGenerofecha(date("Y-m-d"));
        $dato->setGenerouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setGeneroId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getGeneroId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionGeneros();
