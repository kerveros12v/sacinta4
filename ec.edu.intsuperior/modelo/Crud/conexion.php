<?php

namespace Crud;

class  Db
{
	private static $conexion = NULL;
	private function __construct()
	{
	}

	public static function conectar()
	{
		$pdoOptions[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
		self::$conexion = new \PDO('mysql:host=127.0.0.1;dbname=intsistemaa5', 'remoto', 'Katekio12v.', $pdoOptions);
		return self::$conexion;
	}
}
