<?php

require_once("../Crud/CrudSetecPerfil.php");

use Crud\CrudSetecPerfil;

function cargarjsonSetecPerfil()
{
    $lista = array();
    $crud = new CrudSetecPerfil();
    $datos = $crud->mostrar();
    foreach ($datos as $perfil) {
        array_push($lista, $perfil->formatoArray());
    }
    return json_encode($lista);

    ///////
}

header("Content-Type: application/json");
print_r(cargarjsonSetecPerfil());
