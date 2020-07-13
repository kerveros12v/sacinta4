<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Modalidadcarreras.php");
use Clasesphp\Modalidadcarreras;
class CrudModalidadcarreras{
		// constructor de la clase
		public function __construct(){}

		public function mostrar(){
			$db=Db::conectar();
			$listamodalidadCarrera=null;
			$select=$db->query("SELECT * FROM `modalidadcarrera`;");

			foreach($select->fetchAll() as $modalidadCarrera){
				$mymodalidadCarrera= new Modalidadcarreras();
				$mymodalidadCarrera->set_modalidadCarreraId($modalidadCarrera['modalidadCarreraId']);
				$mymodalidadCarrera->set_modalidadCarrera($modalidadCarrera['modalidadCarrera']);
				$listamodalidadCarrera[]=$mymodalidadCarrera;
			}
			return $listamodalidadCarrera;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tipocarreras WHERE modalidadCarreraId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerModalidadCarreras($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM modalidadcarrera WHERE modalidadCarreraId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$modalidadCarrera=$select->fetch();
			$mymodalidadCarrera= new Modalidadcarreras();
			$mymodalidadCarrera->set_modalidadCarreraId($modalidadCarrera['modalidadCarreraId']);
			$mymodalidadCarrera->set_modalidadCarrera($modalidadCarrera['modalidadCarrera']);

			return $mymodalidadCarrera;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT modalidadCarrera FROM modalidadcarrera WHERE modalidadCarreraId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$modalidadCarrera=$select->fetch();
			$mymodalidadCarrera=($modalidadCarrera['modalidadCarrera']);

			return $mymodalidadCarrera;
		}
		public function actualizar($modalidadCarrera){
			$db=Db::conectar();
			$actualizar=$db->prepare('​UPDATE modalidadcarrera SET modalidadCarreraId=:id,modalidadCarrera=:modalidadCarrera1 WHERE modalidadCarreraId=:id');
			$actualizar->bindValue('id',$modalidadCarrera->get_modalidadCarreraId());
			$actualizar->bindValue('modalidadCarrera1',$modalidadCarrera->get_modalidadCarrera());
			$actualizar->execute();
		}
		public function insertar($modalidadCarrera){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `modalidadcarrera`(`modalidadCarreraId`, `modalidadCarrera`) VALUES (:id,:mcarrera1)');
			$insert->bindValue('id',$modalidadCarrera->get_modalidadCarreraId());
			$insert->bindValue('mcarrera1',$modalidadCarrera->get_modalidadCarrera());

			$insert->execute();

		}
	}

?>