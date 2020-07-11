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
        if ($opt == $provinciaRecidencia->get_provinciaId()) {
            $lista .= "<option selected='selected' value='" . $provinciaRecidencia->get_provinciaId() . "'><label>" . (($provinciaRecidencia->get_provincia())) . "</label></option>";
        } else {
            $lista .= "<option value='" . $provinciaRecidencia->get_provinciaId() . "'><label>" . (($provinciaRecidencia->get_provincia())) . "</label></option>";
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
        $lista .= "<option value='" . $provinciaRecidencia->get_provinciaId() . "'><label>" . (($provinciaRecidencia->get_provincia())) . "</label></option>";
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
        if ($provincia == $provinciaRecidencia->get_provinciaId()) {
            $lista .= "<option selected='selected' value='" . $provinciaRecidencia->get_provinciaId() . "'><label>" . (($provinciaRecidencia->get_provincia())) . "</label></option>";
        } else {
            $lista .= "<option value='" . $provinciaRecidencia->get_provinciaId() . "'><label>" . (($provinciaRecidencia->get_provincia())) . "</label></option>";
        }
    }
    return $lista;
}
