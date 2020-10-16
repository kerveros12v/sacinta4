<?php
require_once("../Crud/CrudSetecPerfil.php");

use Clasesphp\SetecPerfil;
use Crud\CrudSetecPerfil;


function cargarPerfil($opt)
{
    $oCrud = new CrudSetecPerfil();
    $listaperfil = $oCrud->mostrar();
    $perfil = new SetecPerfil();
    $lista = '<option disabled><label>Seleccione un Perfil</label></option>';
    foreach ($listaperfil as $perfil) {
        if ($opt == $perfil->getIdsetecperfil()) {
            $lista .= " <option  selected='selected' value='" . $perfil->getIdsetecperfil() . "'><label>" . ($perfil->getSetecperfilnombre()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $perfil->getIdsetecperfil() . "'><label>" . ($perfil->getSetecperfilnombre()) . "</label></option>";
        }
    }
    return $lista;
}
