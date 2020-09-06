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
        if ($crudpermisos->mostrardepartamentosparametro($key->getCodDepartamento()) == 3)

            $lstdepartamentos[] = $key->getDepartamentosSubdivision();
    }
    $unicosDepartamentos = array_unique($lstdepartamentos);
    asort($unicosDepartamentos);

    if ($unicosDepartamentos != null) {
        foreach ($unicosDepartamentos as $lp1) {
            foreach ($lstpermisos as $dp) {
                if ($lp1 == $dp->getDepartamentosSubdivision()) {
                    $auxonclick = "cargarDatosCampo('" . $dp->getUrl() . "')";
                    echo ('<li><a href=# onclick="' . $auxonclick . '" >' . $dp->getEtiqueta() . '</a></li>');
                }
            }
        }
    }
} catch (Exception $ex) {
    echo ("<script>console.log('" . $ex . "');</script>");
}
