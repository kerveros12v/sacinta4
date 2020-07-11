<?php

namespace Clasesphp;

class Asignaturas
{
	private $asignaturasId;
	private $codigoMateria;
	private $materia;
	public function set_AsignaturasId($asignaturasId)
	{
		$this->asignaturasId = $asignaturasId;
	}
	public function set_codigoMateria($codigoMateria)
	{
		$this->codigoMateria = $codigoMateria;
	}
	public function set_materia($materia)
	{
		$this->materia = $materia;
	}
	public function get_AsignaturasId()
	{
		return $this->asignaturasId;
	}
	public function get_codigoMateria()
	{
		return $this->codigoMateria;
	}
	public function get_materia()
	{
		return $this->materia;
	}
}
