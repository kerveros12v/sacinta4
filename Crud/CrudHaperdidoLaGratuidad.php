<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Haperdidolagratuidad.php");
use Clasesphp\Haperdidolagratuidad;
class CrudHaperdidoLaGratuidad{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listahaperdidolagratuidad=null;
			$select=$db->query("SELECT * FROM `haperdidolagratuidad`");

			foreach($select->fetchAll() as $haperdidolagratuidad){
				$myhaperdidolagratuidad= new Haperdidolagratuidad();
				$myhaperdidolagratuidad->set_HaPerdidoLaGratuidadId($haperdidolagratuidad['HaPerdidoLaGratuidadId']);
				$myhaperdidolagratuidad->set_haperdidolagratuidadcodigo($haperdidolagratuidad['haperdidolagratuidadcodigo']);
				$myhaperdidolagratuidad->set_haPerdidoLaGratuidad($haperdidolagratuidad['haPerdidoLaGratuidad']);
				$myhaperdidolagratuidad->set_haperdidolagratuidadOculto($haperdidolagratuidad['haperdidolagratuidadOculto']);
				$myhaperdidolagratuidad->set_haperdidolagratuidadAccion($haperdidolagratuidad['haperdidolagratuidadAccion']);
				$myhaperdidolagratuidad->set_haperdidolagratuidadfecha($haperdidolagratuidad['haperdidolagratuidadfecha']);
				$myhaperdidolagratuidad->set_haperdidolagratuidaduser($haperdidolagratuidad['haperdidolagratuidaduser']);
				$listahaperdidolagratuidad[]=$myhaperdidolagratuidad;
			}
			return $listahaperdidolagratuidad;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM haperdidolagratuidad WHERE HaPerdidoLaGratuidadId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerHaPerdidoLaGratuidad($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM haperdidolagratuidad WHERE HaPerdidoLaGratuidadId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$haperdidolagratuidad=$select->fetch();
				$myhaperdidolagratuidad= new Haperdidolagratuidad();
				$myhaperdidolagratuidad->set_HaPerdidoLaGratuidadId($haperdidolagratuidad['HaPerdidoLaGratuidadId']);
				$myhaperdidolagratuidad->set_haperdidolagratuidadcodigo($haperdidolagratuidad['haperdidolagratuidadcodigo']);
				$myhaperdidolagratuidad->set_haPerdidoLaGratuidad($haperdidolagratuidad['haPerdidoLaGratuidad']);
				$myhaperdidolagratuidad->set_haperdidolagratuidadOculto($haperdidolagratuidad['haperdidolagratuidadOculto']);
				$myhaperdidolagratuidad->set_haperdidolagratuidadAccion($haperdidolagratuidad['haperdidolagratuidadAccion']);
				$myhaperdidolagratuidad->set_haperdidolagratuidadfecha($haperdidolagratuidad['haperdidolagratuidadfecha']);
				$myhaperdidolagratuidad->set_haperdidolagratuidaduser($haperdidolagratuidad['haperdidolagratuidaduser']);

			return $myhaperdidolagratuidad;
		}
				public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT haPerdidoLaGratuidad FROM haperdidolagratuidad WHERE HaPerdidoLaGratuidadId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$haperdidolagratuidad=$select->fetch();
				$myhaperdidolagratuidad=($haperdidolagratuidad['haPerdidoLaGratuidad']);

			return $myhaperdidolagratuidad;
		}
		public function actualizar($haperdidolagratuidad){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `haperdidolagratuidad`
			SET
			`HaPerdidoLaGratuidadId` = :HaPerdidoLaGratuidadId1,
			`haperdidolagratuidadcodigo` = :haperdidolagratuidadcodigo1,
			`haPerdidoLaGratuidad` = :haPerdidoLaGratuidad1,
			`haperdidolagratuidadOculto` = :haperdidolagratuidadOculto1,
			`haperdidolagratuidadAccion` = :haperdidolagratuidadAccion1,
			`haperdidolagratuidadfecha` = :haperdidolagratuidadfecha1,
			`haperdidolagratuidaduser` = :haperdidolagratuidaduser1
			WHERE `HaPerdidoLaGratuidadId` = :HaPerdidoLaGratuidadId1;');
			$actualizar->bindValue('HaPerdidoLaGratuidadId1',$haperdidolagratuidad->get_HaPerdidoLaGratuidadId());
			$actualizar->bindValue('haperdidolagratuidadcodigo1',$haperdidolagratuidad->get_haperdidolagratuidadcodigo());
			$actualizar->bindValue('haPerdidoLaGratuidad1',$haperdidolagratuidad->get_haPerdidoLaGratuidad());
			$actualizar->bindValue('haperdidolagratuidadOculto1',$haperdidolagratuidad->get_haperdidolagratuidadOculto());
			$actualizar->bindValue('haperdidolagratuidadAccion1',$haperdidolagratuidad->get_haperdidolagratuidadAccion());
			$actualizar->bindValue('haperdidolagratuidadfecha1',$haperdidolagratuidad->get_haperdidolagratuidadfecha());
			$actualizar->bindValue('haperdidolagratuidaduser1',$haperdidolagratuidad->get_haperdidolagratuidaduser());
			$actualizar->execute();
		}
		public function insertar($haperdidolagratuidad){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `haperdidolagratuidad`
			(`HaPerdidoLaGratuidadId`,
			`haperdidolagratuidadcodigo`,
			`haPerdidoLaGratuidad`,
			`haperdidolagratuidadOculto`,
			`haperdidolagratuidadAccion`,
			`haperdidolagratuidadfecha`,
			`haperdidolagratuidaduser`)
			VALUES
			(:HaPerdidoLaGratuidadId1,
			:haperdidolagratuidadcodigo1,
			:haPerdidoLaGratuidad1,
			:haperdidolagratuidadOculto1,
			:haperdidolagratuidadAccion1,
			:haperdidolagratuidadfecha1,
			:haperdidolagratuidaduser1);');
			$insert->bindValue('HaPerdidoLaGratuidadId1',$haperdidolagratuidad->get_HaPerdidoLaGratuidadId());
			$insert->bindValue('haperdidolagratuidadcodigo1',$haperdidolagratuidad->get_haperdidolagratuidadcodigo());
			$insert->bindValue('haPerdidoLaGratuidad1',$haperdidolagratuidad->get_haPerdidoLaGratuidad());
			$insert->bindValue('haperdidolagratuidadOculto1',$haperdidolagratuidad->get_haperdidolagratuidadOculto());
			$insert->bindValue('haperdidolagratuidadAccion1',$haperdidolagratuidad->get_haperdidolagratuidadAccion());
			$insert->bindValue('haperdidolagratuidadfecha1',$haperdidolagratuidad->get_haperdidolagratuidadfecha());
			$insert->bindValue('haperdidolagratuidaduser1',$haperdidolagratuidad->get_haperdidolagratuidaduser());
			$insert->execute();

		}
	}

?>