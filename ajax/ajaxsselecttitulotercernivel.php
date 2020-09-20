<?php
require_once("../Crud/CrudTituloTercerNivel.php");

use Clasesphp\Titulotercernivel;
use Crud\CrudTituloTercerNivel;

function cargartituloTercerNivel($opt)
{
    $oCrudd = new CrudTituloTercerNivel();
    $listad = $oCrudd->mostrar();
    $d = new Titulotercernivel();
    $lista = '<option disabled><label>Seleccione un Titulo de Tercer Nivel</label></option>"';
    foreach ($listad as $d) {
        if ($opt == $d->getTituloTercerNivelId()) {
            $lista .= " <option selected='selected' value='" . $d->getTituloTercerNivelId() . "'><label>" ./**/ ($d->getTituloTercerNivel()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $d->getTituloTercerNivelId() . "'><label>" ./**/ ($d->getTituloTercerNivel()) . "</label></option>";
        }
    }
    return $lista;
}
