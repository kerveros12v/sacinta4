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
        $dato->set_estudianteOcupacionId($_POST['id']);
        $dato->set_estudianteocupacioncodigo($_POST['cod']);
        $dato->set_estudianteOcupacion(strtoupper($_POST['nom']));
        $dato->set_estudianteocupacionOculto($_POST['eliminar']);
        $dato->set_estudianteocupacionAccion($_POST['actualizar']);
        $dato->set_estudianteocupacionfecha(date("Y-m-d"));
        $dato->set_estudianteocupacionuser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $dato->set_estudianteOcupacionId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->get_estudianteOcupacionId());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionestudianteocupacion();
