<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Ingresosestudiante.php");
use Clasesphp\Ingresosestudiante;
class CrudIngresosestudiante{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listaingresosestudiante=null;
			$select=$db->query("SELECT * FROM ingresosestudiante;");
			foreach($select->fetchAll() as $ingresosestudiante){
				$myingresosestudiante= new Ingresosestudiante();
				$myingresosestudiante->set_ingresosestudianteId($ingresosestudiante['ingresosestudianteId']);
				$myingresosestudiante->set_ingresosestudiantecodigo($ingresosestudiante['ingresosestudiantecodigo']);
				$myingresosestudiante->set_ingresosestudiante($ingresosestudiante['ingresosestudiante']);
				$myingresosestudiante->set_ingresosestudianteOculto($ingresosestudiante['ingresosestudianteOculto']);
				$myingresosestudiante->set_ingresosestudianteAccion($ingresosestudiante['ingresosestudianteAccion']);
				$myingresosestudiante->set_ingresosestudiantefecha($ingresosestudiante['ingresosestudiantefecha']);
				$myingresosestudiante->set_ingresosestudianteuser($ingresosestudiante['ingresosestudianteuser']);
				$listaingresosestudiante[]=$myingresosestudiante;
			}
			return $listaingresosestudiante;
		}
		   public function obtenerIngresosestudiante($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM ingresosestudiante WHERE ingresosestudianteId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$ingresosestudiante=$select->fetch();
				$myingresosestudiante= new Ingresosestudiante();
				$myingresosestudiante->set_ingresosestudianteId($ingresosestudiante['ingresosestudianteId']);
				$myingresosestudiante->set_ingresosestudiantecodigo($ingresosestudiante['ingresosestudiantecodigo']);
				$myingresosestudiante->set_ingresosestudiante($ingresosestudiante['ingresosestudiante']);
				$myingresosestudiante->set_ingresosestudianteOculto($ingresosestudiante['ingresosestudianteOculto']);
				$myingresosestudiante->set_ingresosestudianteAccion($ingresosestudiante['ingresosestudianteAccion']);
				$myingresosestudiante->set_ingresosestudiantefecha($ingresosestudiante['ingresosestudiantefecha']);
				$myingresosestudiante->set_ingresosestudianteuser($ingresosestudiante['ingresosestudianteuser']);

			return $myingresosestudiante;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM ingresosestudiante WHERE ingresosestudianteId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$ingresosestudiante=$select->fetch();
				$myingresosestudiante=($ingresosestudiante['ingresosestudiante']);

			return $myingresosestudiante;
		}
		public function actualizar($ingresosestudiante){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `ingresosestudiante`
			SET
			`ingresosestudianteId` = :ingresosestudianteId1,
			`ingresosestudiantecodigo` = :ingresosestudiantecodigo1,
			`ingresosestudiante` = :ingresosestudiante1,
			`ingresosestudianteOculto` = :ingresosestudianteOculto1,
			`ingresosestudianteAccion` = :ingresosestudianteAccion1,
			`ingresosestudiantefecha` = :ingresosestudiantefecha1,
			`ingresosestudianteuser` = :ingresosestudianteuser1
			WHERE `ingresosestudianteId` = :ingresosestudianteId1;');
			$actualizar->bindValue('ingresosestudianteId1',$ingresosestudiante->get_ingresosestudianteId());
			$actualizar->bindValue('ingresosestudiantecodigo1',$ingresosestudiante->get_ingresosestudiantecodigo());
			$actualizar->bindValue('ingresosestudiante1',$ingresosestudiante->get_ingresosestudiante());
			$actualizar->bindValue('ingresosestudianteOculto1',$ingresosestudiante->get_ingresosestudianteOculto());
			$actualizar->bindValue('ingresosestudianteAccion1',$ingresosestudiante->get_ingresosestudianteAccion());
			$actualizar->bindValue('ingresosestudiantefecha1',$ingresosestudiante->get_ingresosestudiantefecha());
			$actualizar->bindValue('ingresosestudianteuser1',$ingresosestudiante->get_ingresosestudianteuser());
			$actualizar->execute();
		}
		public function insertar($ingresosestudiante){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `ingresosestudiante`
			(`ingresosestudianteId`,
			`ingresosestudiantecodigo`,
			`ingresosestudiante`,
			`ingresosestudianteOculto`,
			`ingresosestudianteAccion`,
			`ingresosestudiantefecha`,
			`ingresosestudianteuser`)
			VALUES
			(:ingresosestudianteId1,
			:ingresosestudiantecodigo1,
			:ingresosestudiante1,
			:ingresosestudianteOculto1,
			:ingresosestudianteAccion1,
			:ingresosestudiantefecha1,
			:ingresosestudianteuser1);');
			$insert->bindValue('ingresosestudianteId1',$ingresosestudiante->get_ingresosestudianteId());
			$insert->bindValue('ingresosestudiantecodigo1',$ingresosestudiante->get_ingresosestudiantecodigo());
			$insert->bindValue('ingresosestudiante1',$ingresosestudiante->get_ingresosestudiante());
			$insert->bindValue('ingresosestudianteOculto1',$ingresosestudiante->get_ingresosestudianteOculto());
			$insert->bindValue('ingresosestudianteAccion1',$ingresosestudiante->get_ingresosestudianteAccion());
			$insert->bindValue('ingresosestudiantefecha1',$ingresosestudiante->get_ingresosestudiantefecha());
			$insert->bindValue('ingresosestudianteuser1',$ingresosestudiante->get_ingresosestudianteuser());
			$insert->execute();

		}
}

?>