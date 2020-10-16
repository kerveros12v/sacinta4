<?php
require_once("../Crud/CrudSetecExperienciaLaboral.php");
require_once("respuestasgenerales.php");

use Clasesphp\SetecExperienciaLaboral;
use Crud\CrudSetecExperienciaLaboral;

session_start();

function opcionSetecExperienciaLaboral()
{
    try {
        $datos = new SetecExperienciaLaboral();
        $crud = new CrudSetecExperienciaLaboral();

        $datos->setIdsetecExperienciaLaboral($_POST['id']);
        $datos->setFknumidentificacion(strtoupper($_POST['fknumidentificacion']));
        $datos->setExperiencianombreEmpresa(strtoupper($_POST['experiencianombreEmpresa']));
        $datos->setTiempodetrabajo($_POST['tiempodetrabajo']);
        $datos->setSetecactividadRealizada(strtoupper($_POST['setecactividadRealizada']));
        $datos->setSplOculto($_POST['eliminar']);
        $datos->setSplAccion($_POST['actualizar']);
        $datos->setSplfecha(date("Y-m-d"));
        $datos->setSpluser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdsetecExperienciaLaboral(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdsetecExperienciaLaboral());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSetecExperienciaLaboral();
