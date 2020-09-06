<?php
require_once("../Crud/CrudTipoColegio.php");
require_once("respuestasgenerales.php");
session_start();
function opciontipocolegio()
{
    try {
        $dato = new \Clasesphp\Tipocolegio();
        $crud = new \Crud\CrudTipocolegio();
        $dato->setTipoColegioId($_POST['id']);
        $dato->setTipoColegio(strtoupper($_POST['nom']));
        $dato->setTipocolegiocodigo($_POST['cod']);
        $dato->setTipocolegioOculto($_POST['eliminar']);
        $dato->setTipocolegioAccion($_POST['actualizar']);
        $dato->setTipocolegiofecha(date("Y-m-d"));
        $dato->setTipocolegiouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setTipoColegioId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getTipoColegioId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opciontipocolegio();
