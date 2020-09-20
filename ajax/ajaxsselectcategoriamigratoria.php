<?php

require_once("../Crud/CrudCategoriaMigratoria.php");

use Clasesphp\Categoriasmigratoria;
use Crud\CrudCategoriasMigratoria;

function cargarCategoriaMigratoria($opt, $pais)
{
    $oCrudcategoraMigratoria = new CrudCategoriasMigratoria();
    $listacategoriasMigratoria = $oCrudcategoraMigratoria->mostrar();
    $catmigra = new Categoriasmigratoria();
    $lista = '<option value="0"><label>Seleccione un Categoria Migratoria</label></option>"';
    foreach ($listacategoriasMigratoria as $catmigra) {
        if ($pais == 56) {
            if ($catmigra->getCategoriaMigratoriaId()  == 5) {
                $lista .= "<option  selected='selected' value='" . $catmigra->getCategoriaMigratoriaId() . "'><label>" ./**/ ($catmigra->getCategoriaMigratoria()) . "</label></option>";
            }
        } else {
            if ($opt != -1) {
                if ($opt == $catmigra->getCategoriaMigratoriaId()) {
                    $lista .= "<option  selected='selected' value='" . $catmigra->getCategoriaMigratoriaId() . "'><label>" ./**/ ($catmigra->getCategoriaMigratoria()) . "</label></option>";
                } else {
                    $lista .= "<option  value='" . $catmigra->getCategoriaMigratoriaId() . "'><label>" ./**/ ($catmigra->getCategoriaMigratoria()) . "</label></option>";
                }
            }
        }
    }
    return $lista;
}
