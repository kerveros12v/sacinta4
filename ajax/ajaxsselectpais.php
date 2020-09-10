<?php
require_once("../clasesphp/Paises.php");
require_once("../Crud/CrudPaises.php");

use Clasesphp\Paises;
use Crud\CrudPaises;

function cargarPais($opt)
{
    $oCrudPais = new CrudPaises();
    $listaPaises = $oCrudPais->mostrar();
    $pais1 = new Paises();
    $lista = '<option selected="selected" value="0"><label>Seleccione un Pais</label></option>"';
    foreach ($listaPaises as $pais1) {
        if ($opt == $pais1->getPaisId()) {
            $lista .= " <option  selected='selected' value='" . $pais1->getPaisId() . "'><label>" . ($pais1->getPais()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $pais1->getPaisId() . "'><label>" . ($pais1->getPais()) . "</label></option>";
        }
    }
    return $lista;
}
