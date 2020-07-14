<?php
require_once("../Crud/CrudColegios.php");
require_once("respuestasgenerales.php");

use  Crud\CrudColegios;
use  Clasesphp\Colegios;

session_start();

function opcioncolegios()
{
    try {
        $dato = new Colegios();
        $crud = new CrudColegios();


        $dato->set_idColegios(trim($_POST['id']));
        $dato->set_colegio(strtoupper($_POST['colegios']));
        $dato->set_cantonCantonId($_POST['canton']);
        $dato->set_tipoColegioTipoColegioId($_POST['tipoColegioId']);
        $dato->set_colegioscodigo(trim($_POST['codigo']));
        $dato->set_colegiosOculto($_POST['eliminar']);
        $dato->set_colegiosAccion($_POST['actualizar']);
        $dato->set_colegiosfecha(date("Y-m-d"));
        $dato->set_colegiosuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->set_idColegios(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->get_idcolegios());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcioncolegios();
