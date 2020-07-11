<?php

namespace Clasesphp;

class Cursos
{
	private $idCursos;
	private $carreras_carrerasId;
	private $paralelo_paraleloId;
	private $nivelAcademico_NivelAcademicoQueCursaId;
	private $jornadasAcademicas_JornadaAcademicaId;
	public function set_idCursos($idCursos)
	{
		$this->idCursos = $idCursos;
	}
	public function set_Carreras_carrerasId($carreras_carrerasId)
	{
		$this->carreras_carrerasId = $carreras_carrerasId;
	}
	public function set_Paralelo_paraleloId($paralelo_paraleloId)
	{
		$this->paralelo_paraleloId = $paralelo_paraleloId;
	}
	public function set_NivelAcademico_NivelAcademicoQueCursaId($nivelAcademico_NivelAcademicoQueCursaId)
	{
		$this->nivelAcademico_NivelAcademicoQueCursaId = $nivelAcademico_NivelAcademicoQueCursaId;
	}
	public function set_JornadasAcademicas_JornadaAcademicaId($jornadasAcademicas_JornadaAcademicaId)
	{
		$this->jornadasAcademicas_JornadaAcademicaId = $jornadasAcademicas_JornadaAcademicaId;
	}
	public function get_idCursos()
	{
		return $this->idCursos;
	}
	public function get_Carreras_carrerasId()
	{
		return $this->carreras_carrerasId;
	}
	public function get_Paralelo_paraleloId()
	{
		return $this->paralelo_paraleloId;
	}
	public function get_NivelAcademico_NivelAcademicoQueCursaId()
	{
		return $this->nivelAcademico_NivelAcademicoQueCursaId;
	}
	public function get_JornadasAcademicas_JornadaAcademicaId()
	{
		return $this->jornadasAcademicas_JornadaAcademicaId;
	}

	public function _construct()
	{
	}
}
