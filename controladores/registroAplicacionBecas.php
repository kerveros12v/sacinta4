<?php
require_once('../Crud/CrudAplicacionBecas.php');
require_once('respuestasgenerales.php');

use Clasesphp\Aplicacionbecas;
use Crud\CrudAplicacionbecas;

session_start();
function opcionAplicacionbecas()
{
    try {
        $datos = new Aplicacionbecas();
        $cruddatos = new CrudAplicacionbecas();
        $datos->setIdAplicacionBecas(trim($_POST['id']));
        $datos->setFknumeroIdentificacion(trim($_POST['fknumeroIdentificacion']));
        $datos->setAplicacionbecascodigo(strtoupper(trim($_POST['aplicacionbecascodigo'])));
        $datos->setFktipoBecaId($_POST['fktipoBecaId']);
        $datos->setFkfinanciamientoBecaid(($_POST['fkfinanciamientoBecaid']));
        $datos->setAbperiodo(($_POST['abperiodo']));
        $datos->setAbfechainicio((($_POST['abfechainicio'])));
        $datos->setAbfechafin($_POST['abfechafin']);
        $datos->setFkprimeraRazonBecaId(($_POST['fkprimeraRazonBecaId']));
        $datos->setFksegundaRazonBecaId(($_POST['fksegundaRazonBecaId']));
        $datos->setFkterceraRazonBecaId((($_POST['fkterceraRazonBecaId'])));
        $datos->setFkcuartaRazonBecaId($_POST['fkcuartaRazonBecaId']);
        $datos->setFkquintaRazonBecaId(($_POST['fkquintaRazonBecaId']));
        $datos->setFksextaRazonBecaId(($_POST['fksextaRazonBecaId']));
        $datos->setMontoBeca($_POST['montoBeca']);
        $datos->setPorcientoBecaCoberturaManuntencion(trim($_POST['porcientoBecaCoberturaManuntencion']));
        $datos->setPorcientoBecaCoberturaArancel(trim($_POST['porcientoBecaCoberturaArancel']));
        $datos->setAbobservaciones(strtoupper(trim($_POST['abobservaciones'])));
        $datos->setAbactivo($_POST['abactivo']);
        $datos->setAplicacionbecasAccion($_POST['actualizar']);
        $datos->setAplicacionbecasOculto($_POST['eliminar']);
        $datos->setAplicacionbecasuser($_SESSION['tipouser'] . $_SESSION['user']);
        $datos->setAplicacionbecasfecha(date("Y-m-d"));

        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                if ($cruddatos->existe($_POST['id']) == 0) {
                    $datos->setIdAplicacionBecas(null);
                    $cruddatos->insertar($datos);
                    return (guardarR());
                }
                $opcion = 2;
            }
            if ($opcion == 2) {
                $cruddatos->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $cruddatos->eliminar($datos->getIdAplicacionBecas());
                return (eliminarR());
            }
        }
        return (tiempoExedido());
    } catch (Exception $e) {
        return ($e->getMessage());
    }
}


echo opcionAplicacionbecas();
