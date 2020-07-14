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
        $dato->set_generoId($_POST['id']);
        $dato->set_generoscodigo($_POST['cod']);
        $dato->set_genero(strtoupper($_POST['nom']));
        $dato->set_generoOculto($_POST['eliminar']);
        $dato->set_generoAccion($_POST['actualizar']);
        $dato->set_generofecha(date("Y-m-d"));
        $dato->set_generouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $dato->set_generoId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->get_generoId());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionGeneros();
