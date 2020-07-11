<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Cantones.php");
use Clasesphp\Cantones;
class CrudCantones{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listacanton=NULL;
			$select=$db->query("SELECT * FROM `canton`");
			foreach($select->fetchAll() as $canton1){
				$mycanton= new Cantones();
				$mycanton->set_cantonId($canton1['cantonId']);
				$mycanton->set_canton($canton1['canton']);
				$mycanton->set_cantoncodigo($canton1['cantoncodigo']);
				$mycanton->set_cantonprovincia($canton1['cantonprovincia']);
				$mycanton->set_cantonAccion($canton1['cantonAccion']);
				$mycanton->set_cantonOculto($canton1['cantonOculto']);
				$mycanton->set_cantonfecha($canton1['cantonfecha']);
				$mycanton->set_cantonuser($canton1['cantonuser']);
				$listacanton[]=$mycanton;
			}
			return $listacanton;
		}
		public function mostrarlistapoProvincia($id){
			//echo("<script>console.log('Dato recibido en el crud: ".$id."');</script>");
			$db=Db::conectar();
			$listacanton=NULL;
			$select=$db->prepare("SELECT * FROM `canton` WHERE cantonprovincia=:id");
			$select->bindValue('id',$id);
			$select->execute();
			foreach($select->fetchAll() as $canton1){
				$mycanton= new Cantones();
				$mycanton->set_cantonId($canton1['cantonId']);
				$mycanton->set_canton($canton1['canton']);
				$mycanton->set_cantoncodigo($canton1['cantoncodigo']);
				$mycanton->set_cantonprovincia($canton1['cantonprovincia']);
				$mycanton->set_cantonAccion($canton1['cantonAccion']);
				$mycanton->set_cantonOculto($canton1['cantonOculto']);
				$mycanton->set_cantonfecha($canton1['cantonfecha']);
				$mycanton->set_cantonuser($canton1['cantonuser']);
				$listacanton[]=$mycanton;
			}
			return $listacanton;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM canton WHERE cantonId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerCanton($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM canton WHERE cantonId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$canton1=$select->fetch();
			$mycanton= new Cantones();
			$mycanton->set_cantonId($canton1['cantonId']);
			$mycanton->set_canton($canton1['canton']);
			$mycanton->set_cantoncodigo($canton1['cantoncodigo']);
			$mycanton->set_cantonprovincia($canton1['cantonprovincia']);
			$mycanton->set_cantonAccion($canton1['cantonAccion']);
			$mycanton->set_cantonOculto($canton1['cantonOculto']);
			$mycanton->set_cantonfecha($canton1['cantonfecha']);
			$mycanton->set_cantonuser($canton1['cantonuser']);

			return $mycanton;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT canton FROM canton WHERE cantonId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$canton1=$select->fetch();
			$mycanton=($canton1['canton']);

			return $mycanton;
		}
		public function actualizar($canton1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `canton`
			SET
			`cantonId` = :cantonId1,
			`cantoncodigo` = :cantoncodigo1,
			`canton` = :canton1,
			`cantonprovincia` = :cantonprovincia1,
			`cantonOculto` = :cantonOculto1,
			`cantonAccion` = :cantonAccion1,
			`cantonfecha` = :cantonfecha1,
			`cantonuser` = :cantonuser1
			WHERE `cantonId` = :cantonId1;');
			$actualizar->bindValue('cantonId1',$canton1->get_cantonId());
			$actualizar->bindValue('cantoncodigo1',$canton1->get_cantoncodigo());
			$actualizar->bindValue('canton1',$canton1->get_canton());
			$actualizar->bindValue('cantonprovincia1',$canton1->get_cantonprovincia());
			$actualizar->bindValue('cantonOculto1',$canton1->get_cantonOculto());
			$actualizar->bindValue('cantonAccion1',$canton1->get_cantonAccion());
			$actualizar->bindValue('cantonfecha1',$canton1->get_cantonfecha());
			$actualizar->bindValue('cantonuser1',$canton1->get_cantonuser());
			$actualizar->execute();
		}
		public function insertar($canton1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `canton`
			(`cantonId`,
			`cantoncodigo`,
			`canton`,
			`cantonprovincia`,
			`cantonOculto`,
			`cantonAccion`,
			`cantonfecha`,
			`cantonuser`)
			VALUES
			(:cantonId1,
			:cantoncodigo1,
			:canton1,
			:cantonprovincia1,
			:cantonOculto1,
			:cantonAccion1,
			:cantonfecha1,
			:cantonuser1);
			');
			$insert->bindValue('cantonId1',$canton1->get_cantonId());
			$insert->bindValue('cantoncodigo1',$canton1->get_cantoncodigo());
			$insert->bindValue('canton1',$canton1->get_canton());
			$insert->bindValue('cantonprovincia1',$canton1->get_cantonprovincia());
			$insert->bindValue('cantonOculto1',$canton1->get_cantonOculto());
			$insert->bindValue('cantonAccion1',$canton1->get_cantonAccion());
			$insert->bindValue('cantonfecha1',$canton1->get_cantonfecha());
			$insert->bindValue('cantonuser1',$canton1->get_cantonuser());
			$insert->execute();

		}
	}

?>