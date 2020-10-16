<?php

require('../Crud/CrudSetecCondicionVida.php');

use Clasesphp\SetecCondicionVida;
use Crud\CrudSetecCondicionVida;

function opcionSetecCondicionVida()
{

    $datos = new SetecCondicionVida();
    $datos->setIdSetecCondiciondeVida($_POST['id']);
    $datos->setSetecCondiciondeVidaCedula($_POST['SetecCondiciondeVidaCedula']);
    $datos->setSetecCondiciondeVidaFecha($_POST['SetecCondiciondeVidaFecha']);
    $datos->setSetecjefehogar($_POST['Setecjefehogar']);
    $datos->setSetecseguromedico($_POST['Setecseguromedico']);
    $datos->setSetecAsistenciaInstitucion($_POST['SetecAsistenciaInstitucion']);
    $datos->setSetecvivienda($_POST['Setecvivienda']);
    $datos->setSetecLuz($_POST['SetecLuz']);
    $datos->setSetecAgua($_POST['SetecAgua']);
    $datos->setSetecInternet($_POST['SetecInternet']);
    $datos->setSetecnumhijos($_POST['Setecnumhijos']);
    $datos->setSetechijomayor($_POST['setechijomayor']);
    $datos->setSetecMienbrosHogar($_POST['SetecMienbrosHogar']);
    $crud = new CrudSetecCondicionVida();
    $opcion = $_POST['opt'];
    if ($opcion == 1) {
        // $dato->set_idsetecperfil(null);
        //echo $datos->formatoJSON();
        $datos->setIdSetecCondiciondeVida(null);
        $crud->insertar($datos);
        echo ("Guardado");
    }
    if ($opcion == 2) {
        $crud->actualizar($datos);
        echo ("Actualizado");
    }
    if ($opcion == 0) {
        $crud->eliminar($datos->getIdSetecCondiciondeVida());
        echo ("Eliminado");
    }
}
echo opcionSetecCondicionVida();
