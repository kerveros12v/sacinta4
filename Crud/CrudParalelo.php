<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Paralelos.php");
use Clasesphp\Paralelos;
class CrudParalelo{
		// constructor de la clase
		public function __construct(){}

		public function mostrar(){
			$db=Db::conectar();
			$listaparalelo=null;
			$select=$db->query("SELECT * FROM `paralelo`;");

			foreach($select->fetchAll() as $paralelo){
				$myparalelo= new Paralelos();
				$myparalelo->set_paraleloId($paralelo['paraleloId']);
				$myparalelo->set_paralelo($paralelo['paralelo']);
				$myparalelo->set_paralelocodigo($paralelo['paralelocodigo']);
				$myparalelo->set_paraleloOculto($paralelo['paraleloOculto']);
				$myparalelo->set_paraleloAccion($paralelo['paraleloAccion']);
				$myparalelo->set_paralelofecha($paralelo['paralelofecha']);
				$myparalelo->set_paralelouser($paralelo['paralelouser']);
				$listaparalelo[]=$myparalelo;
			}
			return $listaparalelo;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM paralelo WHERE paraleloId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenerParalelo($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM paralelo WHERE paraleloId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$paralelo=$select->fetch();
			$myparalelo= new Paralelos();
			$myparalelo->set_paraleloId($paralelo['paraleloId']);
			$myparalelo->set_paralelo($paralelo['paralelo']);
			$myparalelo->set_paralelocodigo($paralelo['paralelocodigo']);
			$myparalelo->set_paraleloOculto($paralelo['paraleloOculto']);
			$myparalelo->set_paraleloAccion($paralelo['paraleloAccion']);
			$myparalelo->set_paralelofecha($paralelo['paralelofecha']);
			$myparalelo->set_paralelouser($paralelo['paralelouser']);

			return $myparalelo;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT paralelo FROM paralelo WHERE paraleloId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$paralelo=$select->fetch();
			$myparalelo=($paralelo['paralelo']);

			return $myparalelo;
		}

		public function actualizar($paralelo){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `paralelo`
			SET
			`paraleloId` = :paraleloId1,
			`paralelocodigo` = :paralelocodigo1,
			`paralelo` = :paralelo1,
			`paraleloOculto` = :paraleloOculto1,
			`paraleloAccion` = :paraleloAccion1,
			`paralelofecha` = :paralelofecha1,
			`paralelouser` = :paralelouser1
			WHERE `paraleloId` = :paraleloId1;');
			$actualizar->bindValue('paraleloId1',$paralelo->get_paraleloId());
			$actualizar->bindValue('paralelocodigo1',$paralelo->get_paralelocodigo());
			$actualizar->bindValue('paralelo1',$paralelo->get_paralelo());
			$actualizar->bindValue('paraleloOculto1',$paralelo->get_paraleloOculto());
			$actualizar->bindValue('paraleloAccion1',$paralelo->get_paraleloAccion());
			$actualizar->bindValue('paralelofecha1',$paralelo->get_paralelofecha());
			$actualizar->bindValue('paralelouser1',$paralelo->get_paralelouser());

			$actualizar->execute();

		}
		public function insertar($paralelo){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `paralelo`
			(`paraleloId`,
			`paralelocodigo`,
			`paralelo`,
			`paraleloOculto`,
			`paraleloAccion`,
			`paralelofecha`,
			`paralelouser`)
			VALUES
			(:paraleloId1,
			:paralelocodigo1,
			:paralelo1,
			:paraleloOculto1,
			:paraleloAccion1,
			:paralelofecha1,
			:paralelouser1);');
			$insert->bindValue('paraleloId1',$paralelo->get_paraleloId());
			$insert->bindValue('paralelocodigo1',$paralelo->get_paralelocodigo());
			$insert->bindValue('paralelo1',$paralelo->get_paralelo());
			$insert->bindValue('paraleloOculto1',$paralelo->get_paraleloOculto());
			$insert->bindValue('paraleloAccion1',$paralelo->get_paraleloAccion());
			$insert->bindValue('paralelofecha1',$paralelo->get_paralelofecha());
			$insert->bindValue('paralelouser1',$paralelo->get_paralelouser());

			$insert->execute();

		}
	}

?>