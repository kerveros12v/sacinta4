<?php

namespace Clasesphp;

class Discapacidadesestudiantes
{
	private  $fkEstudiantesNumeroIdentificacion, $fkDiscapacidadDiscapacidadId, $fkTipoDiscapacidadTipoDiscapacidadId, $porcentajeDiscapacidad, $discapacidadestperiodo, $discapacidadesestudiantesOculto, $discapacidadesestudiantesAccion, $discapacidadesestudiantesfecha, $discapacidadesestudiantesuser;
	private $carnetConadisId, $discapacidadesestudiantesid;
	public function set_discapacidadesestudiantesid($discapacidadesestudiantesid)
	{
		$this->discapacidadesestudiantesid = $discapacidadesestudiantesid;
	}
	public function get_discapacidadesestudiantesid()
	{
		return $this->discapacidadesestudiantesid;
	}


	public function set_discapacidadestperiodo($discapacidadestperiodo)
	{
		$this->discapacidadestperiodo = $discapacidadestperiodo;
	}

	public function get_discapacidadestperiodo()
	{
		return $this->discapacidadestperiodo;
	}
	public function set_CarnetConadisId($carnetConadisId)
	{
		$this->carnetConadisId = $carnetConadisId;
	}
	public function set_fkEstudiantesNumeroIdentificacion($fkEstudiantesNumeroIdentificacion)
	{
		$this->fkEstudiantesNumeroIdentificacion = $fkEstudiantesNumeroIdentificacion;
	}
	public function set_fkDiscapacidadDiscapacidadId($fkDiscapacidadDiscapacidadId)
	{
		$this->fkDiscapacidadDiscapacidadId = $fkDiscapacidadDiscapacidadId;
	}
	public function set_fkTipoDiscapacidadTipoDiscapacidadId($fkTipoDiscapacidadTipoDiscapacidadId)
	{
		$this->fkTipoDiscapacidadTipoDiscapacidadId = $fkTipoDiscapacidadTipoDiscapacidadId;
	}
	public function set_porcentajeDiscapacidad($porcentajeDiscapacidad)
	{
		$this->porcentajeDiscapacidad = $porcentajeDiscapacidad;
	}

	public function get_CarnetConadisId()
	{
		return $this->carnetConadisId;
	}
	public function get_fkEstudiantesNumeroIdentificacion()
	{
		return $this->fkEstudiantesNumeroIdentificacion;
	}
	public function get_fkDiscapacidadDiscapacidadId()
	{
		return $this->fkDiscapacidadDiscapacidadId;
	}
	public function get_fkTipoDiscapacidadTipoDiscapacidadId()
	{
		return $this->fkTipoDiscapacidadTipoDiscapacidadId;
	}
	public function get_porcentajeDiscapacidad()
	{
		return $this->porcentajeDiscapacidad;
	}
	public function set_discapacidadesestudiantesOculto($discapacidadesestudiantesOculto)
	{
		$this->discapacidadesestudiantesOculto = $discapacidadesestudiantesOculto;
	}
	public function get_discapacidadesestudiantesOculto()
	{
		return $this->discapacidadesestudiantesOculto;
	}
	public function set_discapacidadesestudiantesAccion($discapacidadesestudiantesAccion)
	{
		$this->discapacidadesestudiantesAccion = $discapacidadesestudiantesAccion;
	}
	public function get_discapacidadesestudiantesAccion()
	{
		return $this->discapacidadesestudiantesAccion;
	}
	public function set_discapacidadesestudiantesfecha($discapacidadesestudiantesfecha)
	{
		$this->discapacidadesestudiantesfecha = $discapacidadesestudiantesfecha;
	}
	public function get_discapacidadesestudiantesfecha()
	{
		return $this->discapacidadesestudiantesfecha;
	}
	public function set_discapacidadesestudiantesuser($discapacidadesestudiantesuser)
	{
		$this->discapacidadesestudiantesuser = $discapacidadesestudiantesuser;
	}
	public function get_discapacidadesestudiantesuser()
	{
		return $this->discapacidadesestudiantesuser;
	}

	public function _construct()
	{
	}
	public function __toString()
	{
		return ("discapacidadesestudiantesid:{".$this->discapacidadesestudiantesid.
			"}carnetConadisId: {" . $this->carnetConadisId .
			"} fkEstudiantesNumeroIdentificacion: {" . $this->fkEstudiantesNumeroIdentificacion .
			"} fkDiscapacidadDiscapacidadId {" . $this->fkDiscapacidadDiscapacidadId .
			"} fkTipoDiscapacidadTipoDiscapacidadId: {" . $this->fkTipoDiscapacidadTipoDiscapacidadId .
			"} porcentajeDiscapacidad: {" . $this->porcentajeDiscapacidad .
			"} discapacidadestperiodo: {" . $this->discapacidadestperiodo . "}");
	}
}
