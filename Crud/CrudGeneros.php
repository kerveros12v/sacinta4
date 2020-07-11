<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Generos.php");

use Clasesphp\Generos;

class CrudGeneros
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaGeneros = null;
		$select = $db->query('SELECT * FROM generos');
		foreach ($select->fetchAll() as $generos1) {
			$mygenero = new Generos();
			$mygenero->set_generoId($generos1['generoId']);
			$mygenero->set_genero($generos1['genero']);
			$mygenero->set_generoscodigo($generos1['generoscodigo']);
			$mygenero->set_generoOculto($generos1['generoOculto']);
			$mygenero->set_generoAccion($generos1['generoAccion']);
			$mygenero->set_generofecha($generos1['generofecha']);
			$mygenero->set_generouser($generos1['generouser']);
			$listaGeneros[] = $mygenero;
		}
		return $listaGeneros;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM generos WHERE generoId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerGeneros($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM generos WHERE generoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$generos1 = $select->fetch();
		$mygenero = new Generos();
		$mygenero->set_generoId($generos1['generoId']);
		$mygenero->set_genero($generos1['genero']);
		$mygenero->set_generoscodigo($generos1['generoscodigo']);
		$mygenero->set_generoOculto($generos1['generoOculto']);
		$mygenero->set_generoAccion($generos1['generoAccion']);
		$mygenero->set_generofecha($generos1['generofecha']);
		$mygenero->set_generouser($generos1['generouser']);
		return $mygenero;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT genero FROM generos WHERE generoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$generos1 = $select->fetch();
		$mygenero = $generos1['genero'];

		return $mygenero;
	}
	public function actualizar($generos1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `generos`
		SET
		`generoId` = :generoId1,
		`generoscodigo` = :generoscodigo1,
		`genero` = :genero1,
		`generoOculto` = :generoOculto1,
		`generoAccion` = :generoAccion1,
		`generofecha` = :generofecha1,
		`generouser` = :generouser1
		WHERE `generoId` = :generoId1;');
		$actualizar->bindValue('generoId1', $generos1->get_generoId());
		$actualizar->bindValue('generoscodigo1', $generos1->get_generoscodigo());
		$actualizar->bindValue('genero1', $generos1->get_genero());
		$actualizar->bindValue('generoOculto1', $generos1->get_generoOculto());
		$actualizar->bindValue('generoAccion1', $generos1->get_generoAccion());
		$actualizar->bindValue('generofecha1', $generos1->get_generofecha());
		$actualizar->bindValue('generouser1', $generos1->get_generouser());
		$actualizar->execute();
	}
	public function insertar($generos1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `generos`
		(`generoId`,
		`generoscodigo`,
		`genero`,
		`generoOculto`,
		`generoAccion`,
		`generofecha`,
		`generouser`)
		VALUES
		(:generoId1,
		:generoscodigo1,
		:genero1,
		:generoOculto1,
		:generoAccion1,
		:generofecha1,
		:generouser1);
		');
		$insert->bindValue('generoId1', $generos1->get_generoId());
		$insert->bindValue('generoscodigo1', $generos1->get_generoscodigo());
		$insert->bindValue('genero1', $generos1->get_genero());
		$insert->bindValue('generoOculto1', $generos1->get_generoOculto());
		$insert->bindValue('generoAccion1', $generos1->get_generoAccion());
		$insert->bindValue('generofecha1', $generos1->get_generofecha());
		$insert->bindValue('generouser1', $generos1->get_generouser());
		$insert->execute();
	}
}
