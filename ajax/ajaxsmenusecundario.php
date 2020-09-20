<?php
require_once("../Crud/crudPermisos.php");

use Crud\CrudPermisos;

session_start();
$crudpermisos = new CrudPermisos();
try {
    $a = isset($_SESSION['acceso']) ? $_SESSION['acceso'] : "";

    $lstdepartamentos = null;
    $lstpermisos = $crudpermisos->mostrarPermiso($a);
    $aux1 = 0;
    foreach ($lstpermisos as $key) {
        if ($crudpermisos->mostrardepartamentosparametro($key->getCodDepartamento()) == 2)

            $lstdepartamentos[] = $key->getDepartamentosSubdivision();
    }
    $unicosDepartamentos = array_unique($lstdepartamentos);
    asort($unicosDepartamentos);

    if ($unicosDepartamentos != null) {
        foreach ($unicosDepartamentos as $lp1) {
            asort($lstpermisos);
            foreach ($lstpermisos as $dp) {
                if ($lp1 == $dp->getDepartamentosSubdivision()) {
                    echo ('<a href="' . $dp->getUrl() . '" target="contenedor1">' . $dp->getEtiqueta()  . '</a>');
                }
            }
        }
    }
} catch (Exception $ex) {
    echo ("<script>console.log('" . $ex . "');</script>");
}
