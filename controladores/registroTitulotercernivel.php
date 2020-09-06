<?php
require_once("../Crud/CrudTituloTercerNivel.php");
require_once("respuestasgenerales.php");

session_start();

use Crud\CrudTituloTercerNivel;
use Clasesphp\Titulotercernivel;

function opcionTitulotercernivel()
{
    try {
        $datos = new Titulotercernivel();
        $crud = new CrudTituloTercerNivel();

        $datos->setTituloTercerNivelId($_POST['tituloTercerNivelId']);
        $datos->setTituloTercerNivel($_POST['tituloTercerNivel']);
        $datos->setTitulotercernivelcodigo($_POST['titulotercernivelcodigo']);
        $datos->setTitulotercernivelOculto($_POST['eliminar']);
        $datos->setTitulotercernivelAccion($_POST['actualizar']);
        $datos->setTitulotercernivelfecha(date("Y-m-d"));
        $datos->setTitulotercerniveluser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setTituloTercerNivelId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getTituloTercerNivelId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTitulotercernivel();
