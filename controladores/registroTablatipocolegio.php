<?php
require_once("../Crud/CrudTipoColegio.php");
require_once("respuestasgenerales.php");
session_start();
function opciontipocolegio()
{
    try {
        $dato = new \Clasesphp\Tipocolegio();
        $crud = new \Crud\CrudTipocolegio();
        $dato->set_tipoColegioId($_POST['id']);
		$dato->set_tipoColegio(strtoupper($_POST['nom']));
		$dato->set_tipocolegiocodigo($_POST['cod']);
		$dato->set_tipocolegioOculto($_POST['eliminar']);
		$dato->set_tipocolegioAccion($_POST['actualizar']);
		$dato->set_tipocolegiofecha(date("Y-m-d"));
		$dato->set_tipocolegiouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $dato->set_tipoColegioId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->get_tipoColegioId());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opciontipocolegio();
