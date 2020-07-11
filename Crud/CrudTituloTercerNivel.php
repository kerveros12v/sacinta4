<?php
namespace Crud;
require_once('conexion.php');
require_once("../clasesphp/Titulotercernivel.php");
use Clasesphp\Titulotercernivel;

class CrudTituloTercerNivel{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listatitulotercernivel=null;
			$select=$db->query('SELECT * FROM titulotercernivel');
			foreach($select->fetchAll() as $titulotercernivel){
				$mytitulotercernivel= new Titulotercernivel();
				$mytitulotercernivel->set_tituloTercerNivelId($titulotercernivel['tituloTercerNivelId']);
				$mytitulotercernivel->set_titulotercernivelcodigo($titulotercernivel['titulotercernivelcodigo']);
				$mytitulotercernivel->set_tituloTercerNivel($titulotercernivel['tituloTercerNivel']);
				$mytitulotercernivel->set_titulotercernivelOculto($titulotercernivel['titulotercernivelOculto']);
				$mytitulotercernivel->set_titulotercernivelAccion($titulotercernivel['titulotercernivelAccion']);
				$mytitulotercernivel->set_titulotercernivelfecha($titulotercernivel['titulotercernivelfecha']);
				$mytitulotercernivel->set_titulotercerniveluse($titulotercernivel['titulotercerniveluser']);

				$listatitulotercernivel[]=$mytitulotercernivel;
			}
			return $listatitulotercernivel;
		}
		    public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM titulotercernivel WHERE tituloTercerNivelId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		public function obtenertituloTercerNivel($id){
			$mytitulotercernivel= new Titulotercernivel();
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM `titulotercernivel` WHERE  tituloTercerNivelId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$titulotercernivel=$select->fetch();
			$mytitulotercernivel->set_tituloTercerNivelId($titulotercernivel['tituloTercerNivelId']);
			$mytitulotercernivel->set_titulotercernivelcodigo($titulotercernivel['titulotercernivelcodigo']);
			$mytitulotercernivel->set_tituloTercerNivel($titulotercernivel['tituloTercerNivel']);
			$mytitulotercernivel->set_titulotercernivelOculto($titulotercernivel['titulotercernivelOculto']);
			$mytitulotercernivel->set_titulotercernivelAccion($titulotercernivel['titulotercernivelAccion']);
			$mytitulotercernivel->set_titulotercernivelfecha($titulotercernivel['titulotercernivelfecha']);
			$mytitulotercernivel->set_titulotercerniveluse($titulotercernivel['titulotercerniveluser']);

			return $mytitulotercernivel;
		}
		public function obtenerDato($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT tituloTercerNivel FROM titulotercernivel WHERE tituloTercerNivelId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$titulotercernivel=$select->fetch();
			$mytitulotercernivel=($titulotercernivel['tituloTercerNivel']);

			return $mytitulotercernivel;
		}
		public function actualizar($titulotercernivel){
			$db=Db::conectar();

			$actualizar=$db->prepare('UPDATE `titulotercernivel`
			SET
			`tituloTercerNivelId` = :tituloTercerNivelId1,
			`titulotercernivelcodigo` = :titulotercernivelcodigo1,
			`tituloTercerNivel` = :tituloTercerNivel1,
			`titulotercernivelOculto` = :titulotercernivelOculto1,
			`titulotercernivelAccion` = :titulotercernivelAccion1,
			`titulotercernivelfecha` = :titulotercernivelfecha1,
			`titulotercerniveluser` = :titulotercerniveluser1
			WHERE `tituloTercerNivelId` = :tituloTercerNivelId1;');
			$actualizar->bindValue('tituloTercerNivelId1',$titulotercernivel->get_tituloTercerNivelId());
			$actualizar->bindValue('titulotercernivelcodigo1',$titulotercernivel->get_titulotercernivelcodigo());
			$actualizar->bindValue('tituloTercerNivel1',$titulotercernivel->get_tituloTercerNivel());
			$actualizar->bindValue('titulotercernivelOculto1',$titulotercernivel->get_titulotercernivelOculto());
			$actualizar->bindValue('titulotercernivelAccion1',$titulotercernivel->get_titulotercernivelAccion());
			$actualizar->bindValue('titulotercernivelfecha1',$titulotercernivel->get_titulotercernivelfecha());
			$actualizar->bindValue('titulotercerniveluser1',$titulotercernivel->get_titulotercerniveluse());
			$actualizar->execute();
		}
		public function insertar($titulotercernivel){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `titulotercernivel`
			(`tituloTercerNivelId`,
			`titulotercernivelcodigo`,
			`tituloTercerNivel`,
			`titulotercernivelOculto`,
			`titulotercernivelAccion`,
			`titulotercernivelfecha`,
			`titulotercerniveluser`)
			VALUES
			(:tituloTercerNivelId1,
			:titulotercernivelcodigo1,
			:tituloTercerNivel1,
			:titulotercernivelOculto1,
			:titulotercernivelAccion1,
			:titulotercernivelfecha1,
			:titulotercerniveluser1);');
			$insert->bindValue('tituloTercerNivelId1',$titulotercernivel->get_tituloTercerNivelId());
			$insert->bindValue('titulotercernivelcodigo1',$titulotercernivel->get_titulotercernivelcodigo());
			$insert->bindValue('tituloTercerNivel1',$titulotercernivel->get_tituloTercerNivel());
			$insert->bindValue('titulotercernivelOculto1',$titulotercernivel->get_titulotercernivelOculto());
			$insert->bindValue('titulotercernivelAccion1',$titulotercernivel->get_titulotercernivelAccion());
			$insert->bindValue('titulotercernivelfecha1',$titulotercernivel->get_titulotercernivelfecha());
			$insert->bindValue('titulotercerniveluser1',$titulotercernivel->get_titulotercerniveluse());
			$insert->execute();

		}
	}

?>