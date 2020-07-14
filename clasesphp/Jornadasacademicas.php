<?php

namespace Clasesphp;

class Jornadasacademicas
{
	private $jornadaAcademicaId;
	private $jornadaAcademicaCodigo;
	private $jornadaAcademica;
	private $jornadasacademicasOculto, $jornadasacademicasAccion, $jornadasacademicasfecha, $jornadasacademicasuser;
	public function _construct()
	{
	}
	public function set_JornadaAcademicaId($jornadaAcademicaId)
	{
		$this->jornadaAcademicaId = $jornadaAcademicaId;
	}
	public function get_JornadaAcademicaId()
	{
		return $this->jornadaAcademicaId;
	}

	public function set_JornadaAcademicaCodigo($jornadaAcademicaCodigo)
	{
		$this->jornadaAcademicaCodigo = $jornadaAcademicaCodigo;
	}
	public function get_JornadaAcademicaCodigo()
	{
		return $this->jornadaAcademicaCodigo;
	}

	public function set_JornadaAcademica($jornadaAcademica)
	{
		$this->jornadaAcademica = $jornadaAcademica;
	}
	public function get_JornadaAcademica()
	{
		return $this->jornadaAcademica;
	}
	public function set_jornadasacademicasOculto($jornadasacademicasOculto)
	{
		$this->jornadasacademicasOculto = $jornadasacademicasOculto;
	}
	public function get_jornadasacademicasOculto()
	{
		return $this->jornadasacademicasOculto;
	}

	public function set_jornadasacademicasAccion($jornadasacademicasAccion)
	{
		$this->jornadasacademicasAccion = $jornadasacademicasAccion;
	}
	public function get_jornadasacademicasAccion()
	{
		return $this->jornadasacademicasAccion;
	}

	public function set_jornadasacademicasfecha($jornadasacademicasfecha)
	{
		$this->jornadasacademicasfecha = $jornadasacademicasfecha;
	}
	public function get_jornadasacademicasfecha()
	{
		return $this->jornadasacademicasfecha;
	}

	public function set_jornadasacademicasuser($jornadasacademicasuser)
	{
		$this->jornadasacademicasuser = $jornadasacademicasuser;
	}
	public function get_jornadasacademicasuser()
	{
		return $this->jornadasacademicasuser;
	}
}
