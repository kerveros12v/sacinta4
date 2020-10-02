<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Residenciaestudiantes.php");

use Clasesphp\Residenciaestudiantes;

class CrudResidenciaestudiantes
{
	// constructor de la clase
	public function __construct()
	{
	}

	public  function mostrar()
	{

		$db = Db::conectar();
		$listaresidenciaestudiantes = null;
		$select = $db->query('SELECT * FROM residenciaestudiantes;');
		foreach ($select->fetchAll() as $residenciaestudiantes1) {
			$myresidenciaestudiantes = new Residenciaestudiantes();
			$myresidenciaestudiantes->setResidenciaEstudiantesId($residenciaestudiantes1['residenciaEstudiantesId']);
			$myresidenciaestudiantes->setFknumeroIdentificacion($residenciaestudiantes1['fknumeroIdentificacion']);
			$myresidenciaestudiantes->setDireccionDomiciliariaResidencia($residenciaestudiantes1['direccionDomiciliariaResidencia']);
			$myresidenciaestudiantes->setCodigoPostal($residenciaestudiantes1['codigoPostal']);
			$myresidenciaestudiantes->setFkperiodo($residenciaestudiantes1['fkperiodo']);
			$myresidenciaestudiantes->setResidenciaestudiantesOculto($residenciaestudiantes1['residenciaestudiantesOculto']);
			$myresidenciaestudiantes->setResidenciaestudiantesAccion($residenciaestudiantes1['residenciaestudiantesAccion']);
			$myresidenciaestudiantes->setResidenciaestudiantesfecha($residenciaestudiantes1['residenciaestudiantesfecha']);
			$myresidenciaestudiantes->setResidenciaestudiantesuser($residenciaestudiantes1['residenciaestudiantesuser']);
			$listaresidenciaestudiantes[] = $myresidenciaestudiantes;
			/**/
		}
		return $listaresidenciaestudiantes;
	}
	public  function existe($id, $periodo)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM residenciaestudiantes where fknumeroIdentificacion=:id AND fkperiodo=:per1");
		$select->bindValue('id', $id);
		$select->bindValue('per1', $periodo);
		$select->execute();
		if ($select->fetch() == 0) {
			//echo '0';
			return 0;
		}

