<?php
require_once("../Crud/CrudIngresoconConcursomeritorio.php");
require_once("respuestasgenerales.php");
use Clasesphp\Ingresoconconcursomeritos;
use Crud\CrudIngresoconconcursomeritos;
session_start();
function opcionpais()
{
    try {
        $dato = new Ingresoconconcursomeritos();
        $crud = new CrudIngresoconconcursomeritos();
        $dato->setIngresoConConcursoMeritosId($_POST['id']);
        $dato->setIngresoconconcursomeritoscodigo($_POST['cod']);
        $dato->setIngresoConConcursoMeritos(strtoupper($_POST['nom']));
        $dato->setIngresoconconcursomeritosOculto($_POST['eliminar']);
        $dato->setIngresoconconcursomeritosAccion($_POST['actualizar']);
        $dato->setIngresoconconcursomeritosfecha(date("Y-m-d"));
        $dato->setIngresoconconcursomeritosuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setIngresoConConcursoMeritosId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getIngresoConConcursoMeritosId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionpais();
