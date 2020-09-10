<?php

require_once("../Crud/CrudCategoriaMigratoria.php");
require_once("respuestasgenerales.php");

use Clasesphp\Categoriasmigratoria;
use Crud\CrudCategoriasMigratoria;

session_start();

function opcionTipodocumento()
{
    try {
        $datos = new Categoriasmigratoria();
        $crud = new CrudCategoriasMigratoria();

        $datos->setCategoriaMigratoriaId($_POST['id']);
        $datos->setCategoriaMigratoria($_POST['nom']);
        $datos->setCategoriasmigratoriacodigo($_POST['cod']);
        $datos->setCategoriasmigratoriaOculto($_POST['eliminar']);
        $datos->setCategoriasmigratoriaAccion($_POST['actualizar']);
        $datos->setCategoriasmigratoriafecha(date("Y-m-d"));
        $datos->setCategoriasmigratoriauser($_SESSION['tipouser'] . $_SESSION['user']);


        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->setCategoriaMigratoriaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->getCategoriaMigratoriaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
