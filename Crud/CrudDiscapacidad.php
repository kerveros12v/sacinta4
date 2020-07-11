<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Discapacidad.php");
use Clasesphp\Discapacidad;
class CrudDiscapacidad{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listadiscapacidad=null;
			$select=$db->query("SELECT * FROM `discapacidad`");

			foreach($select->fetchAll() as $discapac1){
		 		$mydiscapac= new Discapacidad();
				$mydiscapac->set_discapacidadId($discapac1['discapacidadId']);
				$mydiscapac->set_discapacidadcodigo($discapac1['discapacidadcodigo']);
				$mydiscapac->set_discapacidad($discapac1['discapacidad']);
				$mydiscapac->set_discapacidadOculto($discapac1['discapacidadOculto']);
				$mydiscapac->set_discapacidadAccion($discapac1['discapacidadAccion']);
				$mydiscapac->set_discapacidadfecha($discapac1['discapacidadfecha']);
				$mydiscapac->set_discapacidaduser($discapac1['discapacidaduser']);
				$listadiscapacidad[]=$mydiscapac;
			}
			return $listadiscapacidad;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM discapacidad WHERE discapacidadId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerDiscapacidad($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM discapacidad WHERE discapacidadId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$discapac1=$select->fetch();
			$mydiscapac= new Discapacidad();
			$mydiscapac->set_discapacidadId($discapac1['discapacidadId']);
			$mydiscapac->set_discapacidadcodigo($discapac1['discapacidadcodigo']);
			$mydiscapac->set_discapacidad($discapac1['discapacidad']);
			$mydiscapac->set_discapacidadOculto($discapac1['discapacidadOculto']);
			$mydiscapac->set_discapacidadAccion($discapac1['discapacidadAccion']);
			$mydiscapac->set_discapacidadfecha($discapac1['discapacidadfecha']);
			$mydiscapac->set_discapacidaduser($discapac1['discapacidaduser']);

			return $mydiscapac;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT discapacidad FROM discapacidad WHERE discapacidadId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$discapac1=$select->fetch();
			$mydiscapac=($discapac1['discapacidad']);

			return $mydiscapac;
		}
		public function actualizar($discapac1){
			$db=Db::conectar();

			$actualizar=$db->prepare('UPDATE `discapacidad`
			SET
			`discapacidadId` = :discapacidadId1,
			`discapacidadcodigo` = :discapacidadcodigo1,
			`discapacidad` = :discapacidad1,
			`discapacidadOculto` = :discapacidadOculto1,
			`discapacidadAccion` = :discapacidadAccion1,
			`discapacidadfecha` = :discapacidadfecha1,
			`discapacidaduser` = :discapacidaduser1
			WHERE `discapacidadId` = :discapacidadId1;');
			$actualizar->bindValue('discapacidadId1',$discapac1->get_discapacidadId());
			$actualizar->bindValue('discapacidadcodigo1',$discapac1->get_discapacidadcodigo());
			$actualizar->bindValue('discapacidad1',$discapac1->get_discapacidad());
			$actualizar->bindValue('discapacidadOculto1',$discapac1->get_discapacidadOculto());
			$actualizar->bindValue('discapacidadAccion1',$discapac1->get_discapacidadAccion());
			$actualizar->bindValue('discapacidadfecha1',$discapac1->get_discapacidadfecha());
			$actualizar->bindValue('discapacidaduser1',$discapac1->get_discapacidaduser());
			$actualizar->execute();
		}
		public function insertar($discapac1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `discapacidad`
			(`discapacidadId`,
			`discapacidadcodigo`,
			`discapacidad`,
			`discapacidadOculto`,
			`discapacidadAccion`,
			`discapacidadfecha`,
			`discapacidaduser`)
			VALUES
			(:discapacidadId1,
			:discapacidadcodigo1,
			:discapacidad1,
			:discapacidadOculto1,
			:discapacidadAccion1,
			:discapacidadfecha1,
			:discapacidaduser1);');
			$insert->bindValue('discapacidadId1',$discapac1->get_discapacidadId());
			$insert->bindValue('discapacidadcodigo1',$discapac1->get_discapacidadcodigo());
			$insert->bindValue('discapacidad1',$discapac1->get_discapacidad());
			$insert->bindValue('discapacidadOculto1',$discapac1->get_discapacidadOculto());
			$insert->bindValue('discapacidadAccion1',$discapac1->get_discapacidadAccion());
			$insert->bindValue('discapacidadfecha1',$discapac1->get_discapacidadfecha());
			$insert->bindValue('discapacidaduser1',$discapac1->get_discapacidaduser());

			$insert->execute();

		}
	}

?>