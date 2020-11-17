<?php
require_once("../Crud/CrudCursos.php");
require_once("respuestasgenerales.php");

use Clasesphp\Cursos;
use Crud\CrudCursos;

session_start();

function opcionCursos()
{
    try {
        $dato = new Cursos();
        $crud = new CrudCursos();
        $dato->setIdCursos($_POST['id']);
        $dato->setCursoscodigo(strtoupper($_POST['cod']));
        $dato->setFkcarrerasId(strtoupper($_POST['fkcarrerasId']));
        $dato->setFkparaleloId($_POST['fkparaleloId']);
        $dato->setFknivelAcademicoQueCursaId($_POST['fknivelAcademicoQueCursaId']);
        $dato->setFkjJornadaAcademicaId($_POST['fkjJornadaAcademicaId']);
        $dato->setFkperiodo($_POST['fkperiodo']);
        $dato->setCursosOculto($_POST['eliminar']);
        $dato->setCursosAccion($_POST['actualizar']);
        $dato->setCursosfecha(date("Y-m-d"));
        $dato->setCursosuser($_SESSION['tipouser'] . $_SESSION['user']);

        $opcion = $_POST['opt'];
        if ($_SESSION['user'] != "") {
            if ($opcion == 1) {
                $dato->setIdCursos(null);
                $crud->insertar($dato);
                return (guardarR());
            }
            if ($opcion == 2) {
                $crud->actualizar($dato);
                return (actualizarR());
            }
            if ($opcion == optEliminar()) {
                $crud->eliminar($dato->getIdCursos());
                return (eliminarR());
            }
        }
        echo (tiempoExedido());
    } catch (Exception $e) {
        return "¡Seleccione primero una Instituto";
    }
}
echo opcionCursos();
