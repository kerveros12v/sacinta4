<?php
require_once('../Crud/CrudTipoDocumento.php');

use Clasesphp\Tipodocumento;
use Crud\CrudTipodocumento;

function cargartipodocumento($op)
{
    $oCrudTipoDocumento = new CrudTipodocumento();
    $listatipoDocumento = $oCrudTipoDocumento->mostrar();
    $tipDocument = new Tipodocumento();
    $lista = '';
    foreach ($listatipoDocumento as $tipDocument) {
        if ($op == $tipDocument->getTipoDocumentoId()) {
            $lista .= "<option selected='selected' value='" . $tipDocument->getTipoDocumentoId() . "'>" . (strtoupper($tipDocument->getTipoDocumento())) . "</option>";
        } else {
            $lista .= "<option  value='" . $tipDocument->getTipoDocumentoId() . "'>" . (strtoupper($tipDocument->getTipoDocumento())) . "</option>";
        }
    }
    return $lista;
}
