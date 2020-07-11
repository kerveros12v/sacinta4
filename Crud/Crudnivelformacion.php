<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Nivelformacion.php");
use Clasesphp\Nivelformacion;
class CrudNivelformacion{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listaNivelformacion=null;
			$select=$db->query("SELECT * FROM `nivelformacion`");

			foreach($select->fetchAll() as $nivelformacion1){
				$mynivelformacion= new Nivelformacion();
				$mynivelformacion->set_nivelFormacionId($nivelformacion1['nivelFormacionId']);
				$mynivelformacion->set_codigonivelFormacion($nivelformacion1['codigonivelFormacion']);
				$mynivelformacion->set_nivelFormacion($nivelformacion1['nivelFormacion']);
				$mynivelformacion->set_nivelInstruccion($nivelformacion1['nivelInstruccion']);
				$mynivelformacion->set_nivelformacionfecha($nivelformacion1['nivelformacionfecha']);
				$mynivelformacion->set_nivelformacionuser($nivelformacion1['nivelformacionuser']);
				$mynivelformacion->set_nivelformacionOculto($nivelformacion1['nivelformacionOculto']);
				$mynivelformacion->set_nivelformacionAccion($nivelformacion1['nivelformacionAccion']);

				$listaNivelformacion[]=$mynivelformacion;
			}
			return $listaNivelformacion;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM nivelformacion WHERE nivelFormacionId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerFormacion($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM nivelformacion WHERE nivelFormacionId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$nivelformacion1=$select->fetch();
				$mynivelformacion= new Nivelformacion();
				$mynivelformacion->set_nivelFormacionId($nivelformacion1['nivelFormacionId']);
				$mynivelformacion->set_codigonivelFormacion($nivelformacion1['codigonivelFormacion']);
				$mynivelformacion->set_nivelFormacion($nivelformacion1['nivelFormacion']);
				$mynivelformacion->set_nivelInstruccion($nivelformacion1['nivelInstruccion']);
				$mynivelformacion->set_nivelformacionfecha($nivelformacion1['nivelformacionfecha']);
				$mynivelformacion->set_nivelformacionuser($nivelformacion1['nivelformacionuser']);
				$mynivelformacion->set_nivelformacionOculto($nivelformacion1['nivelformacionOculto']);
				$mynivelformacion->set_nivelformacionAccion($nivelformacion1['nivelformacionAccion']);

			return $mynivelformacion;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT nivelFormacion FROM nivelformacion WHERE nivelFormacionId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$nivelformacion1=$select->fetch();
				$mynivelformacion=($nivelformacion1['nivelFormacion']);

			return $mynivelformacion;
		}
		public function actualizar($nivelformacion1){
			$db=Db::conectar();
			$nivelformacion1=new Nivelformacion();
			$actualizar=$db->prepare('UPDATE nivelformacion SET `nivelFormacionId`=:id,`codigonivelFormacion`=:codigonivelFormacion1,`nivelFormacion`=:nivelFormacion1 WHERE nivelFormacionId=:id');
			$actualizar->bindValue('id',$nivelformacion1->get_nivelFormacionId());
			$actualizar->bindValue('codigonivelFormacion1',$nivelformacion1->get_codigonivelFormacion());
			$actualizar->bindValue('nivelFormacion1',$nivelformacion1->get_nivelFormacion());
			$actualizar->execute();
		}
		public function insertar($nivelformacion1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO nivelformacion(nivelFormacionId, codigonivelFormacion1,nivelFormacion) VALUES (:id,:codigonivelFormacion1,:nivelFormacion1)');
			//$insert->bindValue('id',$nivelformacion1->get_idColegios());
			$insert->bindValue('id',$nivelformacion1->get_nivelFormacionId());
			$insert->bindValue('codigonivelFormacion1',$nivelformacion1->get_codigonivelFormacion());
			$insert->bindValue('nivelFormacion1',$nivelformacion1->get_nivelFormacion());
			$insert->execute();

		}
	}

?>