<?php
namespace Clasesphp;

	class Cursosperiodoacademico
{
	private $periodoAcademicoCursoId;
	private $fkperiodoacademicoId;
	private $cursos_idCursos;
	public function set_periodoAcademicoCursoId($periodoAcademicoCursoId){$this->periodoAcademicoCursoId=$periodoAcademicoCursoId;}
	public function set_fkperiodoacademicoId($fkperiodoacademicoId){$this->fkperiodoacademicoId=$fkperiodoacademicoId;}
	public function set_cursos_idCursos($cursos_idCursos){$this->cursos_idCursos=$cursos_idCursos;}
    public function get_periodoAcademicoCursoId(){return $this->periodoAcademicoCursoId;}
	public function get_fkperiodoacademicoId(){return $this->fkperiodoacademicoId;}
	public function get_cursos_idCursos(){return $this->cursos_idCursos;}
		public function _construct(){}
	}
?>