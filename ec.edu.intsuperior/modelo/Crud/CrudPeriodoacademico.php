<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Periodoacademico.php");
use Crud\Db;
use Clasesphp\Periodoacademico;
class CrudPeriodoacademico{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public  function mostrar(){
			$db=Db::conectar();
			$listaperiodoacademico=null;
			$select=$db->query("SELECT * FROM periodoacademico;");

			foreach($select->fetchAll() as $periodoacademico){
				$myperiodoacademico= new Periodoacademico();
				$myperiodoacademico->set_periodoacademicoId($periodoacademico['periodoacademicoId']);
				$myperiodoacademico->set_codigo($periodoacademico['codigoPeriodo']);
				$myperiodoacademico->set_periodoAcademico($periodoacademico['PeriodoAcademico']);
				$myperiodoacademico->set_fechaInicio($periodoacademico['fechaInicio']);
				$myperiodoacademico->set_duracionPeriodoAcademico($periodoacademico['duracionPeriodoAcademico']);
				$myperiodoacademico->set_anioPeriodoAcademico($periodoacademico['anioPeriodoAcademico']);
				$myperiodoacademico->set_actual($periodoacademico['actual']);
				$myperiodoacademico->set_ciclo( $periodoacademico['cicloperiodo_idcicloperiodo']);
				$myperiodoacademico->set_oculto($periodoacademico['periodoacademicoOculto']);
				$listaperiodoacademico[]=$myperiodoacademico;
			}
			return $listaperiodoacademico;
		}
		   public  function obtenerPeriodoacademico($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM periodoacademico WHERE periodoacademicoId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$periodoacademico=$select->fetch();
			$myperiodoacademico= new Periodoacademico();
			$myperiodoacademico->set_periodoacademicoId($periodoacademico['periodoacademicoId']);
			$myperiodoacademico->set_codigo($periodoacademico['codigoPeriodo']);
			$myperiodoacademico->set_periodoAcademico($periodoacademico['PeriodoAcademico']);
			$myperiodoacademico->set_fechaInicio($periodoacademico['fechaInicio']);
			$myperiodoacademico->set_duracionPeriodoAcademico($periodoacademico['duracionPeriodoAcademico']);
			$myperiodoacademico->set_anioPeriodoAcademico($periodoacademico['anioPeriodoAcademico']);
			$myperiodoacademico->set_actual($periodoacademico['actual']);
			$myperiodoacademico->set_ciclo( $periodoacademico['cicloperiodo_idcicloperiodo']);
			$myperiodoacademico->set_oculto($periodoacademico['periodoacademicoOculto']);
			return $myperiodoacademico;
		}
		public  function obtenerPeriodoacademicoCodigo($codigo){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM periodoacademico WHERE codigoPeriodo=:id');
			$select->bindValue('id',$codigo);
			$select->execute();
			$periodoacademico=$select->fetch();
			$myperiodoacademico= new Periodoacademico();
			$myperiodoacademico->set_periodoacademicoId($periodoacademico['periodoacademicoId']);
			$myperiodoacademico->set_codigo($periodoacademico['codigoPeriodo']);
			$myperiodoacademico->set_periodoAcademico($periodoacademico['PeriodoAcademico']);
			$myperiodoacademico->set_fechaInicio($periodoacademico['fechaInicio']);
			$myperiodoacademico->set_duracionPeriodoAcademico($periodoacademico['duracionPeriodoAcademico']);
			$myperiodoacademico->set_anioPeriodoAcademico($periodoacademico['anioPeriodoAcademico']);
			$myperiodoacademico->set_actual($periodoacademico['actual']);
			$myperiodoacademico->set_ciclo( $periodoacademico['cicloperiodo_idcicloperiodo']);
			$myperiodoacademico->set_oculto($periodoacademico['periodoacademicoOculto']);
			return $myperiodoacademico;
		}
		 public  function obtenerPeriodoAcademicoActual(){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM periodoacademico WHERE actual=1');
			$select->execute();
			$periodoacademico=$select->fetch();
			$myperiodoacademico= new Periodoacademico();
			$myperiodoacademico->set_periodoacademicoId($periodoacademico['periodoacademicoId']);
			$myperiodoacademico->set_codigo($periodoacademico['codigoPeriodo']);
			$myperiodoacademico->set_periodoAcademico($periodoacademico['PeriodoAcademico']);
			$myperiodoacademico->set_fechaInicio($periodoacademico['fechaInicio']);
			$myperiodoacademico->set_duracionPeriodoAcademico($periodoacademico['duracionPeriodoAcademico']);
			$myperiodoacademico->set_anioPeriodoAcademico($periodoacademico['anioPeriodoAcademico']);
			$myperiodoacademico->set_actual($periodoacademico['actual']);
			$myperiodoacademico->set_ciclo( $periodoacademico['cicloperiodo_idcicloperiodo']);
			$myperiodoacademico->set_oculto($periodoacademico['periodoacademicoOculto']);
			return $myperiodoacademico;
		}
		 public  function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT PeriodoAcademico FROM periodoacademico WHERE periodoacademicoId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$periodoacademico=$select->fetch();
				$myperiodoacademico=($periodoacademico['PeriodoAcademico']);

			return $myperiodoacademico;
		}
}

?>