<?php
require_once("../Crud/CrudRelacionLaboralIES.php");
require_once("respuestasgenerales.php");

use Clasesphp\RelacionLaboralIES;
use Crud\CrudRelacionLaboralIES;

session_start();
function opcionRelacionLaboralIES()
{
    try {
        $dato = new RelacionLaboralIES();
        $crud = new CrudRelacionLaboralIES();
        $dato->setRelacionLaboralIESId($_POST['id']);
        $dato->setRelacionlaboraliescodigo($_POST['cod']);
        $dato->setRelacionLaboralIES(strtoupper($_POST['nom']));
        $dato->setRelacionlaboraliesOculto($_POST['eliminar']);
        $dato->setRelacionlaboraliesAccion($_POST['actualizar']);
        $dato->setRelacionlaboraliesfecha(date("Y-m-d"));
        $dato->setRelacionlaboraliesuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setRelacionLaboralIESId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getRelacionLaboralIESId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionRelacionLaboralIES();
