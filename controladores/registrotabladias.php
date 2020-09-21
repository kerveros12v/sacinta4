<?php

require_once("../Crud/CrudDias.php");
require_once("respuestasgenerales.php");

use Clasesphp\Dias;
use Crud\CrudDias;

session_start();
function opciondias()
{
    try {
        $dato = new Dias();
        $crud = new CrudDias();
        $dato->setIdDias($_POST['id']);
        $dato->setDia(strtoupper($_POST['nom']));
        $dato->setDiasOculto($_POST['eliminar']);
        $dato->setDiasAccion($_POST['actualizar']);
        $dato->setDiasfecha(date("Y-m-d"));
        $dato->setDiasuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setIdDias(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getIdDias());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opciondias();
