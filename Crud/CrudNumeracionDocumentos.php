<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/NumeracionDocumentos.php");
use Clasesphp\NumeracionDocumentos;
class CrudNumeracionDocumentos{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public function mostrar(){
			$db=Db::conectar();
			$listaNumeracionDocumentos=null;
			$select=$db->query("SELECT * FROM `numeraciondocumentos`");

			foreach($select->fetchAll() as $numeracion){
				$mynumeracion= new NumeracionDocumentos();
				$mynumeracion->set_numeracionDocumentosId($numeracion['numeracionDocumentosId']);
				$mynumeracion->set_nombreDocumento($numeracion['nombreDocumento']);
				$mynumeracion->set_numeracionSiguiente($numeracion['numeracionSiguiente']);
				$mynumeracion->set_numeraciondocumentosOculto($numeracion['numeraciondocumentosOculto']);
				$mynumeracion->set_numeraciondocumentosAccion($numeracion['numeraciondocumentosAccion']);
				$mynumeracion->set_numeraciondocumentosfecha($numeracion['numeraciondocumentosfecha']);
				$mynumeracion->set_numeraciondocumentosuser($numeracion['numeraciondocumentosuser']);
				$listaNumeracionDocumentos[]=$mynumeracion;
			}
			return $listaNumeracionDocumentos;
		}
		   public function obtenerNumeracion($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM numeraciondocumentos WHERE nombreDocumento=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$numeracion=$select->fetch();
				$mynumeracion= new NumeracionDocumentos();
				$mynumeracion->set_numeracionDocumentosId($numeracion['numeracionDocumentosId']);
				$mynumeracion->set_nombreDocumento($numeracion['nombreDocumento']);
				$mynumeracion->set_numeracionSiguiente($numeracion['numeracionSiguiente']);
				$mynumeracion->set_numeraciondocumentosOculto($numeracion['numeraciondocumentosOculto']);
				$mynumeracion->set_numeraciondocumentosAccion($numeracion['numeraciondocumentosAccion']);
				$mynumeracion->set_numeraciondocumentosfecha($numeracion['numeraciondocumentosfecha']);
				$mynumeracion->set_numeraciondocumentosuser($numeracion['numeraciondocumentosuser']);


			return $mynumeracion;
		}
		public function obtenerNumero($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM numeraciondocumentos WHERE numeracionDocumentosId=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$jornadasAcademicas=$select->fetch();
			$myjornadasAcademicas=($jornadasAcademicas['numeracionSiguiente']);

			return $myjornadasAcademicas;
		}
			public function actualizar($numeracion){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE `numeraciondocumentos`
			SET
			`numeracionDocumentosId` = :numeracionDocumentosId1,
			`nombreDocumento` = :nombreDocumento1,
			`numeracionSiguiente` = :numeracionSiguiente1,
			`numeraciondocumentosOculto` = :numeraciondocumentosOculto1,
			`numeraciondocumentosAccion` = :numeraciondocumentosAccion1,
			`numeraciondocumentosfecha` = :numeraciondocumentosfecha1,
			`numeraciondocumentosuser` = :numeraciondocumentosuser1
			WHERE `numeracionDocumentosId` = :numeracionDocumentosId1;');
			$actualizar->bindValue('numeracionDocumentosId1',$numeracion->get_numeracionDocumentosId());
			$actualizar->bindValue('nombreDocumento1',$numeracion->get_nombreDocumento());
			$actualizar->bindValue('numeracionSiguiente1',$numeracion->get_numeracionSiguiente());
			$actualizar->bindValue('numeraciondocumentosOculto1',$numeracion->get_numeraciondocumentosOculto());
			$actualizar->bindValue('numeraciondocumentosAccion1',$numeracion->get_numeraciondocumentosAccion());
			$actualizar->bindValue('numeraciondocumentosfecha1',$numeracion->get_numeraciondocumentosfecha());
			$actualizar->bindValue('numeraciondocumentosuser1',$numeracion->get_numeraciondocumentosuser());
			$actualizar->execute();
		}
}

?>