		return 1;
	}
	public  function obtenerresidenciaestudiantes($id, $periodo)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM residenciaestudiantes WHERE fknumeroIdentificacion=:id AND fkperiodo=:per1');
		$select->bindValue('id', $id);
		$select->bindValue('per1', $periodo);
		$select->execute();
		$residenciaestudiantes1 = $select->fetch();

		$myresidenciaestudiantes = new Residenciaestudiantes();
		$myresidenciaestudiantes->setResidenciaEstudiantesId($residenciaestudiantes1['residenciaEstudiantesId']);
		$myresidenciaestudiantes->setFknumeroIdentificacion($residenciaestudiantes1['fknumeroIdentificacion']);
		$myresidenciaestudiantes->setDireccionDomiciliariaResidencia($residenciaestudiantes1['direccionDomiciliariaResidencia']);
		$myresidenciaestudiantes->setCodigoPostal($residenciaestudiantes1['codigoPostal']);
		$myresidenciaestudiantes->setFkperiodo($residenciaestudiantes1['fkperiodo']);
		$myresidenciaestudiantes->setResidenciaestudiantesOculto($residenciaestudiantes1['residenciaestudiantesOculto']);
		$myresidenciaestudiantes->setResidenciaestudiantesAccion($residenciaestudiantes1['residenciaestudiantesAccion']);
		$myresidenciaestudiantes->setResidenciaestudiantesfecha($residenciaestudiantes1['residenciaestudiantesfecha']);
		$myresidenciaestudiantes->setResidenciaestudiantesuser($residenciaestudiantes1['residenciaestudiantesuser']);

		return $myresidenciaestudiantes;
	}
	public  function actualizar($residenciaestudiantes1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `residenciaestudiantes`
		SET
		`residenciaEstudiantesId` = :residenciaEstudiantesId1,
		`fknumeroIdentificacion` = :fknumeroIdentificacion1,
		`direccionDomiciliariaResidencia` = :direccionDomiciliariaResidencia1,
		`codigoPostal` = :codigoPostal1,
		`fkperiodo` = :fkperiodo1,
		`residenciaestudiantesOculto` = :residenciaestudiantesOculto1,
		`residenciaestudiantesAccion` = :residenciaestudiantesAccion1,
		`residenciaestudiantesfecha` = :residenciaestudiantesfecha1,
		`residenciaestudiantesuser` = :residenciaestudiantesuser1
		WHERE `residenciaEstudiantesId` = :residenciaEstudiantesId1;');
		$actualizar->bindValue('residenciaEstudiantesId1', $residenciaestudiantes1->getResidenciaEstudiantesId());
		$actualizar->bindValue('fknumeroIdentificacion1', $residenciaestudiantes1->getFknumeroIdentificacion());
		$actualizar->bindValue('direccionDomiciliariaResidencia1', $residenciaestudiantes1->getDireccionDomiciliariaResidencia());
		$actualizar->bindValue('codigoPostal1', $residenciaestudiantes1->getCodigoPostal());
		$actualizar->bindValue('fkperiodo1', $residenciaestudiantes1->getFkperiodo());
		$actualizar->bindValue('residenciaestudiantesOculto1', $residenciaestudiantes1->getResidenciaestudiantesOculto());
		$actualizar->bindValue('residenciaestudiantesAccion1', $residenciaestudiantes1->getResidenciaestudiantesAccion());
		$actualizar->bindValue('residenciaestudiantesfecha1', $residenciaestudiantes1->getResidenciaestudiantesfecha());
		$actualizar->bindValue('residenciaestudiantesuser1', $residenciaestudiantes1->getResidenciaestudiantesuser());
		$actualizar->execute();
	}
	public  function insertar($residenciaestudiantes1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `residenciaestudiantes`
		(`residenciaEstudiantesId`,
		`fknumeroIdentificacion`,
		`direccionDomiciliariaResidencia`,
		`codigoPostal`,
		`fkperiodo`,
		`residenciaestudiantesOculto`,
		`residenciaestudiantesAccion`,
		`residenciaestudiantesfecha`,
		`residenciaestudiantesuser`)
		VALUES
		(:residenciaEstudiantesId1,
		:fknumeroIdentificacion1,
		:direccionDomiciliariaResidencia1,
		:codigoPostal1,
		:fkperiodo1,
		:residenciaestudiantesOculto1,
		:residenciaestudiantesAccion1,
		:residenciaestudiantesfecha1,
		:residenciaestudiantesuser1);');
		$insert->bindValue('residenciaEstudiantesId1', $residenciaestudiantes1->getResidenciaEstudiantesId());
		$insert->bindValue('fknumeroIdentificacion1', $residenciaestudiantes1->getFknumeroIdentificacion());
		$insert->bindValue('direccionDomiciliariaResidencia1', $residenciaestudiantes1->getDireccionDomiciliariaResidencia());
		$insert->bindValue('codigoPostal1', $residenciaestudiantes1->getCodigoPostal());
		$insert->bindValue('fkperiodo1', $residenciaestudiantes1->getFkperiodo());
		$insert->bindValue('residenciaestudiantesOculto1', $residenciaestudiantes1->getResidenciaestudiantesOculto());
		$insert->bindValue('residenciaestudiantesAccion1', $residenciaestudiantes1->getResidenciaestudiantesAccion());
		$insert->bindValue('residenciaestudiantesfecha1', $residenciaestudiantes1->getResidenciaestudiantesfecha());
		$insert->bindValue('residenciaestudiantesuser1', $residenciaestudiantes1->getResidenciaestudiantesuser());
		$insert->execute();
	}
	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM residenciaestudiantes WHERE residenciaEstudiantesId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
