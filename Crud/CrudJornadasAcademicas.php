<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Jornadasacademicas.php");
use Clasesphp\Jornadasacademicas;
class CrudJornadasAcademicas{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}
		public function mostrar(){
			$db=Db::conectar();
			$listaJornadasAcademicas=null;
			$select=$db->query("SELECT * FROM `jornadasacademicas`;");
			foreach($select->fetchAll() as $jornadasAcademicas){
				$myjornadasAcademicas= new Jornadasacademicas();
				$myjornadasAcademicas->set_JornadaAcademicaId($jornadasAcademicas['JornadaAcademicaId']);
				$myjornadasAcademicas->set_JornadaAcademicaCodigo($jornadasAcademicas['JornadaAcademicaCodigo']);
				$myjornadasAcademicas->set_JornadaAcademica($jornadasAcademicas['JornadaAcademica']);
				$myjornadasAcademicas->set_jornadasacademicasOculto($jornadasAcademicas['jornadasacademicasOculto']);
				$myjornadasAcademicas->set_jornadasacademicasAccion($jornadasAcademicas['jornadasacademicasAccion']);
				$myjornadasAcademicas->set_jornadasacademicasfecha($jornadasAcademicas['jornadasacademicasfecha']);
				$myjornadasAcademicas->set_jornadasacademicasuser($jornadasAcademicas['jornadasacademicasuser']);
				$listaJornadasAcademicas[]=$myjornadasAcademicas;
			}
			return $listaJornadasAcademicas;
		}
		   public function obtenerJornadasacademicas($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM jornadasacademicas WHERE JornadaAcademicaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$jornadasAcademicas=$select->fetch();
				$myjornadasAcademicas= new Jornadasacademicas();
				$myjornadasAcademicas->set_JornadaAcademicaId($jornadasAcademicas['JornadaAcademicaId']);
				$myjornadasAcademicas->set_JornadaAcademicaCodigo($jornadasAcademicas['JornadaAcademicaCodigo']);
				$myjornadasAcademicas->set_JornadaAcademica($jornadasAcademicas['JornadaAcademica']);
				$myjornadasAcademicas->set_jornadasacademicasOculto($jornadasAcademicas['jornadasacademicasOculto']);
				$myjornadasAcademicas->set_jornadasacademicasAccion($jornadasAcademicas['jornadasacademicasAccion']);
				$myjornadasAcademicas->set_jornadasacademicasfecha($jornadasAcademicas['jornadasacademicasfecha']);
				$myjornadasAcademicas->set_jornadasacademicasuser($jornadasAcademicas['jornadasacademicasuser']);

			return $myjornadasAcademicas;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM jornadasacademicas WHERE JornadaAcademicaId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$jornadasAcademicas=$select->fetch();
			$myjornadasAcademicas=($jornadasAcademicas['JornadaAcademica']);

			return $myjornadasAcademicas;
		}
		public function actualizar($jornadaacademica){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `jornadasacademicas`
			SET
			`JornadaAcademicaId` = :JornadaAcademicaId1,
			`JornadaAcademicaCodigo` = :JornadaAcademicaCodigo1,
			`JornadaAcademica` = :JornadaAcademica1,
			`jornadasacademicasOculto` = :jornadasacademicasOculto1,
			`jornadasacademicasAccion` = :jornadasacademicasAccion1,
			`jornadasacademicasfecha` = :jornadasacademicasfecha1,
			`jornadasacademicasuser` = :jornadasacademicasuser1
			WHERE `JornadaAcademicaId` = :JornadaAcademicaId1;');
			$actualizar->bindValue('JornadaAcademicaId1',$jornadaacademica->get_JornadaAcademicaId());
			$actualizar->bindValue('JornadaAcademicaCodigo1',$jornadaacademica->get_JornadaAcademicaCodigo());
			$actualizar->bindValue('JornadaAcademica1',$jornadaacademica->get_JornadaAcademica());
			$actualizar->bindValue('jornadasacademicasOculto1',$jornadaacademica->get_jornadasacademicasOculto());
			$actualizar->bindValue('jornadasacademicasAccion1',$jornadaacademica->get_jornadasacademicasAccion());
			$actualizar->bindValue('jornadasacademicasfecha1',$jornadaacademica->get_jornadasacademicasfecha());
			$actualizar->bindValue('jornadasacademicasuser1',$jornadaacademica->get_jornadasacademicasuser());
			$actualizar->execute();
		}
		public function insertar($jornadaacademica){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `jornadasacademicas`
			(`JornadaAcademicaId`,
			`JornadaAcademicaCodigo`,
			`JornadaAcademica`,
			`jornadasacademicasOculto`,
			`jornadasacademicasAccion`,
			`jornadasacademicasfecha`,
			`jornadasacademicasuser`)
			VALUES
			(:JornadaAcademicaId1,
			:JornadaAcademicaCodigo1,
			:JornadaAcademica1,
			:jornadasacademicasOculto1,
			:jornadasacademicasAccion1,
			:jornadasacademicasfecha1,
			:jornadasacademicasuser1);');
			$insert->bindValue('JornadaAcademicaId1',$jornadaacademica->get_JornadaAcademicaId());
			$insert->bindValue('JornadaAcademicaCodigo1',$jornadaacademica->get_JornadaAcademicaCodigo());
			$insert->bindValue('JornadaAcademica1',$jornadaacademica->get_JornadaAcademica());
			$insert->bindValue('jornadasacademicasOculto1',$jornadaacademica->get_jornadasacademicasOculto());
			$insert->bindValue('jornadasacademicasAccion1',$jornadaacademica->get_jornadasacademicasAccion());
			$insert->bindValue('jornadasacademicasfecha1',$jornadaacademica->get_jornadasacademicasfecha());
			$insert->bindValue('jornadasacademicasuser1',$jornadaacademica->get_jornadasacademicasuser());
			$insert->execute();

		}
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM `jornadasacademicas`
			WHERE JornadaAcademicaId=:id;');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
}

?>