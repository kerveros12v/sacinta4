<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Estudiantestitulotercernivel.php");

use Clasesphp\Estudiantestitulotercernivel;

class CrudEstudiantestitulotercernivel
{
	// constructor de la clase
	public function __construct()
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}
	public  function mostrar()
	{
		$db = Db::conectar();
		$listaEstudiantestitulotercernivel = null;
		$select = $db->query("SELECT * FROM `estudiantestitulotercernivel`");
		foreach ($select->fetchAll() as $estudiantestitulotercernivel) {

			$myestudiantestitulotercernivel = new Estudiantestitulotercernivel();
			$myestudiantestitulotercernivel->setEtnid($estudiantestitulotercernivel['estudiantesTituloTercerNivelid']);
			$myestudiantestitulotercernivel->setEstudiantesNumeroIdentificacion($estudiantestitulotercernivel['estudiantes_numeroIdentificacion']);
			$myestudiantestitulotercernivel->setEtnTituloTercerNivelId($estudiantestitulotercernivel['tituloTercerNivel_tituloTercerNivelId']);
			$myestudiantestitulotercernivel->setEtnuser($estudiantestitulotercernivel['estudiantestitulotercerniveluser']);
			$myestudiantestitulotercernivel->setEtnfecha($estudiantestitulotercernivel['estudiantestitulotercernivelfecha']);
			$myestudiantestitulotercernivel->setEtnAccion($estudiantestitulotercernivel['estudiantestitulotercernivelAccion']);
			$myestudiantestitulotercernivel->setEtnOculto($estudiantestitulotercernivel['estudiantestitulotercernivelOculto']);

			$listaEstudiantestitulotercernivel[] = $myestudiantestitulotercernivel;
		}
		return $listaEstudiantestitulotercernivel;
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `estudiantestitulotercernivel` where estudiantes_numeroIdentificacion=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM estudiantestitulotercernivel WHERE estudiantes_numeroIdentificacion=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public  function obtenerEstudiantestitulotercernivel($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM estudiantestitulotercernivel WHERE estudiantes_numeroIdentificacion=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$estudiantestitulotercernivel = $select->fetch();
		$myestudiantestitulotercernivel = new Estudiantestitulotercernivel();
		$myestudiantestitulotercernivel->setEtnid($estudiantestitulotercernivel['estudiantesTituloTercerNivelid']);
		$myestudiantestitulotercernivel->setEstudiantesNumeroIdentificacion($estudiantestitulotercernivel['estudiantes_numeroIdentificacion']);
		$myestudiantestitulotercernivel->setEtnTituloTercerNivelId($estudiantestitulotercernivel['tituloTercerNivel_tituloTercerNivelId']);
		$myestudiantestitulotercernivel->setEtnuser($estudiantestitulotercernivel['estudiantestitulotercerniveluser']);
		$myestudiantestitulotercernivel->setEtnfecha($estudiantestitulotercernivel['estudiantestitulotercernivelfecha']);
		$myestudiantestitulotercernivel->setEtnAccion($estudiantestitulotercernivel['estudiantestitulotercernivelAccion']);
		$myestudiantestitulotercernivel->setEtnOculto($estudiantestitulotercernivel['estudiantestitulotercernivelOculto']);

		return $myestudiantestitulotercernivel;
	}
	public  function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tituloTercerNivel_tituloTercerNivelId FROM estudiantestitulotercernivel WHERE estudiantes_numeroIdentificacion=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$estudiantestitulotercernivel = $select->fetch();
		$myestudiantestitulotercernivel = ($estudiantestitulotercernivel['tituloTercerNivel_tituloTercerNivelId']);

		return $myestudiantestitulotercernivel;
	}
	public  function actualizar($estudiantestitulotercernivel)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `estudiantestitulotercernivel`
		SET
		`estudiantesTituloTercerNivelid` = :estudiantesTituloTercerNivelid1,
		`estudiantes_numeroIdentificacion` = :estudiantes_numeroIdentificacion1,
		`tituloTercerNivel_tituloTercerNivelId` = :tituloTercerNivel_tituloTercerNivelId1,
		`estudiantestitulotercernivelOculto` = :estudiantestitulotercernivelOculto1,
		`estudiantestitulotercernivelAccion` = :estudiantestitulotercernivelAccion1,
		`estudiantestitulotercernivelfecha` = :estudiantestitulotercernivelfecha1,
		`estudiantestitulotercerniveluser` = :estudiantestitulotercerniveluser1
		WHERE `estudiantesTituloTercerNivelid` = :estudiantesTituloTercerNivelid1;');
		$actualizar->bindValue('estudiantesTituloTercerNivelid1', $estudiantestitulotercernivel->getEtnid());
		$actualizar->bindValue('estudiantes_numeroIdentificacion1', $estudiantestitulotercernivel->getEstudiantesNumeroIdentificacion());
		$actualizar->bindValue('tituloTercerNivel_tituloTercerNivelId1', $estudiantestitulotercernivel->getEtnTituloTercerNivelId());
		$actualizar->bindValue('estudiantestitulotercernivelOculto1', $estudiantestitulotercernivel->getEtnOculto());
		$actualizar->bindValue('estudiantestitulotercernivelAccion1', $estudiantestitulotercernivel->getEtnAccion());
		$actualizar->bindValue('estudiantestitulotercernivelfecha1', $estudiantestitulotercernivel->getEtnfecha());
		$actualizar->bindValue('estudiantestitulotercerniveluser1', $estudiantestitulotercernivel->getEtnuser());
		$actualizar->execute();
	}
	public  function insertar($estudiantestitulotercernivel)
	{
		echo "Ingreso titulo";
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `estudiantestitulotercernivel`
		(`estudiantesTituloTercerNivelid`,
		`estudiantes_numeroIdentificacion`,
		`tituloTercerNivel_tituloTercerNivelId`,
		`estudiantestitulotercernivelOculto`,
		`estudiantestitulotercernivelAccion`,
		`estudiantestitulotercernivelfecha`,
		`estudiantestitulotercerniveluser`)
		VALUES
		(:estudiantesTituloTercerNivelid1,
		:estudiantes_numeroIdentificacion1,
		:tituloTercerNivel_tituloTercerNivelId1,
		:estudiantestitulotercernivelOculto1,
		:estudiantestitulotercernivelAccion1,
		:estudiantestitulotercernivelfecha1,
		:estudiantestitulotercerniveluser1);');
		$insert->bindValue('estudiantesTituloTercerNivelid1', $estudiantestitulotercernivel->getEtnid());
		$insert->bindValue('estudiantes_numeroIdentificacion1', $estudiantestitulotercernivel->getEstudiantesNumeroIdentificacion());
		$insert->bindValue('tituloTercerNivel_tituloTercerNivelId1', $estudiantestitulotercernivel->getEtnTituloTercerNivelId());
		$insert->bindValue('estudiantestitulotercernivelOculto1', $estudiantestitulotercernivel->getEtnOculto());
		$insert->bindValue('estudiantestitulotercernivelAccion1', $estudiantestitulotercernivel->getEtnAccion());
		$insert->bindValue('estudiantestitulotercernivelfecha1', $estudiantestitulotercernivel->getEtnfecha());
		$insert->bindValue('estudiantestitulotercerniveluser1', $estudiantestitulotercernivel->getEtnuser());
		$insert->execute();
		echo "Salio titulo";
	}
}
