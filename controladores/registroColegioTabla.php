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
        $lstcolegio = $crud->mostrar();


        $dato->setIdColegios(trim($_POST['id']));
        $dato->setColegio(strtoupper($_POST['colegios']));
        $dato->setCantonCantonId($_POST['canton']);
        $dato->setTipoColegioTipoColegioId($_POST['tipoColegioId']);
        $dato->setColegioscodigo(trim($_POST['codigo']));
        $dato->setColegiosOculto($_POST['eliminar']);
        $dato->setColegiosAccion($_POST['actualizar']);
        $dato->setColegiosfecha(date("Y-m-d"));
        $dato->setColegiosuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setIdColegios(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getIdColegios());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcioncolegios();
