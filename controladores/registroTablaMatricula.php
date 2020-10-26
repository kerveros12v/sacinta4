<?php
require_once("../Crud/CrudMatriculacion.php");
require_once("respuestasgenerales.php");
session_start();

use Clasesphp\Matriculas;
use Crud\CrudMatriculas;

function cargarregistroMatricula($mymatricula)
{
    // $mymatricula->setCodigoMatricula($_POST['codmatricula']);
    $mymatricula->setPperiodoacademicoId($_POST['periodoacademico']);
    $mymatricula->setJjornadaAcademicaId($_POST['jornadaAcademica']);
    $mymatricula->setFechaMatricula($_POST['fechaMatricula']);
    $mymatricula->setFechainicioCarrera($_POST['fechacarrera']);
    $mymatricula->setCcarrerasId($_POST['carreras']);
    $mymatricula->setTtipoMatriculaId($_POST['tipoMatricula']);
    $mymatricula->setNnivelAcademicoQueCursaId($_POST['nivelacademico']);
    $mymatricula->setPparaleloId($_POST['paralelo']);
    $mymatricula->setFkNivelFormacionPadre($_POST['formacionpadre']);
    $mymatricula->setFkNivelFormacionMadre($_POST['formacionmadre']);
    $mymatricula->setBbonoDesarrolloId($_POST['bonoDesarrollo']);
    $mymatricula->setEestudianteOcupacionId($_POST['estudianteocupacion']);
    $mymatricula->setIingresosestudianteId($_POST['estudianteingresos']);
    $mymatricula->setRrecibePensionDiferenciadaId($_POST['penciond']);
    $mymatricula->setEnumeroIdentificacion($_POST['cedula']);
    $mymatricula->setMontoCreditoEducativo($_POST['creditoe']);
    $mymatricula->setMontoAyudaEconomica($_POST['ayudaeco']);
    $mymatricula->setIngresoTotalHogar($_POST['totalingresos']);
    $mymatricula->setCantidadMiembrosHogar($_POST['miembroshogar']);
    $mymatricula->setHhaRepetidoAlMenosUnaMateriaid($_POST['nivelperdido']);
    $mymatricula->setHhaPerdidoLaGratuidadId($_POST['gratuidad']);
    $mymatricula->setMatriculasOculto($_POST['eliminar']);
    $mymatricula->setMatriculasAccion($_POST['actualizar']);
    $mymatricula->setMatriculasfecha(date("Y-m-d"));
    $mymatricula->setMatriculasuser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : "est" . $_SESSION['campbuscarest']);
}
function opcionMatricula()
{
    $dato = new Matriculas();

    $crud = new CrudMatriculas();
    $opcion = $_POST['opt'];
    if ($opcion == 1) {
        if ($crud->existe($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']) == 0) {
            cargarregistroMatricula($dato);
            $dato->setMatriculasId(null);
            $crud->insertar($dato);
            return (guardarR() . "--->>" . $dato);
        }
        $opcion = 2;
    }
    if ($opcion == 2) {
        if ($crud->existe($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']) == 1) {
            $dato = $crud->obtenerMatricula($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']);
            //echo $dato;
            cargarregistroMatricula($dato);
            $crud->actualizar($dato);
            return (actualizarR());
        }
    }

    if ($opcion == optEliminar()) {
        if ($crud->existe($_SESSION['campbuscarest'], $_POST['periodoacademico']) == 0) {
            $dato = $crud->obtenerMatricula($_SESSION['campbuscarest'], $_POST['periodoacademico']);
            cargarregistroMatricula($dato);
            //$crud->eliminar($dato->getMatriculasId());
            return (eliminarR());
        }
    }
}
try {
    echo opcionMatricula();
} catch (\Throwable $e) {
    echo $e;
}
