<?php
require_once("../Crud/CrudTipoEnfernedadCatastrofica.php");
require_once("respuestasgenerales.php");
session_start();
function opcionTec()
{
    try {
        $dato = new \Clasesphp\Tipoenfermedadcatastrofica();
        $crud = new \Crud\CrudTipoenfermedadcatastrofica();
        $dato->setTipoEnfermedadCatastroficaId($_POST['id']);
        $dato->setTeccodigo($_POST['cod']);
        $dato->setTipoEnfermedadCatastrofica(strtoupper($_POST['nom']));
        $dato->setTecOculto($_POST['eliminar']);
        $dato->setTecAccion($_POST['actualizar']);
        $dato->setTecfecha(date("Y-m-d"));
        $dato->setTecuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setTipoEnfermedadCatastroficaId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getTipoEnfermedadCatastroficaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionTec();
