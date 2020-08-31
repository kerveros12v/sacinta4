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
        if ($opt == $dato->get_idtipousuario()) {
            $lista .= " <option selected='selected' value='" . $dato->get_idtipousuario() . "'><label>" . ($dato->get_tipousuario()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $dato->get_idtipousuario() . "'><label>" . ($dato->get_tipousuario()) . "</label></option>";
        }
    }
    return $lista;
}
