<?php
namespace Crud;
require_once('conexion.php');
require_once("../clasesphp/Tipossangre.php");
use Clasesphp\Tipossangre;

class CrudTipoSangre{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listatipossangre=null;
			$select=$db->query("SELECT * FROM `tipossangres`");

			foreach($select->fetchAll() as $tipossangre1){
				$mytipossangre= new Tipossangre();
				$mytipossangre->set_tipoSangreId($tipossangre1['tipoSangreId']);
				$mytipossangre->set_tipoSangre($tipossangre1['tipoSangre']);
				$mytipossangre->set_tipossangrescodigo($tipossangre1['tipossangrescodigo']);
				$mytipossangre->set_tipossangreOculto($tipossangre1['tipossangreOculto']);
				$mytipossangre->set_tipossangreAccion($tipossangre1['tipossangreAccion']);
				$mytipossangre->set_tipossangrefecha($tipossangre1['tipossangrefecha']);
				$mytipossangre->set_tipossangreuser($tipossangre1['tipossangreuser']);
				$listatipossangre[]=$mytipossangre;
			}
			return $listatipossangre;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tipossangres WHERE tipoSangreId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerTipoSangre($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM tipossangres WHERE tipoSangreId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tipossangre1=$select->fetch();
				$mytipossangre= new Tipossangre();
				$mytipossangre->set_tipoSangreId($tipossangre1['tipoSangreId']);
				$mytipossangre->set_tipoSangre($tipossangre1['tipoSangre']);
				$mytipossangre->set_tipossangrescodigo($tipossangre1['tipossangrescodigo']);
				$mytipossangre->set_tipossangreOculto($tipossangre1['tipossangreOculto']);
				$mytipossangre->set_tipossangreAccion($tipossangre1['tipossangreAccion']);
				$mytipossangre->set_tipossangrefecha($tipossangre1['tipossangrefecha']);
				$mytipossangre->set_tipossangreuser($tipossangre1['tipossangreuser']);
			return $mytipossangre;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT tipoSangre FROM tipossangres WHERE tipoSangreId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tipossangre1=$select->fetch();
			$mytipossangre= ($tipossangre1['tipoSangre']);

			return $mytipossangre;
		}
		public function actualizar($tipossangre1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `tipossangres`
			SET
			`tipoSangreId` = :tipoSangreId1,
			`tipossangrescodigo` = :tipossangrescodigo1,
			`tipoSangre` = :tipoSangre1,
			`tipossangreOculto` = :tipossangreOculto1,
			`tipossangreAccion` = :tipossangreAccion1,
			`tipossangrefecha` = :tipossangrefecha1,
			`tipossangreuser` = :tipossangreuser1
			WHERE `tipoSangreId` = :tipoSangreId1;');
			$actualizar->bindValue('tipoSangreId1',$tipossangre1->get_tipoSangreId());
			$actualizar->bindValue('tipossangrescodigo1',$tipossangre1->get_tipossangrescodigo());
			$actualizar->bindValue('tipoSangre1',$tipossangre1->get_tipoSangre());
			$actualizar->bindValue('tipossangreOculto1',$tipossangre1->get_tipossangreOculto());
			$actualizar->bindValue('tipossangreAccion1',$tipossangre1->get_tipossangreAccion());
			$actualizar->bindValue('tipossangrefecha1',$tipossangre1->get_tipossangrefecha());
			$actualizar->bindValue('tipossangreuser1',$tipossangre1->get_tipossangreuser());

			$actualizar->execute();
		}
		public function insertar($tipossangre1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `tipossangres`
			(`tipoSangreId`,
			`tipossangrescodigo`,
			`tipoSangre`,
			`tipossangreOculto`,
			`tipossangreAccion`,
			`tipossangrefecha`,
			`tipossangreuser`)
			VALUES
			(:tipoSangreId1,
			:tipossangrescodigo1,
			:tipoSangre1,
			:tipossangreOculto1,
			:tipossangreAccion1,
			:tipossangrefecha1,
			:tipossangreuser1);');
			$insert->bindValue('tipoSangreId1',$tipossangre1->get_tipoSangreId());
			$insert->bindValue('tipossangrescodigo1',$tipossangre1->get_tipossangrescodigo());
			$insert->bindValue('tipoSangre1',$tipossangre1->get_tipoSangre());
			$insert->bindValue('tipossangreOculto1',$tipossangre1->get_tipossangreOculto());
			$insert->bindValue('tipossangreAccion1',$tipossangre1->get_tipossangreAccion());
			$insert->bindValue('tipossangrefecha1',$tipossangre1->get_tipossangrefecha());
			$insert->bindValue('tipossangreuser1',$tipossangre1->get_tipossangreuser());
			$insert->execute();
		}
	}
?>