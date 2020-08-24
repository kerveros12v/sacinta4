<?php
namespace Crud;
require_once('conexion.php');
require_once("../clasesphp/Tipomatricula.php");
use Clasesphp\Tipomatricula;

class CrudTipomatricula{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			}

		public function mostrar(){
			$db=Db::conectar();
			$listatipomatricula=null;
			$select=$db->query("SELECT * FROM tipomatricula;");
			foreach($select->fetchAll() as $tipomatricula){
				$mytipomatricula= new Tipomatricula();
				$mytipomatricula->set_tipoMatriculaId($tipomatricula['tipoMatriculaId']);
				$mytipomatricula->set_tipomatriculacodigo($tipomatricula['tipomatriculacodigo']);
				$mytipomatricula->set_tipoMatricula($tipomatricula['tipoMatricula']);
				$mytipomatricula->set_tipomatriculaOculto($tipomatricula['tipomatriculaOculto']);
				$mytipomatricula->set_tipomatriculaAccion($tipomatricula['tipomatriculaAccion']);
				$mytipomatricula->set_tipomatriculafecha($tipomatricula['tipomatriculafecha']);
				$mytipomatricula->set_tipomatriculauser($tipomatricula['tipomatriculauser']);

				$listatipomatricula[]=$mytipomatricula;

			}
			return $listatipomatricula;
		}
		   public function obtenerTipomatricula($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM tipomatricula WHERE tipoMatriculaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tipomatricula=$select->fetch();
				$mytipomatricula= new Tipomatricula();
				$mytipomatricula->set_tipoMatriculaId($tipomatricula['tipoMatriculaId']);
				$mytipomatricula->set_tipomatriculacodigo($tipomatricula['tipomatriculacodigo']);
				$mytipomatricula->set_tipoMatricula($tipomatricula['tipoMatricula']);
				$mytipomatricula->set_tipomatriculaOculto($tipomatricula['tipomatriculaOculto']);
				$mytipomatricula->set_tipomatriculaAccion($tipomatricula['tipomatriculaAccion']);
				$mytipomatricula->set_tipomatriculafecha($tipomatricula['tipomatriculafecha']);
				$mytipomatricula->set_tipomatriculauser($tipomatricula['tipomatriculauser']);

			return $mytipomatricula;
		}
			   public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT tipoMatricula FROM tipomatricula WHERE tipoMatriculaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tipomatricula=$select->fetch();
				$mytipomatricula=($tipomatricula['tipoMatricula']);

			return $mytipomatricula;
		}
		public function insertar($tipomatricula){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `tipomatricula`
			(`tipoMatriculaId`,
			`tipomatriculacodigo`,
			`tipoMatricula`,
			`tipomatriculaOculto`,
			`tipomatriculaAccion`,
			`tipomatriculafecha`,
			`tipomatriculauser`)
			VALUES
			(:tipoMatriculaId1,
			:tipomatriculacodigo1,
			:tipoMatricula1,
			:tipomatriculaOculto1,
			:tipomatriculaAccion1,
			:tipomatriculafecha1,
			:tipomatriculauser1);');
			$insert->bindValue('tipoMatriculaId1',$tipomatricula->get_tipoMatriculaId());
			$insert->bindValue('tipomatriculacodigo1',$tipomatricula->get_tipomatriculacodigo());
			$insert->bindValue('tipoMatricula1',$tipomatricula->get_tipoMatricula());
			$insert->bindValue('tipomatriculaOculto1',$tipomatricula->get_tipomatriculaOculto());
			$insert->bindValue('tipomatriculaAccion1',$tipomatricula->get_tipomatriculaAccion());
			$insert->bindValue('tipomatriculafecha1',$tipomatricula->get_tipomatriculafecha());
			$insert->bindValue('tipomatriculauser1',$tipomatricula->get_tipomatriculauser());
			$insert->execute();

		}
		public function actualizar($tipomatricula){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `tipomatricula`
			SET
			`tipoMatriculaId` = :tipoMatriculaId1,
			`tipomatriculacodigo` = :tipomatriculacodigo1,
			`tipoMatricula` = :tipoMatricula1,
			`tipomatriculaOculto` = :tipomatriculaOculto1,
			`tipomatriculaAccion` = :tipomatriculaAccion1,
			`tipomatriculafecha` = :tipomatriculafecha1,
			`tipomatriculauser` = :tipomatriculauser1
			WHERE `tipoMatriculaId` = :tipoMatriculaId1;');
			$actualizar->bindValue('tipoMatriculaId1',$tipomatricula->get_tipoMatriculaId());
			$actualizar->bindValue('tipomatriculacodigo1',$tipomatricula->get_tipomatriculacodigo());
			$actualizar->bindValue('tipoMatricula1',$tipomatricula->get_tipoMatricula());
			$actualizar->bindValue('tipomatriculaOculto1',$tipomatricula->get_tipomatriculaOculto());
			$actualizar->bindValue('tipomatriculaAccion1',$tipomatricula->get_tipomatriculaAccion());
			$actualizar->bindValue('tipomatriculafecha1',$tipomatricula->get_tipomatriculafecha());
			$actualizar->bindValue('tipomatriculauser1',$tipomatricula->get_tipomatriculauser());
			$actualizar->execute();

		}
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tipomatricula WHERE tipoMatriculaId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
}

?>