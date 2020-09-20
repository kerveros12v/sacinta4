<?php
require_once("../Crud/crudPermisosDepartamentos.php");

use Crud\CrudPermisosDepartamentos;

function cargarlstdepartamentos($opt)
{
    $crud1 = new CrudPermisosDepartamentos();
    $listag = $crud1->mostrar();

    $lista = '<option disabled><label>Seleccione un Perfil</label></option>"';
    foreach ($listag as $d) {
        if ($opt == $d->getIddepartamentos()) {
            $lista .= " <option  selected='selected' value='" . $d->getIddepartamentos() . "'><label>" . ($d->getDepartamento()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $d->getIddepartamentos() . "'><label>" . ($d->getDepartamento()) . "</label></option>";
        }
    }
    return $lista;
}
