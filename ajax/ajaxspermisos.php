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
        if ($crudpermisos->mostrardepartamentosparametro($key->getCodDepartamento()) < 2)
            $lstdepartamentos[] = $key->getDepartamentosSubdivision();
    }
    $unicosDepartamentos = array_unique($lstdepartamentos);
    asort($unicosDepartamentos);
    if ($unicosDepartamentos != null) {
        foreach ($unicosDepartamentos as $lp1) {
            echo '<li><a href="#">' . $lp1 . '</a>';

            echo "<ul>";
            foreach ($lstpermisos as $dp) {
                if ($lp1 == $dp->getDepartamentosSubdivision()) {
                    echo ('<li><a href="' . $dp->getUrl() . '" target="contenedor">' . ($dp->getEtiqueta()) . '</a></li>');
                }
            }

            echo "</ul>";
            echo "</li>";
        }
    }
} catch (Exception $ex) {
    echo ("<script>console.log('" . $ex . "');</script>");
}
