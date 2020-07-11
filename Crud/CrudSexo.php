<?php
namespace Crud;
require_once('conexion.php');
require_once("../clasesphp/Sexos.php");
use Clasesphp\Sexos;

class CrudSexo{
		// constructor de la clase
		public function __construct(){}

		public function mostrar(){
			$db=Db::conectar();
			$listasexo=null;
			$select=$db->query('SELECT * FROM sexo');

			foreach($select->fetchAll() as $sexos1){
				$mysexo= new Sexos();
				$mysexo->set_sexoId($sexos1['sexoId']);
				$mysexo->set_sexo($sexos1['sexo']);
				$mysexo->set_sexocodigo($sexos1['sexocodigo']);
				$mysexo->set_sexoOculto($sexos1['sexoOculto']);
				$mysexo->set_sexoAccion($sexos1['sexoAccion']);
				$mysexo->set_sexofecha($sexos1['sexofecha']);
				$mysexo->set_sexouser($sexos1['sexouser']);
				$listasexo[]=$mysexo;
			}
			return $listasexo;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM sexo WHERE sexoId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerSexo($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM sexo WHERE sexoId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$sexos1=$select->fetch();
			$mysexo= new Sexos();
			$mysexo->set_sexoId($sexos1['sexoId']);
			$mysexo->set_sexo($sexos1['sexo']);
			$mysexo->set_sexocodigo($sexos1['sexocodigo']);
			$mysexo->set_sexoOculto($sexos1['sexoOculto']);
			$mysexo->set_sexoAccion($sexos1['sexoAccion']);
			$mysexo->set_sexofecha($sexos1['sexofecha']);
			$mysexo->set_sexouser($sexos1['sexouser']);
			return $mysexo;
		}
				public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM sexo WHERE sexoId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$sexos1=$select->fetch();
			$mysexo=($sexos1['sexo']);

			return $mysexo;
		}
		public function actualizar($sexos1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `sexo`
			SET
			`sexoId` = :sexoId1,
			`sexocodigo` = :sexocodigo1,
			`sexo` = :sexo1,
			`sexoOculto` = :sexoOculto1,
			`sexoAccion` = :sexoAccion1,
			`sexofecha` = :sexofecha1,
			`sexouser` = :sexouser1
			WHERE `sexoId` = :sexoId1;');
			$actualizar->bindValue('sexoId1',$sexos1->get_sexoId());
			$actualizar->bindValue('sexocodigo1',$sexos1->get_sexocodigo());
			$actualizar->bindValue('sexo1',$sexos1->get_sexo());
			$actualizar->bindValue('sexoOculto1',$sexos1->get_sexoOculto());
			$actualizar->bindValue('sexoAccion1',$sexos1->get_sexoAccion());
			$actualizar->bindValue('sexofecha1',$sexos1->get_sexofecha());
			$actualizar->bindValue('sexouser1',$sexos1->get_sexouser());
			$actualizar->execute();
		}
		public function insertar($sexos1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `sexo`
			(`sexoId`,
			`sexocodigo`,
			`sexo`,
			`sexoOculto`,
			`sexoAccion`,
			`sexofecha`,
			`sexouser`)
			VALUES
			(:sexoId1,
			:sexocodigo1,
			:sexo1,
			:sexoOculto1,
			:sexoAccion1,
			:sexofecha1,
			:sexouser1);');
			$insert->bindValue('sexoId1',$sexos1->get_sexoId());
			$insert->bindValue('sexocodigo1',$sexos1->get_sexocodigo());
			$insert->bindValue('sexo1',$sexos1->get_sexo());
			$insert->bindValue('sexoOculto1',$sexos1->get_sexoOculto());
			$insert->bindValue('sexoAccion1',$sexos1->get_sexoAccion());
			$insert->bindValue('sexofecha1',$sexos1->get_sexofecha());
			$insert->bindValue('sexouser1',$sexos1->get_sexouser());
			$insert->execute();

		}
	}

?>