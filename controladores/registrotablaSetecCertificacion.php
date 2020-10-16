<?php
require_once("../Crud/CrudSetecCertificacion.php");
require_once("respuestasgenerales.php");

use Clasesphp\SetecCertificacion;
use Crud\CrudSetecCertificacion;

session_start();

function opcionSetecCertificacion()
{
    try {
        $datos = new SetecCertificacion();
        $crud = new CrudSetecCertificacion();

        $datos->setIdsetecCertificacion($_POST['id']);
        $datos->setFkidsetecperfil(strtoupper($_POST['fkidsetecperfil']));
        $datos->setFechaprueba($_POST['fechaprueba']);
        $datos->setHoraprueba($_POST['horaprueba']);
        $datos->setCostoCertidicacion(strtoupper($_POST['costoCertidicacion']));
        $datos->setSetecLugardondeExaminado(strtoupper($_POST['setecLugardondeExaminado']));
        $datos->setSetecnombreEmpresaLugar(strtoupper($_POST['setecnombreEmpresaLugar']));
        $datos->setSetecdireccionEmpresa(strtoupper($_POST['setecdireccionEmpresa']));
        $datos->setSetecTelefonoEmpresa($_POST['setecTelefonoEmpresa']);
        $datos->setSeteccertificacionOculto($_POST['eliminar']);
        $datos->setSeteccertificacionAccion($_POST['actualizar']);
        $datos->setSeteccertificacionfecha(date("Y-m-d"));
        $datos->setSeteccertificacionuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setIdsetecCertificacion(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getIdsetecCertificacion());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionSetecCertificacion();
