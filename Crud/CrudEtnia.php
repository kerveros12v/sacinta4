<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Etnias.php");
use Clasesphp\Etnias;
class CrudEtnia{
		// constructor de la clase
		public function __construct(){}

		public function mostrar(){
			$db=Db::conectar();
			$listaEtnias=null;
			$select=$db->query( "SELECT * FROM `etnias`");
			foreach($select->fetchAll() as $etnias1){
				$myetnias1= new Etnias();
				$myetnias1->set_etniaId($etnias1['etniaId']);
				$myetnias1->set_etnia($etnias1['etnia']);
				$myetnias1->set_etniascodigo($etnias1['etniascodigo']);
				$myetnias1->set_etniasOculto($etnias1['etniasOculto']);
				$myetnias1->set_etniasAccion($etnias1['etniasAccion']);
				$myetnias1->set_etniasfecha($etnias1['etniasfecha']);
				$myetnias1->set_etniasuser($etnias1['etniasuser']);
				$listaEtnias[]=$myetnias1;
			}
			return $listaEtnias;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM etnias WHERE etniaId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerEtnias($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM ​etnias WHERE etniaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$etnias1=$select->fetch();
			$myetnias1= new Etnias();
			$myetnias1->set_etniaId($etnias1['etniaId']);
			$myetnias1->set_etnia($etnias1['etnia']);
			$myetnias1->set_etniascodigo($etnias1['etniascodigo']);
			$myetnias1->set_etniasOculto($etnias1['etniasOculto']);
			$myetnias1->set_etniasAccion($etnias1['etniasAccion']);
			$myetnias1->set_etniasfecha($etnias1['etniasfecha']);
			$myetnias1->set_etniasuser($etnias1['etniasuser']);
			return $myetnias1;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT etnia FROM etnias WHERE etniaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$etnias1=$select->fetch();
			$myetnias1=$etnias1['etnia'];

			return $myetnias1;
		}

		public function actualizar($etnias1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `etnias`
			SET
			`etniaId` = :etniaId1,
			`etniascodigo` = :etniascodigo1,
			`etnia` = :etnia1,
			`etniasOculto` = :etniasOculto1,
			`etniasAccion` = :etniasAccion1,
			`etniasfecha` = :etniasfecha1,
			`etniasuser` = :etniasuser1
			WHERE `etniaId` = :etniaId1;');

			$actualizar->bindValue('etniaId1',$etnias1->get_etniaId());
			$actualizar->bindValue('etniascodigo1',$etnias1->get_etniascodigo());
			$actualizar->bindValue('etnia1',$etnias1->get_etnia());
			$actualizar->bindValue('etniasOculto1',$etnias1->get_etniasOculto());
			$actualizar->bindValue('etniasAccion1',$etnias1->get_etniasAccion());
			$actualizar->bindValue('etniasfecha1',$etnias1->get_etniasfecha());
			$actualizar->bindValue('etniasuser1',$etnias1->get_etniasuser());
			$actualizar->execute();
		}
		public function insertar($etnias1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `etnias`
			(`etniaId`,
			`etniascodigo`,
			`etnia`,
			`etniasOculto`,
			`etniasAccion`,
			`etniasfecha`,
			`etniasuser`)
			VALUES
			(:etniaId1,
			:etniascodigo1,
			:etnia1,
			:etniasOculto1,
			:etniasAccion1,
			:etniasfecha1,
			:etniasuser1);');
			$insert->bindValue('etniaId1',$etnias1->get_etniaId());
			$insert->bindValue('etniascodigo1',$etnias1->get_etniascodigo());
			$insert->bindValue('etnia1',$etnias1->get_etnia());
			$insert->bindValue('etniasOculto1',$etnias1->get_etniasOculto());
			$insert->bindValue('etniasAccion1',$etnias1->get_etniasAccion());
			$insert->bindValue('etniasfecha1',$etnias1->get_etniasfecha());
			$insert->bindValue('etniasuser1',$etnias1->get_etniasuser());
			$insert->execute();

		}
	}

?>