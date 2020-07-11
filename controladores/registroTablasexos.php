<?php
require_once("../Crud/CrudSexo.php");
require_once("respuestasgenerales.php");
session_start();
use Clasesphp\Sexos;
use Crud\CrudSexo;
function opcionsexo()
{
    try {
        $dato = new Sexos();
        $crud = new CrudSexo();
        $dato->set_sexoId($_POST['id']);
        $dato->set_sexocodigo($_POST['cod']);
        $dato->set_sexo(strtoupper($_POST['nom']));
        $dato->set_sexoOculto($_POST['eliminar']);
        $dato->set_sexoAccion($_POST['actualizar']);
        $dato->set_sexofecha(date("Y-m-d"));
        $dato->set_sexouser($_SESSION['tipouser'] . $_SESSION['user']);
        $opcion = $_POST['opt'];
        if ($_SESSION['user']!="") {
            if ($opcion == 1) {
                $dato->set_sexoId(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->get_sexoId());
                return (eliminarR());
            }
        }
        echo(tiempoExedido());
    } catch (Exception $e) {
        return $e;
    }
}
echo opcionsexo();
