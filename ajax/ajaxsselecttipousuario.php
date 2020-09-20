<?php
require_once("../Crud/crudTipoUsuario.php");

use Crud\CrudTipoUsuario;
use Clasesphp\TipoUsuario;

session_start();
function cargartipoUsuario($opt)
{
    $crudtipousuario = new CrudTipoUsuario();
    $listausuario = $crudtipousuario->mostrar();
    $dato = new TipoUsuario();
    $lista = '<option disabled><label>Seleccione un Usuario</label></option>"';
    foreach ($listausuario as $dato) {
        if ($opt == $dato->getIdtipousuario()) {
            $lista .= " <option selected='selected' value='" . $dato->getIdtipousuario() . "'><label>" . ($dato->getTipousuario()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $dato->getIdtipousuario() . "'><label>" . ($dato->getTipousuario()) . "</label></option>";
        }
    }
    return $lista;
}
