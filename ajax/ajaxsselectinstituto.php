<?php
require_once("../clasesphp/Institutos.php");
require_once("../Crud/CrudInstitutos.php");
require_once("../Crud/CrudCanton.php");

use Clasesphp\Institutos;
use Crud\CrudCantones;
use Crud\CrudInstitutos;

function cargarinstitutos()
{
    $crudinstitutos = new CrudInstitutos();
    $listainstitutos = $crudinstitutos->mostrar();
    $institutos1 = new Institutos();
    $crudcanton = new CrudCantones();
    $lista = '<option selected="selected" value="0"><label>Seleccione una Institucion</label></option>';
    foreach ($listainstitutos as $institutos1) {

        $lista .= " <option value='" . $institutos1->getInstitutosId() . "'><label>" . $institutos1->getInstitutoNombre() . "(" . $crudcanton->obtenerDato($institutos1->getCantonId()) . ")</label></option>";
    }
    return $lista;
}
