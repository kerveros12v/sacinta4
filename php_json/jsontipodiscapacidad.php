<?php

require_once("../Crud/CrudTipoDiscapacidad.php");

use Clasesphp\Tipodiscapacidad;
use Crud\CrudTipoDiscapacidad;

function cargartipodiscapacidad()
{
    $lista = null;

    $tipodiscapacidad = new Tipodiscapacidad();
    $crudtipodiscapacidad = new CrudTipoDiscapacidad();
    $lsttipodiscapacidad = $crudtipodiscapacidad->mostrar();
    foreach ($lsttipodiscapacidad as $tipodiscapacidad) {
        $lista[] = $tipodiscapacidad->formatoArray();
    }

    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargartipodiscapacidad());
