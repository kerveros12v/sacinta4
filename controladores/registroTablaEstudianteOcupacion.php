<?php

require_once("../Crud/CrudEstudianteOcupacion.php");
require_once("respuestasgenerales.php");

use Clasesphp\Estudianteocupacion;
use Crud\CrudEstudianteOcupacion;

session_start();
function opcionestudianteocupacion()
{
    try {
        $dato = new Estudianteocupacion;
        $crud = new CrudEstudianteOcupacion();
        $dato->setEstudianteOcupacionId($_POST['id']);
        $dato->setEstudianteocupacioncodigo($_POST['cod']);
        $dato->setEstudianteOcupacion(strtoupper($_POST['nom']));
        $dato->setEstudianteocupacionOculto($_POST['eliminar']);
        $dato->setEstudianteocupacionAccion($_POST['actualizar']);
        $dato->setEstudianteocupacionfecha(date("Y-m-d"));
        $dato->setEstudianteocupacionuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setEstudianteOcupacionId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getEstudianteOcupacionId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionestudianteocupacion();
