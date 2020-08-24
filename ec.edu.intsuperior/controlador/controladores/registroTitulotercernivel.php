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

        $datos->set_tituloTercerNivelId($_POST['tituloTercerNivelId']);
        $datos->set_tituloTercerNivel($_POST['tituloTercerNivel']);
        $datos->set_titulotercernivelcodigo($_POST['titulotercernivelcodigo']);
        $datos->set_titulotercernivelOculto($_POST['eliminar']);
        $datos->set_titulotercernivelAccion($_POST['actualizar']);
        $datos->set_titulotercernivelfecha(date("Y-m-d"));
        $datos->set_titulotercerniveluse($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_tituloTercerNivelId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_tituloTercerNivelId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTitulotercernivel();
