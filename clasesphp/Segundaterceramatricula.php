<?php
namespace Clasesphp;

class Segundaterceramatricula
{
private $idSegundaTerceraMatricula ;
private $institutos_InstitutosId;
private $matriculas_CodigoMatricula;
private $nivelAcademico_NivelAcademicoQueCursaId;
private $asignaturas_codigoMateria;
public function _construct(){}
public function set_idSegundaTerceraMatricula($idSegundaTerceraMatricula){$this->idSegundaTerceraMatricula=$idSegundaTerceraMatricula;}
public function get_idSegundaTerceraMatricula(){return $this->idSegundaTerceraMatricula;}
public function set_institutos_InstitutosId($institutos_InstitutosId){$this->institutos_InstitutosId=$institutos_InstitutosId;}
public function get_institutos_InstitutosId(){return $this->institutos_InstitutosId;}
public function set_matriculas_CodigoMatricula($matriculas_CodigoMatricula){$this->matriculas_CodigoMatricula=$matriculas_CodigoMatricula;}
public function get_matriculas_CodigoMatricula(){return $this->matriculas_CodigoMatricula;}
public function set_nivelAcademico_NivelAcademicoQueCursaId($nivelAcademico_NivelAcademicoQueCursaId){$this->nivelAcademico_NivelAcademicoQueCursaId=$nivelAcademico_NivelAcademicoQueCursaId;}
public function get_nivelAcademico_NivelAcademicoQueCursaId(){return $this->nivelAcademico_NivelAcademicoQueCursaId;}
public function set_asignaturas_codigoMateria($asignaturas_codigoMateria){$this->asignaturas_codigoMateria=$asignaturas_codigoMateria;}
public function get_asignaturas_codigoMateria(){return $this->asignaturas_codigoMateria;}
}
?>