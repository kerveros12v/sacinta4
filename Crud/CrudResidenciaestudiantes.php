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
			`ResidenciaEstudiantesId` = :ResidenciaEstudiantesId1,
			`Estudiantes_numeroIdentificacion` = :Estudiantes_numeroIdentificacion1,
			`paisResidencia` = :paisResidencia1,
			`provinciaResidencia` = :provinciaResidencia1,
			`cantonResidencia` = :cantonResidencia1,
			`direccionDomiciliariaResidencia` = :direccionDomiciliariaResidencia1,
			`codigoPostal` = :codigoPostal1,
			`periodo` = :periodo1,
			`residenciaestudiantesOculto` = :residenciaestudiantesOculto1,
			`residenciaestudiantesAccion` = :residenciaestudiantesAccion1,
			`residenciaestudiantesfecha` = :residenciaestudiantesfecha1,
			`residenciaestudiantesuser` = :residenciaestudiantesuser1
			WHERE `ResidenciaEstudiantesId` = :ResidenciaEstudiantesId1');
		$actualizar->bindValue('id', $residenciaestudiantes1->getResidenciaEstudiantesId());
		$actualizar->bindValue('num', $residenciaestudiantes1->getFknumeroIdentificacion());
		$actualizar->bindValue('direccion', $residenciaestudiantes1->getDireccionDomiciliariaResidencia());
		$actualizar->bindValue('codigop', $residenciaestudiantes1->getCodigoPostal());
		$actualizar->bindValue('per1', $residenciaestudiantes1->getFkperiodo());
		$actualizar->bindValue('oculto', $residenciaestudiantes1->getResidenciaestudiantesOculto());
		$actualizar->bindValue('accion', $residenciaestudiantes1->getResidenciaestudiantesAccion());
		$actualizar->bindValue('fecha', $residenciaestudiantes1->getResidenciaestudiantesfecha());
		$actualizar->bindValue('user', $residenciaestudiantes1->getResidenciaestudiantesuser());
		$actualizar->execute();
	}
	public  function insertar($residenciaestudiantes1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `residenciaestudiantes`
			(`ResidenciaEstudiantesId`,
			`Estudiantes_numeroIdentificacion`,
			`paisResidencia`,
			`provinciaResidencia`,
			`cantonResidencia`,
			`direccionDomiciliariaResidencia`,
			`codigoPostal`,
			`periodo`,
			`residenciaestudiantesOculto`,
			`residenciaestudiantesAccion`,
			`residenciaestudiantesfecha`,
			`residenciaestudiantesuser`)
			VALUES
			(:ResidenciaEstudiantesId1,
			:Estudiantes_numeroIdentificacion1,
			:paisResidencia1,
			:provinciaResidencia1,
			:cantonResidencia1,
			:direccionDomiciliariaResidencia1,
			:codigoPostal1,
			:periodo1,
			:residenciaestudiantesOculto1,
			:residenciaestudiantesAccion1,
			:residenciaestudiantesfecha1,
			:residenciaestudiantesuser1);');
		$insert->bindValue('ResidenciaEstudiantesId1', $residenciaestudiantes1->get_residenciaEstudiantesId());
		$insert->bindValue('Estudiantes_numeroIdentificacion1', $residenciaestudiantes1->get_estudiantes_numeroIdentificacion());
		$insert->bindValue('paisResidencia1', $residenciaestudiantes1->get_paisResidencia());
		$insert->bindValue('provinciaResidencia1', $residenciaestudiantes1->get_provinciaResidencia());
		$insert->bindValue('cantonResidencia1', $residenciaestudiantes1->get_cantonResidencia());
		$insert->bindValue('direccionDomiciliariaResidencia1', $residenciaestudiantes1->get_direccionDomiciliariaResidencia());
		$insert->bindValue('codigoPostal1', $residenciaestudiantes1->get_codigoPostal());
		$insert->bindValue('periodo1', $residenciaestudiantes1->get_periodo());
		$insert->bindValue('residenciaestudiantesOculto1', $residenciaestudiantes1->get_residenciaestudiantesOculto());
		$insert->bindValue('residenciaestudiantesAccion1', $residenciaestudiantes1->get_residenciaestudiantesAccion());
		$insert->bindValue('residenciaestudiantesfecha1', $residenciaestudiantes1->get_residenciaestudiantesfecha());
		$insert->bindValue('residenciaestudiantesuser1', $residenciaestudiantes1->get_residenciaestudiantesuser());
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
