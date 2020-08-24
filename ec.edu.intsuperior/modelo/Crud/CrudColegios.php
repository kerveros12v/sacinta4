<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Colegio.php");
use Clasesphp\Colegios;
	class CrudColegios{
		// constructor de la clase
		public function __construct(){}

		public  function mostrar(){
			$db=Db::conectar();
			$listaColegios=null;
			$select=$db->query('SELECT * FROM colegios ORDER BY idColegios DESC');
			foreach($select->fetchAll() as $colegio1){
				$myColegio= new Colegios();
				$myColegio->set_idColegios($colegio1['idColegios']);
				$myColegio->set_colegio($colegio1['Colegio']);
				$myColegio->set_cantonCantonId($colegio1['Canton_cantonId']);
				$myColegio->set_tipoColegioTipoColegioId($colegio1['TipoColegio_tipoColegioId']);
				$myColegio->set_colegioscodigo($colegio1['colegioscodigo']);
				$myColegio->set_colegiosOculto($colegio1['colegiosOculto']);
				$myColegio->set_colegiosAccion($colegio1['colegiosAccion']);
				$myColegio->set_colegiosfecha($colegio1['colegiosfecha']);
				$myColegio->set_colegiosuser($colegio1['colegiosuser']);
				$listaColegios[]=$myColegio;
			}
			return $listaColegios;
		}
		public  function listaColegios($ciudad){
			$db=Db::conectar();
			$listaColegios=NULL;
			$select=$db->prepare("SELECT * FROM colegios WHERE Canton_cantonId=:id ORDER BY idColegios DESC");
			$select->bindValue('id',$ciudad);
			$select->execute();
			foreach($select->fetchAll() as $colegio1){
				$myColegio= new Colegios();
				$myColegio->set_idColegios($colegio1['idColegios']);
				$myColegio->set_colegio($colegio1['Colegio']);
				$myColegio->set_cantonCantonId($colegio1['Canton_cantonId']);
				$myColegio->set_tipoColegioTipoColegioId($colegio1['TipoColegio_tipoColegioId']);
				$myColegio->set_colegioscodigo($colegio1['colegioscodigo']);
				$myColegio->set_colegiosOculto($colegio1['colegiosOculto']);
				$myColegio->set_colegiosAccion($colegio1['colegiosAccion']);
				$myColegio->set_colegiosfecha($colegio1['colegiosfecha']);
				$myColegio->set_colegiosuser($colegio1['colegiosuser']);
				$listaColegios[]=$myColegio;
			}
			return $listaColegios;
		}
		    public  function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM colegios WHERE idColegios=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
			public  function existe($id){
		$db=Db::conectar();
		$select=$db->prepare("SELECT * FROM colegios where idColegios=:id");
		$select->bindValue('id',$id);
		$select->execute();
		if ($select->fetch()==0)return 0;
			return 1;
	}
		public  function obtenerColegio($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM colegios WHERE idColegios=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$colegio1=$select->fetch();
			$myColegio= new Colegios();
			$myColegio->set_idColegios($colegio1['idColegios']);
			$myColegio->set_colegio($colegio1['Colegio']);
			$myColegio->set_cantonCantonId($colegio1['Canton_cantonId']);
			$myColegio->set_tipoColegioTipoColegioId($colegio1['TipoColegio_tipoColegioId']);
			$myColegio->set_colegioscodigo($colegio1['colegioscodigo']);
			$myColegio->set_colegiosOculto($colegio1['colegiosOculto']);
			$myColegio->set_colegiosAccion($colegio1['colegiosAccion']);
			$myColegio->set_colegiosfecha($colegio1['colegiosfecha']);
			$myColegio->set_colegiosuser($colegio1['colegiosuser']);
			return $myColegio;
		}
		public  function actualizar($colegio1){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `colegios`
			SET
			`idColegios` = :idColegios1,
			`colegioscodigo` = :colegioscodigo1,
			`Colegio` = :Colegio1,
			`Canton_cantonId` = :Canton_cantonId1,
			`TipoColegio_tipoColegioId` = :TipoColegio_tipoColegioId1,
			`colegiosOculto` = :colegiosOculto1,
			`colegiosAccion` = :colegiosAccion1,
			`colegiosfecha` = :colegiosfecha1,
			`colegiosuser` = :colegiosuser1
			WHERE `idColegios` = :idColegios1;');
			$actualizar->bindValue('idColegios1',$colegio1->get_idColegios());
			$actualizar->bindValue('colegioscodigo1',$colegio1->get_colegioscodigo());
			$actualizar->bindValue('Colegio1',$colegio1->get_colegio());
			$actualizar->bindValue('Canton_cantonId1',$colegio1->get_cantonCantonId());
			$actualizar->bindValue('TipoColegio_tipoColegioId1',$colegio1->get_tipoColegioTipoColegioId());
			$actualizar->bindValue('colegiosOculto1',$colegio1->get_colegiosOculto());
			$actualizar->bindValue('colegiosAccion1',$colegio1->get_colegiosAccion());
			$actualizar->bindValue('colegiosfecha1',$colegio1->get_colegiosfecha());
			$actualizar->bindValue('colegiosuser1',$colegio1->get_colegiosuser());
			$actualizar->execute();
		}
		public  function insertar($colegio1){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO `colegios`
			(`idColegios`,
			`colegioscodigo`,
			`Colegio`,
			`Canton_cantonId`,
			`TipoColegio_tipoColegioId`,
			`colegiosOculto`,
			`colegiosAccion`,
			`colegiosfecha`,
			`colegiosuser`)
			VALUES
			(:idColegios1,
			:colegioscodigo1,
			:Colegio1,
			:Canton_cantonId1,
			:TipoColegio_tipoColegioId1,
			:colegiosOculto1,
			:colegiosAccion1,
			:colegiosfecha1,
			:colegiosuser1);');
			$insert->bindValue('idColegios1',$colegio1->get_idColegios());
			$insert->bindValue('colegioscodigo1',$colegio1->get_colegioscodigo());
			$insert->bindValue('Colegio1',$colegio1->get_colegio());
			$insert->bindValue('Canton_cantonId1',$colegio1->get_cantonCantonId());
			$insert->bindValue('TipoColegio_tipoColegioId1',$colegio1->get_tipoColegioTipoColegioId());
			$insert->bindValue('colegiosOculto1',$colegio1->get_colegiosOculto());
			$insert->bindValue('colegiosAccion1',$colegio1->get_colegiosAccion());
			$insert->bindValue('colegiosfecha1',$colegio1->get_colegiosfecha());
			$insert->bindValue('colegiosuser1',$colegio1->get_colegiosuser());
			$insert->execute();

		}
	}
?>