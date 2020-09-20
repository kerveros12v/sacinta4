<?php
require("../Crud/CrudProvincia.php");

use Crud\CrudProvincias;
use Clasesphp\Provincias;

function cargarProvincias($opt, $pais)
{
    $oCrudprovinciaRecidencia = new CrudProvincias();
    $listaprovinciaRecidencia = $oCrudprovinciaRecidencia->mostrarlistaporPais($pais);
    $provinciaRecidencia = new Provincias();
    $lista = '<option selected="selected" value=-1><label>Seleccione una Provincia</label></option>"';
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
    $lista = '<option selected="selected" value="0"><label>Seleccione una Provincia</label></option>"';
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
    $lista = '<option selected="selected" value="0"><label>Seleccione una Provincia</label></option>"';
    foreach ($listaprovinciaRecidencia as $provinciaRecidencia) {
        if ($provincia == $provinciaRecidencia->getProvinciaId()) {
            $lista .= "<option selected='selected' value='" . $provinciaRecidencia->getProvinciaId() . "'><label>" . (($provinciaRecidencia->getProvincia())) . "</label></option>";
        } else {
            $lista .= "<option value='" . $provinciaRecidencia->getProvinciaId() . "'><label>" . (($provinciaRecidencia->getProvincia())) . "</label></option>";
        }
    }
    return $lista;
}

function cargarProvinciaEtiqueta($opt)
{
    $oCrudprovinciaRecidencia = new CrudProvincias();
    $provincia1 = $oCrudprovinciaRecidencia->obtenerDato($opt);

    return $provincia1;
}
