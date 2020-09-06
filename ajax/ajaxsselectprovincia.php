<?php
require("../Crud/CrudProvincia.php");

use Crud\CrudProvincias;
use Clasesphp\Provincias;

function cargarProvincias($opt)
{
    $oCrudprovinciaRecidencia = new CrudProvincias();
    $listaprovinciaRecidencia = $oCrudprovinciaRecidencia->mostrar();
    $provinciaRecidencia = new Provincias();
    $lista = '<option disabled><label>Seleccione una Provincia</label></option>"';
    foreach ($listaprovinciaRecidencia as $provinciaRecidencia) {
        if ($opt == $provinciaRecidencia->getProvinciaId()) {
            $lista .= "<option selected='selected' value='" . $provinciaRecidencia->getProvinciaId() . "'><label>" . (($provinciaRecidencia->getProvincia())) . "</label></option>";
        } else {
            $lista .= "<option value='" . $provinciaRecidencia->getProvinciaId() . "'><label>" . (($provinciaRecidencia->getProvincia())) . "</label></option>";
        }
    }

    return $lista;
}

function cargarProvinciasporpais($opt)
{
    $oCrudprovinciaRecidencia = new CrudProvincias();
    $listaprovinciaRecidencia = $oCrudprovinciaRecidencia->mostrarlistaporPais($opt);
    $provinciaRecidencia = new Provincias();
    $lista = '<option disabled><label>Seleccione una Provincia</label></option>"';
    foreach ($listaprovinciaRecidencia as $provinciaRecidencia) {
        $lista .= "<option value='" . $provinciaRecidencia->getProvinciaId() . "'><label>" . (($provinciaRecidencia->getProvincia())) . "</label></option>";
    }
    return $lista;
}
function cargarProvincias_pais($opt, $provincia)
{
    $oCrudprovinciaRecidencia = new CrudProvincias();
    $listaprovinciaRecidencia = $oCrudprovinciaRecidencia->mostrarlistaporPais($opt);
    $provinciaRecidencia = new Provincias();
    $lista = '<option disabled><label>Seleccione una Provincia</label></option>"';
    foreach ($listaprovinciaRecidencia as $provinciaRecidencia) {
        if ($provincia == $provinciaRecidencia->getProvinciaId()) {
            $lista .= "<option selected='selected' value='" . $provinciaRecidencia->getProvinciaId() . "'><label>" . (($provinciaRecidencia->getProvincia())) . "</label></option>";
        } else {
            $lista .= "<option value='" . $provinciaRecidencia->getProvinciaId() . "'><label>" . (($provinciaRecidencia->getProvincia())) . "</label></option>";
        }
    }
    return $lista;
}
