<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Estadosciviles.php");
use Clasesphp\Estadosciviles;
class CrudEStadoCivil{
		// constructor de la clase
		public function __construct(){}

		public function mostrar(){
			$db=Db::conectar();
			$listaEstadosciviles=null;
			$select=$db->query('SELECT * FROM estadosciviles');
			foreach($select->fetchAll() as $estadosciviles1){
				$myEstadosciviles= new Estadosciviles();
				$myEstadosciviles->set_estadoCivilId($estadosciviles1['estadoCivilId']);
				$myEstadosciviles->set_estadoCivil($estadosciviles1['estadoCivil']);
				$myEstadosciviles->set_estadoscivilcodigo($estadosciviles1['estadoscivilcodigo']);
				$myEstadosciviles->set_estadoCivilOculto($estadosciviles1['estadoCivilOculto']);
				$myEstadosciviles->set_estadoCivilAccion($estadosciviles1['estadoCivilAccion']);
				$myEstadosciviles->set_estadoCivilfecha($estadosciviles1['estadoCivilfecha']);
				$myEstadosciviles->set_estadoCiviluser($estadosciviles1['estadoCiviluser']);
				$listaEstadosciviles[]=$myEstadosciviles;
			}
			return $listaEstadosciviles;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM estadosciviles WHERE estadoCivilId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerEstadosciviles($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM estadosciviles WHERE estadoCivilId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$estadosciviles1=$select->fetch();
			$myEstadosciviles= new Estadosciviles();
			$myEstadosciviles->set_estadoCivilId($estadosciviles1['estadoCivilId']);
			$myEstadosciviles->set_estadoCivil($estadosciviles1['estadoCivil']);
			$myEstadosciviles->set_estadoscivilcodigo($estadosciviles1['estadoscivilcodigo']);
			$myEstadosciviles->set_estadoCivilOculto($estadosciviles1['estadoCivilOculto']);
			$myEstadosciviles->set_estadoCivilAccion($estadosciviles1['estadoCivilAccion']);
			$myEstadosciviles->set_estadoCivilfecha($estadosciviles1['estadoCivilfecha']);
			$myEstadosciviles->set_estadoCiviluser($estadosciviles1['estadoCiviluser']);

			return $myEstadosciviles;
		}
				public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT estadoCivil FROM estadosciviles WHERE estadoCivilId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$estadosciviles1=$select->fetch();
			$myEstadosciviles = $estadosciviles1['estadoCivil'];

			return $myEstadosciviles;
		}

		public function actualizar($estadosciviles1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `estadosciviles`
			SET
			`estadoCivilId` = :estadoCivilId1,
			`estadoscivilcodigo` = :estadoscivilcodigo1,
			`estadoCivil` = :estadoCivil1,
			`estadoCivilOculto` = :estadoCivilOculto1,
			`estadoCivilAccion` = :estadoCivilAccion1,
			`estadoCivilfecha` = :estadoCivilfecha1,
			`estadoCiviluser` = :estadoCiviluser1
			WHERE `estadoCivilId` = :estadoCivilId1;');
			$actualizar->bindValue('estadoCivilId1',$estadosciviles1->get_estadoCivilId());
			$actualizar->bindValue('estadoscivilcodigo1',$estadosciviles1->get_estadoscivilcodigo());
			$actualizar->bindValue('estadoCivil1',$estadosciviles1->get_estadoCivil());
			$actualizar->bindValue('estadoCivilOculto1',$estadosciviles1->get_estadoCivilOculto());
			$actualizar->bindValue('estadoCivilAccion1',$estadosciviles1->get_estadoCivilAccion());
			$actualizar->bindValue('estadoCivilfecha1',$estadosciviles1->get_estadoCivilfecha());
			$actualizar->bindValue('estadoCiviluser1',$estadosciviles1->get_estadoCiviluser());
			$actualizar->execute();

		}
		public function insertar($estadosciviles1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `estadosciviles`
			(`estadoCivilId`,
			`estadoscivilcodigo`,
			`estadoCivil`,
			`estadoCivilOculto`,
			`estadoCivilAccion`,
			`estadoCivilfecha`,
			`estadoCiviluser`)
			VALUES
			(:estadoCivilId1,
			:estadoscivilcodigo1,
			:estadoCivil1,
			:estadoCivilOculto1,
			:estadoCivilAccion1,
			:estadoCivilfecha1,
			:estadoCiviluser1);');
			$insert->bindValue('estadoCivilId1',$estadosciviles1->get_estadoCivilId());
			$insert->bindValue('estadoscivilcodigo1',$estadosciviles1->get_estadoscivilcodigo());
			$insert->bindValue('estadoCivil1',$estadosciviles1->get_estadoCivil());
			$insert->bindValue('estadoCivilOculto1',$estadosciviles1->get_estadoCivilOculto());
			$insert->bindValue('estadoCivilAccion1',$estadosciviles1->get_estadoCivilAccion());
			$insert->bindValue('estadoCivilfecha1',$estadosciviles1->get_estadoCivilfecha());
			$insert->bindValue('estadoCiviluser1',$estadosciviles1->get_estadoCiviluser());

			$insert->execute();

		}
	}

?>