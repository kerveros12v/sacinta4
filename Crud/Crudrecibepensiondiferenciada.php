<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Recibepensiondiferenciada.php");
use Clasesphp\Recibepensiondiferenciada;
class Crudrecibepensiondiferenciada{
		// constructor de la clase
		public function __construct(){}

		public function mostrar(){
			$db=Db::conectar();
			$listarecibepensiondiferenciada=null;
			$select=$db->query('SELECT * FROM recibepensiondiferenciada');
			foreach($select->fetchAll() as $recibepensiondiferenciada1){
				$myrecibepensiondiferenciada= new Recibepensiondiferenciada();
				$myrecibepensiondiferenciada->set_recibePensionDiferenciadaId($recibepensiondiferenciada1['recibePensionDiferenciadaId']);
				$myrecibepensiondiferenciada->set_recibePensionDiferenciada($recibepensiondiferenciada1['recibePensionDiferenciada']);
				$myrecibepensiondiferenciada->set_recibepensiondiferenciadacodigo($recibepensiondiferenciada1['recibepensiondiferenciadacodigo']);
				$myrecibepensiondiferenciada->set_recibepensiondiferenciadaOculto($recibepensiondiferenciada1['recibepensiondiferenciadaOculto']);
				$myrecibepensiondiferenciada->set_recibepensiondiferenciadaAccion($recibepensiondiferenciada1['recibepensiondiferenciadaAccion']);
				$myrecibepensiondiferenciada->set_recibepensiondiferenciadafecha($recibepensiondiferenciada1['recibepensiondiferenciadafecha']);
				$myrecibepensiondiferenciada->set_recibepensiondiferenciadauser($recibepensiondiferenciada1['recibepensiondiferenciadauser']);

				$listarecibepensiondiferenciada[]=$myrecibepensiondiferenciada;
			}
			return $listarecibepensiondiferenciada;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM recibepensiondiferenciada WHERE recibePensionDiferenciadaId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerrecibepensiondiferenciada($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM recibepensiondiferenciada WHERE recibePensionDiferenciadaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$recibepensiondiferenciada1=$select->fetch();
			$myrecibepensiondiferenciada=new Recibepensiondiferenciada ();
			$myrecibepensiondiferenciada->set_recibePensionDiferenciadaId($recibepensiondiferenciada1['recibePensionDiferenciadaId']);
			$myrecibepensiondiferenciada->set_recibePensionDiferenciada($recibepensiondiferenciada1['recibePensionDiferenciada']);
			$myrecibepensiondiferenciada->set_recibepensiondiferenciadacodigo($recibepensiondiferenciada1['recibepensiondiferenciadacodigo']);
			$myrecibepensiondiferenciada->set_recibepensiondiferenciadaOculto($recibepensiondiferenciada1['recibepensiondiferenciadaOculto']);
			$myrecibepensiondiferenciada->set_recibepensiondiferenciadaAccion($recibepensiondiferenciada1['recibepensiondiferenciadaAccion']);
			$myrecibepensiondiferenciada->set_recibepensiondiferenciadafecha($recibepensiondiferenciada1['recibepensiondiferenciadafecha']);
			$myrecibepensiondiferenciada->set_recibepensiondiferenciadauser($recibepensiondiferenciada1['recibepensiondiferenciadauser']);

			return $myrecibepensiondiferenciada;
		}
			public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM recibepensiondiferenciada WHERE recibePensionDiferenciadaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$recibepensiondiferenciada1=$select->fetch();
			$myrecibepensiondiferenciada=($recibepensiondiferenciada1['recibePensionDiferenciada']);

			return $myrecibepensiondiferenciada;
		}
		public function actualizar($recibepensiondiferenciada1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `recibepensiondiferenciada`
			SET
			`recibePensionDiferenciadaId` = :recibePensionDiferenciadaId1,
			`recibepensiondiferenciadacodigo` = :recibepensiondiferenciadacodigo1,
			`recibePensionDiferenciada` = :recibePensionDiferenciada1,
			`recibepensiondiferenciadaOculto` = :recibepensiondiferenciadaOculto1,
			`recibepensiondiferenciadaAccion` = :recibepensiondiferenciadaAccion1,
			`recibepensiondiferenciadafecha` = :recibepensiondiferenciadafecha1,
			`recibepensiondiferenciadauser` = :recibepensiondiferenciadauser1
			WHERE `recibePensionDiferenciadaId` = :recibePensionDiferenciadaId1;');
			$actualizar->bindValue('recibePensionDiferenciadaId1',$recibepensiondiferenciada1->get_recibePensionDiferenciadaId());
			$actualizar->bindValue('recibepensiondiferenciadacodigo1',$recibepensiondiferenciada1->get_recibepensiondiferenciadacodigo());
			$actualizar->bindValue('recibePensionDiferenciada1',$recibepensiondiferenciada1->get_recibePensionDiferenciada());
			$actualizar->bindValue('recibepensiondiferenciadaOculto1',$recibepensiondiferenciada1->get_recibepensiondiferenciadaOculto());
			$actualizar->bindValue('recibepensiondiferenciadaAccion1',$recibepensiondiferenciada1->get_recibepensiondiferenciadaAccion());
			$actualizar->bindValue('recibepensiondiferenciadafecha1',$recibepensiondiferenciada1->get_recibepensiondiferenciadafecha());
			$actualizar->bindValue('recibepensiondiferenciadauser1',$recibepensiondiferenciada1->get_recibepensiondiferenciadauser());
			$actualizar->execute();
		}
		public function insertar($recibepensiondiferenciada1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `recibepensiondiferenciada`
			(`recibePensionDiferenciadaId`,
			`recibepensiondiferenciadacodigo`,
			`recibePensionDiferenciada`,
			`recibepensiondiferenciadaOculto`,
			`recibepensiondiferenciadaAccion`,
			`recibepensiondiferenciadafecha`,
			`recibepensiondiferenciadauser`)
			VALUES
			(:recibePensionDiferenciadaId1,
			:recibepensiondiferenciadacodigo1,
			:recibePensionDiferenciada1,
			:recibepensiondiferenciadaOculto1,
			:recibepensiondiferenciadaAccion1,
			:recibepensiondiferenciadafecha1,
			:recibepensiondiferenciadauser1);
			');
			$insert->bindValue('recibePensionDiferenciadaId1',$recibepensiondiferenciada1->get_recibePensionDiferenciadaId());
			$insert->bindValue('recibepensiondiferenciadacodigo1',$recibepensiondiferenciada1->get_recibepensiondiferenciadacodigo());
			$insert->bindValue('recibePensionDiferenciada1',$recibepensiondiferenciada1->get_recibePensionDiferenciada());
			$insert->bindValue('recibepensiondiferenciadaOculto1',$recibepensiondiferenciada1->get_recibepensiondiferenciadaOculto());
			$insert->bindValue('recibepensiondiferenciadaAccion1',$recibepensiondiferenciada1->get_recibepensiondiferenciadaAccion());
			$insert->bindValue('recibepensiondiferenciadafecha1',$recibepensiondiferenciada1->get_recibepensiondiferenciadafecha());
			$insert->bindValue('recibepensiondiferenciadauser1',$recibepensiondiferenciada1->get_recibepensiondiferenciadauser());
			$insert->execute();

		}
	}

?>