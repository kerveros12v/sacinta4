<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/EstudianteTrabajo.php");
use Clasesphp\EstudianteTrabajo;
class CrudEstudianteTrabajo{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public  function mostrar(){
			$db=Db::conectar();
			$listatrabajo=null;
			$select=$db->query("SELECT * FROM `estudinatetrabajo`");

			foreach($select->fetchAll() as $trabajo){
				$mytrabajo= new EstudianteTrabajo();
			  $mytrabajo->set_estudianteTrabajoid($trabajo['estudinateTrabajoid']);
			  $mytrabajo->set_nomempresa($trabajo['nomempresa']);
			  $mytrabajo->set_sectoreconomico($trabajo['sectoreconomico']);
			  $mytrabajo->set_estudinatenum($trabajo['estudinatenum']);
			  $mytrabajo->set_estudinatetrabajoperiodo($trabajo['estudinatetrabajoperiodo']);
			  $mytrabajo->set_estudinatetrabajoOculto($trabajo['estudinatetrabajoOculto']);
			  $mytrabajo->set_estudinatetrabajoAccion($trabajo['estudinatetrabajoAccion']);
			  $mytrabajo->set_estudinatetrabajofecha($trabajo['estudinatetrabajofecha']);
			  $mytrabajo->set_estudinatetrabajouser($trabajo['estudinatetrabajouser']);
				////
				$listatrabajo[]=$mytrabajo;
			}
			return $listatrabajo;
	}
		public  function existe($id){
		$db=Db::conectar();
		$select=$db->prepare("SELECT * FROM `estudinatetrabajo` where estudinatenum=:id");
		$select->bindValue('id',$id);
		$select->execute();
		if ($select->fetch()==0)return 0;
			return 1;
	}
	public  function obtenerEstudianteTrabajo($id,$periodo){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM `estudinatetrabajo` WHERE estudinatenum=:id AND estudinatetrabajoperiodo=:periodo;");
			$select->bindValue('id',$id);
			$select->bindValue('periodo',$periodo);
			$select->execute();
			$trabajo=$select->fetch();
			$mytrabajo= new EstudianteTrabajo();
				///
				$mytrabajo->set_estudianteTrabajoid($trabajo['estudinateTrabajoid']);
				$mytrabajo->set_nomempresa($trabajo['nomempresa']);
				$mytrabajo->set_sectoreconomico($trabajo['sectoreconomico']);
				$mytrabajo->set_estudinatenum($trabajo['estudinatenum']);
				$mytrabajo->set_estudinatetrabajoperiodo($trabajo['estudinatetrabajoperiodo']);
				$mytrabajo->set_estudinatetrabajoOculto($trabajo['estudinatetrabajoOculto']);
				$mytrabajo->set_estudinatetrabajoAccion($trabajo['estudinatetrabajoAccion']);
				$mytrabajo->set_estudinatetrabajofecha($trabajo['estudinatetrabajofecha']);
				$mytrabajo->set_estudinatetrabajouser($trabajo['estudinatetrabajouser']);


			return $mytrabajo;
		}
 public  function insertar($estudiantes1){
			$db=Db::conectar();
			$insert=$db->prepare("INSERT INTO `estudinatetrabajo`
			(`estudinateTrabajoid`,
			`nomempresa`,
			`sectoreconomico`,
			`estudinatenum`,
			`estudinatetrabajoperiodo`,
			`estudinatetrabajoOculto`,
			`estudinatetrabajoAccion`,
			`estudinatetrabajofecha`,
			`estudinatetrabajouser`)
			VALUES
			(:estudinateTrabajoid1,
			:nomempresa1,
			:sectoreconomico1,
			:estudinatenum1,
			:estudinatetrabajoperiodo1,
			:estudinatetrabajoOculto1,
			:estudinatetrabajoAccion1,
			:estudinatetrabajofecha1,
			:estudinatetrabajouser1);");
	$insert->bindValue('estudinateTrabajoid1',$estudiantes1->get_estudianteTrabajoid());
	$insert->bindValue('nomempresa1' ,$estudiantes1->get_nomempresa());
	$insert->bindValue('sectoreconomico1' ,$estudiantes1->get_sectoreconomico());
	$insert->bindValue('estudinatenum1' ,$estudiantes1->get_estudinatenum());
	$insert->bindValue('estudinatetrabajoperiodo1',$estudiantes1->get_estudinatetrabajoperiodo());
	$insert->bindValue('estudinatetrabajoOculto1' ,$estudiantes1->get_estudinatetrabajoOculto());
	$insert->bindValue('estudinatetrabajoAccion1' ,$estudiantes1->get_estudinatetrabajoAccion());
	$insert->bindValue('estudinatetrabajofecha1' ,$estudiantes1->get_estudinatetrabajofecha());
	$insert->bindValue('estudinatetrabajouser1' ,$estudiantes1->get_estudinatetrabajouser());
	$insert->execute();
	}

	public  function actualizar($trab){
		$db=Db::conectar();
			$actualizar=$db->prepare("UPDATE `estudinatetrabajo`
			SET
			`estudinateTrabajoid` = :estudinateTrabajoid1,
			`nomempresa` = :nomempresa1,
			`sectoreconomico` = :sectoreconomico1,
			`estudinatenum` = :estudinatenum1,
			`estudinatetrabajoperiodo` = :estudinatetrabajoperiodo1,
			`estudinatetrabajoOculto` = :estudinatetrabajoOculto1,
			`estudinatetrabajoAccion` = :estudinatetrabajoAccion1,
			`estudinatetrabajofecha` = :estudinatetrabajofecha1,
			`estudinatetrabajouser` = :estudinatetrabajouser1
			WHERE `estudinateTrabajoid` = :estudinateTrabajoid1;
			");
			$actualizar->bindValue('estudinateTrabajoid1',$trab->get_estudianteTrabajoid());
			$actualizar->bindValue('nomempresa1' ,$trab->get_nomempresa());
			$actualizar->bindValue('sectoreconomico1' ,$trab->get_sectoreconomico());
			$actualizar->bindValue('estudinatenum1' ,$trab->get_estudinatenum());
			$actualizar->bindValue('estudinatetrabajoperiodo1',$trab->get_estudinatetrabajoperiodo());
			$actualizar->bindValue('estudinatetrabajoOculto1' ,$trab->get_estudinatetrabajoOculto());
			$actualizar->bindValue('estudinatetrabajoAccion1' ,$trab->get_estudinatetrabajoAccion());
			$actualizar->bindValue('estudinatetrabajofecha1' ,$trab->get_estudinatetrabajofecha());
			$actualizar->bindValue('estudinatetrabajouser1' ,$trab->get_estudinatetrabajouser());
    $actualizar->execute();
	}

	  public  function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM `estudinatetrabajo` WHERE estudinateTrabajoid=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

}
?>