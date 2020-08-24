<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/ContactosEmergencia.php");
use Clasesphp\Contactosemergencia;
class CrudContactosemergencia{
		// constructor de la clase
		public function __construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public  function mostrar(){
			$db=Db::conectar();
			$listacontactoEmergencia=null;
			$select=$db->query("SELECT * FROM `contactosemergencia`");
			foreach($select->fetchAll() as $contactoEmergencia){
				$mycontactoEmergencia= new Contactosemergencia();
				///
			  $mycontactoEmergencia->set_contactosEmergenciaId($contactoEmergencia['contactosEmergenciaId']);
			  $mycontactoEmergencia->set_nombreContactoEmergencia($contactoEmergencia['nombreContactoEmergencia']);
			  $mycontactoEmergencia->set_numeroContactosEmergencia($contactoEmergencia['numeroContactosEmergencia']);
			  $mycontactoEmergencia->set_Parentescos_idParentescos($contactoEmergencia['Parentescos_idParentescos']);
			  $mycontactoEmergencia->set_Estudiantes_numeroIdentificacion($contactoEmergencia['Estudiantes_numeroIdentificacion']);
				$mycontactoEmergencia->set_contactosperiodo($contactoEmergencia['contactosperiodo']);
				$mycontactoEmergencia->set_contactosemergenciaOculto($contactoEmergencia['contactosemergenciaOculto']);
				$mycontactoEmergencia->set_contactosemergenciaAccion($contactoEmergencia['contactosemergenciaAccion']);
				$mycontactoEmergencia->set_contactosemergenciafecha($contactoEmergencia['contactosemergenciafecha']);
				$mycontactoEmergencia->set_contactosemergenciauser($contactoEmergencia['contactosemergenciauser']);


				////
				$listacontactoEmergencia[]=$mycontactoEmergencia;
			}
			return $listacontactoEmergencia;
	}
		public  function existe($id){
		$db=Db::conectar();
		$select=$db->prepare("SELECT * FROM `contactosemergencia` where Estudiantes_numeroIdentificacion=:id");
		$select->bindValue('id',$id);
		$select->execute();
		if ($select->fetch()==0)return 0;
			return 1;
	}
	public  function obtenerContactoEmergencia($id,$periodo){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM `contactosemergencia` WHERE Estudiantes_numeroIdentificacion =:id AND contactosperiodo=:periodo;");
			$select->bindValue('id',$id);
			$select->bindValue('periodo',$periodo);
			$select->execute();
			$contactoEmergencia=$select->fetch();
			$mycontactoEmergencia= new Contactosemergencia();
				///
				$mycontactoEmergencia->set_contactosEmergenciaId($contactoEmergencia['contactosEmergenciaId']);
				$mycontactoEmergencia->set_nombreContactoEmergencia($contactoEmergencia['nombreContactoEmergencia']);
				$mycontactoEmergencia->set_numeroContactosEmergencia($contactoEmergencia['numeroContactosEmergencia']);
				$mycontactoEmergencia->set_Parentescos_idParentescos($contactoEmergencia['Parentescos_idParentescos']);
				$mycontactoEmergencia->set_Estudiantes_numeroIdentificacion($contactoEmergencia['Estudiantes_numeroIdentificacion']);
				  ////

				  $mycontactoEmergencia->set_contactosperiodo($contactoEmergencia['contactosperiodo']);
				  $mycontactoEmergencia->set_contactosemergenciaOculto($contactoEmergencia['contactosemergenciaOculto']);
				  $mycontactoEmergencia->set_contactosemergenciaAccion($contactoEmergencia['contactosemergenciaAccion']);
				  $mycontactoEmergencia->set_contactosemergenciafecha($contactoEmergencia['contactosemergenciafecha']);
				  $mycontactoEmergencia->set_contactosemergenciauser($contactoEmergencia['contactosemergenciauser']);
			return $mycontactoEmergencia;
		}
 public  function insertar($contactoEmergencia){
			$db=Db::conectar();
			$insert=$db->prepare("INSERT INTO `intsistemaa2`.`contactosemergencia`
			(`contactosEmergenciaId`,
			`nombreContactoEmergencia`,
			`numeroContactosEmergencia`,
			`Estudiantes_numeroIdentificacion`,
			`Parentescos_idParentescos`,
			`contactosperiodo`,
			`contactosemergenciaOculto`,
			`contactosemergenciaAccion`,
			`contactosemergenciafecha`,
			`contactosemergenciauser`)
			VALUES
			(:contactosEmergenciaId1,
			:nombreContactoEmergencia1,
			:numeroContactosEmergencia1,
			:Estudiantes_numeroIdentificacion1,
			:Parentescos_idParentescos1,
			:contactosperiodo1,
			:contactosemergenciaOculto1,
			:contactosemergenciaAccion1,
			:contactosemergenciafecha1,
			:contactosemergenciauser1);");
		$insert->bindValue('contactosEmergenciaId1',$contactoEmergencia->get_contactosEmergenciaId());
		$insert->bindValue('numeroContactosEmergencia1' ,$contactoEmergencia->get_numeroContactosEmergencia());
		$insert->bindValue('nombreContactoEmergencia1' ,$contactoEmergencia->get_nombreContactoEmergencia());
		$insert->bindValue('Parentescos_idParentescos1' ,$contactoEmergencia->get_Parentescos_idParentescos());
		$insert->bindValue('Estudiantes_numeroIdentificacion1' ,$contactoEmergencia->get_Estudiantes_numeroIdentificacion());
		$insert->bindValue('contactosperiodo1',$contactoEmergencia->get_contactosperiodo());
		$insert->bindValue('contactosemergenciaOculto1' ,$contactoEmergencia->get_contactosemergenciaOculto());
		$insert->bindValue('contactosemergenciaAccion1' ,$contactoEmergencia->get_contactosemergenciaAccion());
		$insert->bindValue('contactosemergenciafecha1' ,$contactoEmergencia->get_contactosemergenciafecha());
		$insert->bindValue('contactosemergenciauser1' ,$contactoEmergencia->get_contactosemergenciauser());
	$insert->execute();
	}

	public  function actualizar($contactoEmergencia){
		$db=Db::conectar();
			$actualizar=$db->prepare("UPDATE `contactosemergencia`
			SET
			`contactosEmergenciaId` = :contactosEmergenciaId1,
			`nombreContactoEmergencia` = :nombreContactoEmergencia1,
			`numeroContactosEmergencia` = :numeroContactosEmergencia1,
			`Estudiantes_numeroIdentificacion` = :Estudiantes_numeroIdentificacion1,
			`Parentescos_idParentescos` = :Parentescos_idParentescos1,
			`contactosperiodo` = :contactosperiodo1,
			`contactosemergenciaOculto` = :contactosemergenciaOculto1,
			`contactosemergenciaAccion` = :contactosemergenciaAccion1,
			`contactosemergenciafecha` = :contactosemergenciafecha1,
			`contactosemergenciauser` = :contactosemergenciauser1
			WHERE `contactosEmergenciaId` = :contactosEmergenciaId1;");
	$actualizar->bindValue('contactosEmergenciaId1',$contactoEmergencia->get_contactosEmergenciaId());
	$actualizar->bindValue('numeroContactosEmergencia1' ,$contactoEmergencia->get_numeroContactosEmergencia());
	$actualizar->bindValue('nombreContactoEmergencia1' ,$contactoEmergencia->get_nombreContactoEmergencia());
	$actualizar->bindValue('Parentescos_idParentescos1' ,$contactoEmergencia->get_Parentescos_idParentescos());
	$actualizar->bindValue('Estudiantes_numeroIdentificacion1' ,$contactoEmergencia->get_Estudiantes_numeroIdentificacion());
	$actualizar->bindValue('contactosperiodo1',$contactoEmergencia->get_contactosperiodo());
	$actualizar->bindValue('contactosemergenciaOculto1' ,$contactoEmergencia->get_contactosemergenciaOculto());
	$actualizar->bindValue('contactosemergenciaAccion1' ,$contactoEmergencia->get_contactosemergenciaAccion());
	$actualizar->bindValue('contactosemergenciafecha1' ,$contactoEmergencia->get_contactosemergenciafecha());
	$actualizar->bindValue('contactosemergenciauser1' ,$contactoEmergencia->get_contactosemergenciauser());
    $actualizar->execute();
	}
	  public  function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM `contactosemergencia` WHERE Estudiantes_numeroIdentificacion1=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

}
?>