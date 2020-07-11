<?php
namespace Crud;
require_once('conexion.php');
require_once("../clasesphp/Tipobeca.php");
use Clasesphp\Tipobeca;

class CrudTipoBeca{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listatipobeca=null;
			$select=$db->query('SELECT * FROM tipobeca;');
			foreach($select->fetchAll() as $tipobeca){
				$mytipobeca= new TipoBeca();
				$mytipobeca->set_tipoBecaId($tipobeca['tipoBecaId']);
				$mytipobeca->set_tipobecacodigo($tipobeca['tipobecacodigo']);
				$mytipobeca->set_tipoBeca($tipobeca['tipoBeca']);
				$mytipobeca->set_tipobecaOculto($tipobeca['tipobecaOculto']);
				$mytipobeca->set_tipobecaAccion($tipobeca['tipobecaAccion']);
				$mytipobeca->set_tipobecafecha($tipobeca['tipobecafecha']);
				$mytipobeca->set_tipobecauser($tipobeca['tipobecauser']);
				$listatipobeca[]=$mytipobeca;
			}
			return $listatipobeca;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tipobeca WHERE tipoBecaId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenertipobeca($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM `tipobeca` WHERE  tipobecaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tipobeca=$select->fetch();
			$mytipobeca= new TipoBeca();
			$mytipobeca->set_tipoBecaId($tipobeca['tipoBecaId']);
			$mytipobeca->set_tipobecacodigo($tipobeca['tipobecacodigo']);
			$mytipobeca->set_tipoBeca($tipobeca['tipoBeca']);
			$mytipobeca->set_tipobecaOculto($tipobeca['tipobecaOculto']);
			$mytipobeca->set_tipobecaAccion($tipobeca['tipobecaAccion']);
			$mytipobeca->set_tipobecafecha($tipobeca['tipobecafecha']);
			$mytipobeca->set_tipobecauser($tipobeca['tipobecauser']);

			return $mytipobeca;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT tipoBeca FROM tipobeca WHERE tipobecaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tipobeca=$select->fetch();
			$mytipobeca=($tipobeca['tipoBeca']);

			return $mytipobeca;
		}
		public function actualizar($tipobeca){
			$db=Db::conectar();

			$actualizar=$db->prepare('UPDATE `tipobeca`
			SET
			`tipoBecaId` = :tipoBecaId1,
			`tipobecacodigo` = :tipobecacodigo1,
			`tipoBeca` = :tipoBeca1,
			`tipobecaOculto` = :tipobecaOculto1,
			`tipobecaAccion` = :tipobecaAccion1,
			`tipobecafecha` = :tipobecafecha1,
			`tipobecauser` = :tipobecauser1
			WHERE `tipoBecaId` = :tipoBecaId1;');
			$actualizar->bindValue('tipoBecaId1',$tipobeca->get_tipoBecaId());
			$actualizar->bindValue('tipobecacodigo1',$tipobeca->get_tipobecacodigo());
			$actualizar->bindValue('tipoBeca1',$tipobeca->get_tipoBeca());
			$actualizar->bindValue('tipobecaOculto1',$tipobeca->get_tipobecaOculto());
			$actualizar->bindValue('tipobecaAccion1',$tipobeca->get_tipobecaAccion());
			$actualizar->bindValue('tipobecafecha1',$tipobeca->get_tipobecafecha());
			$actualizar->bindValue('tipobecauser1',$tipobeca->get_tipobecauser());
			$actualizar->execute();
		}
		public function insertar($tipobeca){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `tipobeca`
			(`tipoBecaId`,
			`tipobecacodigo`,
			`tipoBeca`,
			`tipobecaOculto`,
			`tipobecaAccion`,
			`tipobecafecha`,
			`tipobecauser`)
			VALUES
			(:tipoBecaId1,
			:tipobecacodigo1,
			:tipoBeca1,
			:tipobecaOculto1,
			:tipobecaAccion1,
			:tipobecafecha1,
			:tipobecauser1);');
			$insert->bindValue('tipoBecaId1',$tipobeca->get_tipoBecaId());
			$insert->bindValue('tipobecacodigo1',$tipobeca->get_tipobecacodigo());
			$insert->bindValue('tipoBeca1',$tipobeca->get_tipoBeca());
			$insert->bindValue('tipobecaOculto1',$tipobeca->get_tipobecaOculto());
			$insert->bindValue('tipobecaAccion1',$tipobeca->get_tipobecaAccion());
			$insert->bindValue('tipobecafecha1',$tipobeca->get_tipobecafecha());
			$insert->bindValue('tipobecauser1',$tipobeca->get_tipobecauser());
			$insert->execute();

		}
	}

?>