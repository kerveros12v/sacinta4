<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/PueblosNacionalidad.php");
use Clasesphp\PueblosNacionalidad;
	class CrudPuebloNacionalidad{
		// constructor de la clase
		public function _construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listapueblonacionalidad=null;
			$select=$db->query("SELECT * FROM `pueblonacionalidades`");
			foreach($select->fetchAll() as $pueblonacionalidad1){
				$mypueblonacionalidad= new PueblosNacionalidad();
				$mypueblonacionalidad->set_pueblonacionalidadId($pueblonacionalidad1['pueblonacionalidadId']);
				$mypueblonacionalidad->set_pueblonacionalidadescodigo($pueblonacionalidad1['pueblonacionalidadescodigo']);
				$mypueblonacionalidad->set_pueblonacionalidad($pueblonacionalidad1['pueblonacionalidad']);
				$mypueblonacionalidad->set_pueblonacionalidadOculto($pueblonacionalidad1['pueblonacionalidadOculto']);
				$mypueblonacionalidad->set_pueblonacionalidadAccion($pueblonacionalidad1['pueblonacionalidadAccion']);
				$mypueblonacionalidad->set_pueblonacionalidadfecha($pueblonacionalidad1['pueblonacionalidadfecha']);
				$mypueblonacionalidad->set_pueblonacionalidaduser($pueblonacionalidad1['pueblonacionalidaduser']);
				$listapueblonacionalidad[]=$mypueblonacionalidad;
			}
			return $listapueblonacionalidad;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM pueblonacionalidades WHERE pueblonacionalidadId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerpuebloNacionalidad($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM pueblonacionalidades WHERE pueblonacionalidadId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$pueblonacionalidad1=$select->fetch();
			$mypueblonacionalidad= new PueblosNacionalidad();
			$mypueblonacionalidad->set_pueblonacionalidadId($pueblonacionalidad1['pueblonacionalidadId']);
			$mypueblonacionalidad->set_pueblonacionalidadescodigo($pueblonacionalidad1['pueblonacionalidadescodigo']);
			$mypueblonacionalidad->set_pueblonacionalidad($pueblonacionalidad1['pueblonacionalidad']);
			$mypueblonacionalidad->set_pueblonacionalidadOculto($pueblonacionalidad1['pueblonacionalidadOculto']);
			$mypueblonacionalidad->set_pueblonacionalidadAccion($pueblonacionalidad1['pueblonacionalidadAccion']);
			$mypueblonacionalidad->set_pueblonacionalidadfecha($pueblonacionalidad1['pueblonacionalidadfecha']);
			$mypueblonacionalidad->set_pueblonacionalidaduser($pueblonacionalidad1['pueblonacionalidaduser']);
			return $mypueblonacionalidad;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT puebloNacionalidad FROM pueblonacionalidades WHERE puebloNacionalidadId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$pueblonacionalidad1=$select->fetch();
			$mypueblonacionalidad=($pueblonacionalidad1['puebloNacionalidad']);

			return $mypueblonacionalidad;
		}
		public function actualizar($pueblonacionalidad1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `pueblonacionalidades`
			SET
			`pueblonacionalidadId` = :pueblonacionalidadId1,
			`pueblonacionalidadescodigo` = :pueblonacionalidadescodigo1,
			`pueblonacionalidad` = :pueblonacionalidad1,
			`pueblonacionalidadOculto` = :pueblonacionalidadOculto1,
			`pueblonacionalidadAccion` = :pueblonacionalidadAccion1,
			`pueblonacionalidadfecha` = :pueblonacionalidadfecha1,
			`pueblonacionalidaduser` = :pueblonacionalidaduser1
			WHERE `pueblonacionalidadId` = :pueblonacionalidadId1;');
			$actualizar->bindValue('pueblonacionalidadId1',$pueblonacionalidad1->get_pueblonacionalidadId());
			$actualizar->bindValue('pueblonacionalidadescodigo1',$pueblonacionalidad1->get_pueblonacionalidadescodigo());
			$actualizar->bindValue('pueblonacionalidad1',$pueblonacionalidad1->get_pueblonacionalidad());
			$actualizar->bindValue('pueblonacionalidadOculto1',$pueblonacionalidad1->get_pueblonacionalidadOculto());
			$actualizar->bindValue('pueblonacionalidadAccion1',$pueblonacionalidad1->get_pueblonacionalidadAccion());
			$actualizar->bindValue('pueblonacionalidadfecha1',$pueblonacionalidad1->get_pueblonacionalidadfecha());
			$actualizar->bindValue('pueblonacionalidaduser1',$pueblonacionalidad1->get_pueblonacionalidaduser());
			$actualizar->execute();
		}
		public function insertar($pueblonacionalidad1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `pueblonacionalidades`
			(`pueblonacionalidadId`,
			`pueblonacionalidadescodigo`,
			`pueblonacionalidad`,
			`pueblonacionalidadOculto`,
			`pueblonacionalidadAccion`,
			`pueblonacionalidadfecha`,
			`pueblonacionalidaduser`)
			VALUES
			(:pueblonacionalidadId1,
			:pueblonacionalidadescodigo1,
			:pueblonacionalidad1,
			:pueblonacionalidadOculto1,
			:pueblonacionalidadAccion1,
			:pueblonacionalidadfecha1,
			:pueblonacionalidaduser1);');
			$insert->bindValue('pueblonacionalidadId1',$pueblonacionalidad1->get_pueblonacionalidadId());
			$insert->bindValue('pueblonacionalidadescodigo1',$pueblonacionalidad1->get_pueblonacionalidadescodigo());
			$insert->bindValue('pueblonacionalidad1',$pueblonacionalidad1->get_pueblonacionalidad());
			$insert->bindValue('pueblonacionalidadOculto1',$pueblonacionalidad1->get_pueblonacionalidadOculto());
			$insert->bindValue('pueblonacionalidadAccion1',$pueblonacionalidad1->get_pueblonacionalidadAccion());
			$insert->bindValue('pueblonacionalidadfecha1',$pueblonacionalidad1->get_pueblonacionalidadfecha());
			$insert->bindValue('pueblonacionalidaduser1',$pueblonacionalidad1->get_pueblonacionalidaduser());
			$insert->execute();

		}
	}

?>