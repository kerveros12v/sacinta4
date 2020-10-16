<?php

require_once("../Crud/CrudSetecCertificacion.php");
require_once("../Crud/CrudSetecPerfil.php");

use Clasesphp\SetecCertificacion;
use Crud\CrudSetecCertificacion;
use Crud\CrudSetecPerfil;

function cargarSetecCertificacion($opt)
{
    $oCrudd1 = new CrudSetecCertificacion();
    $crudperfil = new CrudSetecPerfil();
    $listad1 = $oCrudd1->mostrar();
    $d1 = new SetecCertificacion();
    $lista = '<option disabled><label>Seleccione una Certificacion</label></option>';
    foreach ($listad1 as $d1) {
        if ($opt == $d1->getIdsetecCertificacion()) {
            $lista .= " <option selected='selected' value='" . $d1->getIdsetecCertificacion() . "'><label>" ./**/ ($crudperfil->obtenerDato($d1->getFkidsetecperfil())) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $d1->getIdsetecCertificacion() . "'><label>" ./**/ ($crudperfil->obtenerDato($d1->getFkidsetecperfil())) . "</label></option>";
        }
    }
    return $lista;
}
/*
try {
    echo cargarSetecCertificacion(0);
} catch (\Throwable $e) {
    // throw ;
    echo $e;
}
*/