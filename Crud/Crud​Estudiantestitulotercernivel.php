<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Estudiantestitulotercernivel.php");
use Clasesphp\Estudiantestitulotercernivel;
class CrudEstudiantestitulotercernivel{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}
		public  function mostrar(){
			$db=Db::conectar();
			$listaEstudiantestitulotercernivel=null;
			$select=$db->query("SELECT * FROM `estudiantestitulotercernivel`");
			foreach($select->fetchAll() as $estudiantestitulotercernivel){

				$myestudiantestitulotercernivel= new Estudiantestitulotercernivel();
				$myestudiantestitulotercernivel->set_estudiantesTituloTercerNivelid($estudiantestitulotercernivel['EstudiantesTituloTercerNivelid']);
				$myestudiantestitulotercernivel->set_estudiantes_numeroIdentificacion($estudiantestitulotercernivel['Estudiantes_numeroIdentificacion']);
				$myestudiantestitulotercernivel->set_tituloTercerNivel_tituloTercerNivelId($estudiantestitulotercernivel['TituloTercerNivel_tituloTercerNivelId']);
				$myestudiantestitulotercernivel->set_estudiantestitulotercerniveluser($estudiantestitulotercernivel['estudiantestitulotercerniveluser']);
				$myestudiantestitulotercernivel->set_estudiantestitulotercernivelfecha($estudiantestitulotercernivel['estudiantestitulotercernivelfecha']);
				$myestudiantestitulotercernivel->set_estudiantestitulotercernivelAccion($estudiantestitulotercernivel['estudiantestitulotercernivelAccion']);
				$myestudiantestitulotercernivel->set_estudiantestitulotercernivelOculto($estudiantestitulotercernivel['estudiantestitulotercernivelOculto']);

				$listaEstudiantestitulotercernivel[]=$myestudiantestitulotercernivel;
			}
			return $listaEstudiantestitulotercernivel;
		}
		public  function existe($id){
		$db=Db::conectar();
		$select=$db->prepare("SELECT * FROM `estudiantestitulotercernivel` where Estudiantes_numeroIdentificacion=:id");
		$select->bindValue('id',$id);
		$select->execute();
		if ($select->fetch()==0)return 0;
			return 1;
	}
		    public  function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM estudiantestitulotercernivel WHERE EstudiantesTituloTercerNivelid=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public  function obtenerEstudiantestitulotercernivel($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM estudiantestitulotercernivel WHERE Estudiantes_numeroIdentificacion=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$estudiantestitulotercernivel=$select->fetch();
			$myestudiantestitulotercernivel= new Estudiantestitulotercernivel();
			$myestudiantestitulotercernivel->set_estudiantesTituloTercerNivelid($estudiantestitulotercernivel['EstudiantesTituloTercerNivelid']);
			$myestudiantestitulotercernivel->set_estudiantes_numeroIdentificacion($estudiantestitulotercernivel['Estudiantes_numeroIdentificacion']);
			$myestudiantestitulotercernivel->set_tituloTercerNivel_tituloTercerNivelId($estudiantestitulotercernivel['TituloTercerNivel_tituloTercerNivelId']);
			$myestudiantestitulotercernivel->set_estudiantestitulotercerniveluser($estudiantestitulotercernivel['estudiantestitulotercerniveluser']);
			$myestudiantestitulotercernivel->set_estudiantestitulotercernivelfecha($estudiantestitulotercernivel['estudiantestitulotercernivelfecha']);
			$myestudiantestitulotercernivel->set_estudiantestitulotercernivelAccion($estudiantestitulotercernivel['estudiantestitulotercernivelAccion']);
			$myestudiantestitulotercernivel->set_estudiantestitulotercernivelOculto($estudiantestitulotercernivel['estudiantestitulotercernivelOculto']);

			return $myestudiantestitulotercernivel;
		}
		public  function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT TituloTercerNivel_tituloTercerNivelId FROM estudiantestitulotercernivel WHERE Estudiantes_numeroIdentificacion=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$estudiantestitulotercernivel=$select->fetch();
				$myestudiantestitulotercernivel=($estudiantestitulotercernivel['TituloTercerNivel_tituloTercerNivelId']);

			return $myestudiantestitulotercernivel;
		}
		public  function actualizar($estudiantestitulotercernivel){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `estudiantestitulotercernivel`
			SET
			`EstudiantesTituloTercerNivelid` = :EstudiantesTituloTercerNivelid1,
			`Estudiantes_numeroIdentificacion` = :Estudiantes_numeroIdentificacion1,
			`TituloTercerNivel_tituloTercerNivelId` = :TituloTercerNivel_tituloTercerNivelId1,
			`estudiantestitulotercernivelOculto` = :estudiantestitulotercernivelOculto1,
			`estudiantestitulotercernivelAccion` = :estudiantestitulotercernivelAccion1,
			`estudiantestitulotercernivelfecha` = :estudiantestitulotercernivelfecha1,
			`estudiantestitulotercerniveluser` = :estudiantestitulotercerniveluser1
			WHERE `EstudiantesTituloTercerNivelid` = :EstudiantesTituloTercerNivelid1;');
			$actualizar->bindValue('EstudiantesTituloTercerNivelid1',$estudiantestitulotercernivel->get_estudiantesTituloTercerNivelid());
			$actualizar->bindValue('Estudiantes_numeroIdentificacion1',$estudiantestitulotercernivel->get_estudiantes_numeroIdentificacion());
			$actualizar->bindValue('TituloTercerNivel_tituloTercerNivelId1',$estudiantestitulotercernivel->get_tituloTercerNivel_tituloTercerNivelId());
			$actualizar->bindValue('estudiantestitulotercernivelOculto1',$estudiantestitulotercernivel->get_estudiantestitulotercernivelOculto());
			$actualizar->bindValue('estudiantestitulotercernivelAccion1',$estudiantestitulotercernivel->get_estudiantestitulotercernivelAccion());
			$actualizar->bindValue('estudiantestitulotercernivelfecha1',$estudiantestitulotercernivel->get_estudiantestitulotercernivelfecha());
			$actualizar->bindValue('estudiantestitulotercerniveluser1',$estudiantestitulotercernivel->get_estudiantestitulotercerniveluser());
			$actualizar->execute();
		}
		public  function insertar($estudiantestitulotercernivel){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `intsistemaa2`.`estudiantestitulotercernivel`
			(`EstudiantesTituloTercerNivelid`,
			`Estudiantes_numeroIdentificacion`,
			`TituloTercerNivel_tituloTercerNivelId`,
			`estudiantestitulotercernivelOculto`,
			`estudiantestitulotercernivelAccion`,
			`estudiantestitulotercernivelfecha`,
			`estudiantestitulotercerniveluser`)
			VALUES
			(:EstudiantesTituloTercerNivelid1,
			:Estudiantes_numeroIdentificacion1,
			:TituloTercerNivel_tituloTercerNivelId1,
			:estudiantestitulotercernivelOculto1,
			:estudiantestitulotercernivelAccion1,
			:estudiantestitulotercernivelfecha1,
			:estudiantestitulotercerniveluser1);');
			$insert->bindValue('EstudiantesTituloTercerNivelid1',$estudiantestitulotercernivel->get_estudiantesTituloTercerNivelid());
			$insert->bindValue('Estudiantes_numeroIdentificacion1',$estudiantestitulotercernivel->get_estudiantes_numeroIdentificacion());
			$insert->bindValue('TituloTercerNivel_tituloTercerNivelId1',$estudiantestitulotercernivel->get_tituloTercerNivel_tituloTercerNivelId());
			$insert->bindValue('estudiantestitulotercernivelOculto1',$estudiantestitulotercernivel->get_estudiantestitulotercernivelOculto());
			$insert->bindValue('estudiantestitulotercernivelAccion1',$estudiantestitulotercernivel->get_estudiantestitulotercernivelAccion());
			$insert->bindValue('estudiantestitulotercernivelfecha1',$estudiantestitulotercernivel->get_estudiantestitulotercernivelfecha());
			$insert->bindValue('estudiantestitulotercerniveluser1',$estudiantestitulotercernivel->get_estudiantestitulotercerniveluser());
			$insert->execute();
		}
	}

?>