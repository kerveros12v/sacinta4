<?php
require("../Crud/CrudSetecAspirante.php");

use Clasesphp\SetecAspirante;
use Crud\CrudSetecAspirante;

session_start();

function opcionSetecAspirante()
{
    $dato = new SetecAspirante();
    $dato->setNumeroidentificacionsetec($_POST['numeroidentificacionsetec']);
    $dato->setPrimerApellidosetec(strtoupper($_POST['primerApellidosetec']));
    $dato->setSegundoApellidosetec(strtoupper($_POST['segundoApellidosetec']));
    $dato->setPrimerNombresetec(strtoupper($_POST['primerNombresetec']));
    $dato->setSegundoNombresetec(strtoupper($_POST['segundoNombresetec']));
    $dato->setFechanacimiento($_POST['fechanacimiento']);
    $dato->setFkgenerosetec($_POST['fkgenerosetec']);
    $dato->setFkformacionArtesano($_POST['fkformacionArtesano']);
    $dato->setInstruccionRegistroCivil($_POST['instruccionRegistroCivil']);
    $dato->setParroquiasetec($_POST['parroquiasetec']);
    $dato->setDireccionsetec($_POST['direccionsetec']);
    $dato->setCorreoelectronicoSetec($_POST['correoelectronicoSetec']);
    $dato->setTelefonosetec($_POST['telefonosetec']);
    $dato->setCelularsetec($_POST['celularsetec']);
    $dato->setFktipodiscapacidad($_POST['fktipodiscapacidad']);
    $dato->setFksocioempleo($_POST['fksocioempleo']);
    $dato->setIdaccesodepartamento(1);
    $dato->setSetecaspiranteOculto($_POST['eliminar']);
    $dato->setSetecaspiranteAccion($_POST['actualizar']);
    $dato->setSetecaspirantefecha(date("Y-m-d"));
    $dato->setSetecaspiranteuser($_POST['numeroidentificacionsetec']);
    $dato->setSetecaspiinstriccionseleccionada(strtoupper($_POST['setecaspiinstriccionseleccionada']));
    $opcion = $_POST['opt'];
    $cruddatos = new CrudSetecAspirante();
    if ($opcion == 1) {
        $cruddatos->insertar($dato);
        echo ("Registro Exitoso");
    } elseif ($opcion == 2) {
        $cruddatos->actualizar($dato);
        echo ("Registro Actualizando");
    } elseif ($opcion == 0) {
        $cruddatos->eliminar($dato->getNumeroidentificacionsetec());
        echo ("Dato Eliminado Permanentemente");
    } elseif ($opcion == 3) {
        $dato->setSetecaspiranteOculto(1);
        $cruddatos->actualizar($dato);
        echo ("Registro Actualizando");
    } elseif ($opcion == 4) { //Actualixar solo datos personales
        $dato = $cruddatos->obtenerSetecaspirante($_POST['numeroidentificacionsetec']);
        $dato->setNumeroidentificacionsetec($_POST['numeroidentificacionsetec']);
        $dato->setPrimerApellidosetec($_POST['primerApellidosetec']);
        $dato->setSegundoApellidosetec($_POST['segundoApellidosetec']);
        $dato->setPrimerNombresetec($_POST['primerNombresetec']);
        $dato->setSegundoNombresetec($_POST['segundoNombresetec']);
        $dato->setFechanacimiento($_POST['fechanacimiento']);
        $dato->setFkgenerosetec($_POST['fkgenerosetec']);
        $cruddatos->actualizar($dato);
        echo ("Registro Actualizando");
    } elseif ($opcion == 5) { //Actualixar solo datos Direccion
        $dato = $cruddatos->obtenerSetecaspirante($_POST['numeroidentificacionsetec']);
        $dato->setParroquiasetec($_POST['parroquiasetec']);
        $dato->setDireccionsetec($_POST['direccionsetec']);
        $cruddatos->actualizar($dato);
        echo ("Registro Actualizando");
    } elseif ($opcion == 6) { //Actualixar solo datos Discapacidad
        $dato = $cruddatos->obtenerSetecaspirante($_POST['numeroidentificacionsetec']);
        $dato->setFktipodiscapacidad($_POST['fktipodiscapacidad']);
        $cruddatos->actualizar($dato);
        echo ("Registro Actualizando");
    } elseif ($opcion == 7) { //Actualixar solo datos Contactos
        $dato = $cruddatos->obtenerSetecaspirante($_POST['numeroidentificacionsetec']);
        $dato->setCorreoelectronicoSetec($_POST['correoelectronicoSetec']);
        $dato->setTelefonosetec($_POST['telefonosetec']);
        $dato->setCelularsetec($_POST['celularsetec']);
        $cruddatos->actualizar($dato);
        echo ("Registro Actualizando");
    } elseif ($opcion == 8) { //Actualixar solo datos Formacion
        $dato = $cruddatos->obtenerSetecaspirante($_POST['numeroidentificacionsetec']);
        $dato->setFkformacionArtesano($_POST['fkformacionArtesano']);
        $dato->setInstruccionRegistroCivil($_POST['instruccionRegistroCivil']);
        $dato->setSetecaspiinstriccionseleccionada($_POST['setecaspiinstriccionseleccionada']);
        $cruddatos->actualizar($dato);
        echo ("Registro Actualizando");
    }
}
try {
    echo opcionSetecAspirante();
} catch (\Throwable $e) {
    echo $e;
}
