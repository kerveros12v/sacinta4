<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Categoriasmigratoria.php");
use Clasesphp\Categoriasmigratoria;
class CrudCategoriasMigratoria{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listacategoriasmigratoria=null;
			$select=$db->query("SELECT * FROM `categoriasmigratoria`;");
 			foreach($select->fetchAll() as $categoriasmigratoria1){
				$mycategoriasmigratoria= new Categoriasmigratoria();
				$mycategoriasmigratoria->set_categoriaMigratoriaId($categoriasmigratoria1['categoriaMigratoriaId']);
				$mycategoriasmigratoria->set_categoriaMigratoria($categoriasmigratoria1['categoriaMigratoria']);
				$mycategoriasmigratoria->set_categoriasmigratoriacodigo($categoriasmigratoria1['categoriasmigratoriacodigo']);
				$mycategoriasmigratoria->set_categoriasmigratoriaOculto($categoriasmigratoria1['categoriasmigratoriaOculto']);
				$mycategoriasmigratoria->set_categoriasmigratoriaAccion($categoriasmigratoria1['categoriasmigratoriaAccion']);
				$mycategoriasmigratoria->set_categoriasmigratoriafecha($categoriasmigratoria1['categoriasmigratoriafecha']);
				$mycategoriasmigratoria->set_categoriasmigratoriauser($categoriasmigratoria1['categoriasmigratoriauser']);
				$listacategoriasmigratoria[]=$mycategoriasmigratoria;
			}
			return $listacategoriasmigratoria;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM categoriasmigratoria WHERE categoriaMigratoriaId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerCategoriasMigratoria($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM categoriasmigratoria WHERE categoriaMigratoriaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$categoriasmigratoria1=$select->fetch();
				$mycategoriasmigratoria= new Categoriasmigratoria();
				$mycategoriasmigratoria->set_categoriaMigratoriaId($categoriasmigratoria1['categoriaMigratoriaId']);
				$mycategoriasmigratoria->set_categoriaMigratoria($categoriasmigratoria1['categoriaMigratoria']);
				$mycategoriasmigratoria->set_categoriasmigratoriacodigo($categoriasmigratoria1['categoriasmigratoriacodigo']);
				$mycategoriasmigratoria->set_categoriasmigratoriaOculto($categoriasmigratoria1['categoriasmigratoriaOculto']);
				$mycategoriasmigratoria->set_categoriasmigratoriaAccion($categoriasmigratoria1['categoriasmigratoriaAccion']);
				$mycategoriasmigratoria->set_categoriasmigratoriafecha($categoriasmigratoria1['categoriasmigratoriafecha']);
				$mycategoriasmigratoria->set_categoriasmigratoriauser($categoriasmigratoria1['categoriasmigratoriauser']);


			return $mycategoriasmigratoria;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT categoriaMigratoria FROM categoriasmigratoria WHERE categoriaMigratoriaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$categoriasmigratoria1=$select->fetch();
				$mycategoriasmigratoria= $categoriasmigratoria1['categoriaMigratoria'];

			return $mycategoriasmigratoria;
		}
		public function actualizar($categoriasmigratoria1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `categoriasmigratoria`
			SET
			`categoriaMigratoriaId` = :categoriaMigratoriaId1,
			`categoriasmigratoriacodigo` = :categoriasmigratoriacodigo1,
			`categoriaMigratoria` = :categoriaMigratoria1,
			`categoriasmigratoriaOculto` = :categoriasmigratoriaOculto1,
			`categoriasmigratoriaAccion` = :categoriasmigratoriaAccion1,
			`categoriasmigratoriafecha` = :categoriasmigratoriafecha1,
			`categoriasmigratoriauser` = :categoriasmigratoriauser1
			WHERE `categoriaMigratoriaId` = :categoriaMigratoriaId1;');
			$actualizar->bindValue('categoriaMigratoriaId1',$categoriasmigratoria1->get_categoriaMigratoriaId());
			$actualizar->bindValue('categoriasmigratoriacodigo1',$categoriasmigratoria1->get_categoriasmigratoriacodigo());
			$actualizar->bindValue('categoriaMigratoria1',$categoriasmigratoria1->get_categoriaMigratoria());
			$actualizar->bindValue('categoriasmigratoriaOculto1',$categoriasmigratoria1->get_categoriasmigratoriaOculto());
			$actualizar->bindValue('categoriasmigratoriaAccion1',$categoriasmigratoria1->get_categoriasmigratoriaAccion());
			$actualizar->bindValue('categoriasmigratoriafecha1',$categoriasmigratoria1->get_categoriasmigratoriafecha());
			$actualizar->bindValue('categoriasmigratoriauser1',$categoriasmigratoria1->get_categoriasmigratoriauser());

			$actualizar->execute();
		}
		public function insertar($categoriasmigratoria1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `categoriasmigratoria`
			(`categoriaMigratoriaId`,
			`categoriasmigratoriacodigo`,
			`categoriaMigratoria`,
			`categoriasmigratoriaOculto`,
			`categoriasmigratoriaAccion`,
			`categoriasmigratoriafecha`,
			`categoriasmigratoriauser`)
			VALUES
			(:categoriaMigratoriaId1,
			:categoriasmigratoriacodigo1,
			:categoriaMigratoria1,
			:categoriasmigratoriaOculto1,
			:categoriasmigratoriaAccion1,
			:categoriasmigratoriafecha1,
			:categoriasmigratoriauser1);');
			$insert->bindValue('categoriaMigratoriaId1',$categoriasmigratoria1->get_categoriaMigratoriaId());
			$insert->bindValue('categoriasmigratoriacodigo1',$categoriasmigratoria1->get_categoriasmigratoriacodigo());
			$insert->bindValue('categoriaMigratoria1',$categoriasmigratoria1->get_categoriaMigratoria());
			$insert->bindValue('categoriasmigratoriaOculto1',$categoriasmigratoria1->get_categoriasmigratoriaOculto());
			$insert->bindValue('categoriasmigratoriaAccion1',$categoriasmigratoria1->get_categoriasmigratoriaAccion());
			$insert->bindValue('categoriasmigratoriafecha1',$categoriasmigratoria1->get_categoriasmigratoriafecha());
			$insert->bindValue('categoriasmigratoriauser1',$categoriasmigratoria1->get_categoriasmigratoriauser());

			$insert->execute();

		}
	}

?>