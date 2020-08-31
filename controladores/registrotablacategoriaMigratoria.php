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

        $datos->set_categoriaMigratoriaId($_POST['id']);
        $datos->set_categoriaMigratoria($_POST['nom']);
        $datos->set_categoriasmigratoriacodigo($_POST['cod']);
        $datos->set_categoriasmigratoriaOculto($_POST['eliminar']);
        $datos->set_categoriasmigratoriaAccion($_POST['actualizar']);
        $datos->set_categoriasmigratoriafecha(date("Y-m-d"));
        $datos->set_categoriasmigratoriauser($_SESSION['tipouser'] . $_SESSION['user']);


        $opcion = $_POST['opt'];

        if ($_SESSION['user'] != "") {

            if ($opcion == 1) {
                $datos->set_categoriaMigratoriaId(null);
                $crud->insertar($datos);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($datos);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($datos->get_categoriaMigratoriaId());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (\Throwable $th) {
        return $th;
    }
}
echo opcionTipodocumento();
