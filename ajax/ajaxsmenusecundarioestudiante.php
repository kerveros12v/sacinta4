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
        if ($crudpermisos->mostrardepartamentosparametro($key->get_codDepartamento()) == 3)

            $lstdepartamentos[] = $key->get_departamentosSubdivision();
    }
    $unicosDepartamentos = array_unique($lstdepartamentos);
    asort($unicosDepartamentos);

    if ($unicosDepartamentos != null) {
        foreach ($unicosDepartamentos as $lp1) {
             foreach ($lstpermisos as $dp) {
                if ($lp1 == $dp->get_departamentosSubdivision()) {
                    $auxonclick="cargarDatosCampo('" . $dp->get_url() ."')";
                    echo ('<li><a href=# onclick="'.$auxonclick.'" >' . $crudpermisos->mostrarDepartamento($dp->get_etiqueta())  . '</a></li>');
                }
            }

        }
    }
} catch (Exception $ex) {
    echo ("<script>console.log('" . $ex . "');</script>");
}
