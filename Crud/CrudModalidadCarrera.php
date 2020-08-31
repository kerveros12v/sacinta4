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
				$mymodalidadCarrera->set_modalidadcarreracodigo($modalidadCarrera['modalidadcarreracodigo']);
				$mymodalidadCarrera->set_modalidadCarrera($modalidadCarrera['modalidadCarrera']);
				$mymodalidadCarrera->set_modalidadcarreraOculto($modalidadCarrera['modalidadcarreraOculto']);
				$mymodalidadCarrera->set_modalidadcarreraAccion($modalidadCarrera['modalidadcarreraAccion']);
				$mymodalidadCarrera->set_modalidadcarrerafecha($modalidadCarrera['modalidadcarrerafecha']);
				$mymodalidadCarrera->set_modalidadcarrerauser($modalidadCarrera['modalidadcarrerauser']);
				$listamodalidadCarrera[]=$mymodalidadCarrera;
			}
			return $listamodalidadCarrera;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM modalidadcarrera WHERE modalidadCarreraId=:id');
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
			$mymodalidadCarrera->set_modalidadcarreracodigo($modalidadCarrera['modalidadcarreracodigo']);
			$mymodalidadCarrera->set_modalidadCarrera($modalidadCarrera['modalidadCarrera']);
			$mymodalidadCarrera->set_modalidadcarreraOculto($modalidadCarrera['modalidadcarreraOculto']);
			$mymodalidadCarrera->set_modalidadcarreraAccion($modalidadCarrera['modalidadcarreraAccion']);
			$mymodalidadCarrera->set_modalidadcarrerafecha($modalidadCarrera['modalidadcarrerafecha']);
			$mymodalidadCarrera->set_modalidadcarrerauser($modalidadCarrera['modalidadcarrerauser']);

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
			$actualizar=$db->prepare('UPDATE `modalidadcarrera`
			SET
			`modalidadCarreraId` = :modalidadCarreraId1,
			`modalidadcarreracodigo` = :modalidadcarreracodigo1,
			`modalidadCarrera` = :modalidadCarrera1,
			`modalidadcarreraOculto` = :modalidadcarreraOculto1,
			`modalidadcarreraAccion` = :modalidadcarreraAccion1,
			`modalidadcarrerafecha` = :modalidadcarrerafecha1,
			`modalidadcarrerauser` = :modalidadcarrerauser1
			WHERE `modalidadCarreraId` = :modalidadCarreraId1;');
			$actualizar->bindValue('id',$modalidadCarrera->get_modalidadCarreraId());
			$actualizar->bindValue('modalidadCarreraId1',$modalidadCarrera->get_modalidadCarreraId());
			$actualizar->bindValue('modalidadcarreracodigo1',$modalidadCarrera->get_modalidadcarreracodigo());
			$actualizar->bindValue('modalidadCarrera1',$modalidadCarrera->get_modalidadCarrera());
			$actualizar->bindValue('modalidadcarreraOculto1',$modalidadCarrera->get_modalidadcarreraOculto());
			$actualizar->bindValue('modalidadcarreraAccion1',$modalidadCarrera->get_modalidadcarreraAccion());
			$actualizar->bindValue('modalidadcarrerafecha1',$modalidadCarrera->get_modalidadcarrerafecha());
			$actualizar->bindValue('modalidadcarrerauser1',$modalidadCarrera->get_modalidadcarrerauser());
			$actualizar->execute();
		}
		public function insertar($modalidadCarrera){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `modalidadcarrera`
			(`modalidadCarreraId`,
			`modalidadcarreracodigo`,
			`modalidadCarrera`,
			`modalidadcarreraOculto`,
			`modalidadcarreraAccion`,
			`modalidadcarrerafecha`,
			`modalidadcarrerauser`)
			VALUES
			(:modalidadCarreraId1,
			:modalidadcarreracodigo1,
			:modalidadCarrera1,
			:modalidadcarreraOculto1,
			:modalidadcarreraAccion1,
			:modalidadcarrerafecha1,
			:modalidadcarrerauser1);');
			$insert->bindValue('modalidadCarreraId1',$modalidadCarrera->get_modalidadCarreraId());
			$insert->bindValue('modalidadcarreracodigo1',$modalidadCarrera->get_modalidadcarreracodigo());
			$insert->bindValue('modalidadCarrera1',$modalidadCarrera->get_modalidadCarrera());
			$insert->bindValue('modalidadcarreraOculto1',$modalidadCarrera->get_modalidadcarreraOculto());
			$insert->bindValue('modalidadcarreraAccion1',$modalidadCarrera->get_modalidadcarreraAccion());
			$insert->bindValue('modalidadcarrerafecha1',$modalidadCarrera->get_modalidadcarrerafecha());
			$insert->bindValue('modalidadcarrerauser1',$modalidadCarrera->get_modalidadcarrerauser());
			$insert->execute();

		}
	}

?>