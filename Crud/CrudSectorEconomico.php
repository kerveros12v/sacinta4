<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Sectoreconomico.php");

use Clasesphp\Sectoreconomico;
class CrudSectorEconomico{
		// constructor de la clase
		public function __construct(){}

		public function mostrar(){
			$db=Db::conectar();
			$listasectoreconomico=NULL;
			$select=$db->query( "SELECT * FROM `sectoreconomico`");
			foreach($select->fetchAll() as $sectoreconomico){
				$mysectoreconomico= new Sectoreconomico();
				$mysectoreconomico->set_sectorEconomicoid($sectoreconomico['sectorEconomicoid']);
				$mysectoreconomico->set_SectorEconomico($sectoreconomico['SectorEconomico']);
				$mysectoreconomico->set_sectoreconomicocodigo($sectoreconomico['sectoreconomicocodigo']);
				$mysectoreconomico->set_sectoreconomicoOculto($sectoreconomico['sectoreconomicoOculto']);
				$mysectoreconomico->set_sectoreconomicoAccion($sectoreconomico['sectoreconomicoAccion']);
				$mysectoreconomico->set_sectoreconomicofecha($sectoreconomico['sectoreconomicofecha']);
				$mysectoreconomico->set_sectoreconomicouser($sectoreconomico['sectoreconomicouser']);

				$listasectoreconomico[]=$mysectoreconomico;
			}
			return $listasectoreconomico;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM sectoreconomico WHERE sectorEconomicoid=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerSectorEconomico($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM sectoreconomico WHERE sectorEconomicoid=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$sectoreconomico=$select->fetch();
			$mysectoreconomico= new Sectoreconomico();
			$mysectoreconomico->set_sectorEconomicoid($sectoreconomico['sectorEconomicoid']);
			$mysectoreconomico->set_SectorEconomico($sectoreconomico['SectorEconomico']);
			$mysectoreconomico->set_sectoreconomicocodigo($sectoreconomico['sectoreconomicocodigo']);
			$mysectoreconomico->set_sectoreconomicoOculto($sectoreconomico['sectoreconomicoOculto']);
			$mysectoreconomico->set_sectoreconomicoAccion($sectoreconomico['sectoreconomicoAccion']);
			$mysectoreconomico->set_sectoreconomicofecha($sectoreconomico['sectoreconomicofecha']);
			$mysectoreconomico->set_sectoreconomicouser($sectoreconomico['sectoreconomicouser']);

			return $mysectoreconomico;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT SectorEconomico FROM sectoreconomico WHERE sectorEconomicoid=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$sectoreconomico=$select->fetch();
			$mysectoreconomico=$sectoreconomico['SectorEconomico'];

			return $mysectoreconomico;
		}

		public function actualizar($sectoreconomico){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `sectoreconomico`
			SET
			`sectorEconomicoid` = :sectorEconomicoid1,
			`sectoreconomicocodigo` = :sectoreconomicocodigo1,
			`SectorEconomico` = :SectorEconomico1,
			`sectoreconomicoOculto` = :sectoreconomicoOculto1,
			`sectoreconomicoAccion` = :sectoreconomicoAccion1,
			`sectoreconomicofecha` = :sectoreconomicofecha1,
			`sectoreconomicouser` = :sectoreconomicouser1
			WHERE `sectorEconomicoid` = :sectorEconomicoid1;
			');
			$actualizar->bindValue('sectorEconomicoid1',$sectoreconomico->get_sectorEconomicoid());
			$actualizar->bindValue('sectoreconomicocodigo1',$sectoreconomico->get_sectoreconomicocodigo());
			$actualizar->bindValue('SectorEconomico1',$sectoreconomico->get_SectorEconomico());
			$actualizar->bindValue('sectoreconomicoOculto1',$sectoreconomico->get_sectoreconomicoOculto());
			$actualizar->bindValue('sectoreconomicoAccion1',$sectoreconomico->get_sectoreconomicoAccion());
			$actualizar->bindValue('sectoreconomicofecha1',$sectoreconomico->get_sectoreconomicofecha());
			$actualizar->bindValue('sectoreconomicouser1',$sectoreconomico->get_sectoreconomicouser());
			$actualizar->execute();
		}
		public function insertar($sectoreconomico){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `sectoreconomico`
			(`sectorEconomicoid`,
			`sectoreconomicocodigo`,
			`SectorEconomico`,
			`sectoreconomicoOculto`,
			`sectoreconomicoAccion`,
			`sectoreconomicofecha`,
			`sectoreconomicouser`)
			VALUES
			(:sectorEconomicoid1,
			:sectoreconomicocodigo1,
			:SectorEconomico1,
			:sectoreconomicoOculto1,
			:sectoreconomicoAccion1,
			:sectoreconomicofecha1,
			:sectoreconomicouser1);');
			//$insert->bindValue('id',$sectoreconomico->get_idColegios());
			$insert->bindValue('sectorEconomicoid1',$sectoreconomico->get_sectorEconomicoid());
			$insert->bindValue('sectoreconomicocodigo1',$sectoreconomico->get_sectoreconomicocodigo());
			$insert->bindValue('SectorEconomico1',$sectoreconomico->get_SectorEconomico());
			$insert->bindValue('sectoreconomicoOculto1',$sectoreconomico->get_sectoreconomicoOculto());
			$insert->bindValue('sectoreconomicoAccion1',$sectoreconomico->get_sectoreconomicoAccion());
			$insert->bindValue('sectoreconomicofecha1',$sectoreconomico->get_sectoreconomicofecha());
			$insert->bindValue('sectoreconomicouser1',$sectoreconomico->get_sectoreconomicouser());
			$insert->execute();

		}
	}

?>