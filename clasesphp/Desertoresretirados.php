<?php
namespace Clasesphp;

	class Desertoresretirados
{
private $idDesertoresRetiradosId;
private $fkTipoRetiroEstudianteTipoRetiroEstudianteId;
private $codigoITS;
private $provincia_provinciaId;
private $matriculas_CodigoMatricula;
private $fkInstitutosInstitutosId;
private $fechaDelDocumentoHabilitantePresentado;
public function set_idDesertoresRetiradosId($idDesertoresRetiradosId){$this->idDesertoresRetiradosId=$idDesertoresRetiradosId;}
public function set_fkTipoRetiroEstudianteTipoRetiroEstudianteId($fkTipoRetiroEstudianteTipoRetiroEstudianteId){$this->fkTipoRetiroEstudianteTipoRetiroEstudianteId=$fkTipoRetiroEstudianteTipoRetiroEstudianteId;}
public function set_CodigoITS($codigoITS){$this->codigoITS=$codigoITS;}
public function set_Provincia_provinciaId($provincia_provinciaId){$this->provincia_provinciaId=$provincia_provinciaId;}
public function set_Matriculas_CodigoMatricula($matriculas_CodigoMatricula){$this->matriculas_CodigoMatricula=$matriculas_CodigoMatricula;}
public function set_fkInstitutosInstitutosId($fkInstitutosInstitutosId){$this->fkInstitutosInstitutosId=$fkInstitutosInstitutosId;}
public function set_FechaDelDocumentoHabilitantePresentado($fechaDelDocumentoHabilitantePresentado){$this->fechaDelDocumentoHabilitantePresentado=$fechaDelDocumentoHabilitantePresentado;}
public function get_idDesertoresRetiradosId(){return $this->idDesertoresRetiradosId;}
public function get_fkTipoRetiroEstudianteTipoRetiroEstudianteId(){return $this->fkTipoRetiroEstudianteTipoRetiroEstudianteId;}
public function get_CodigoITS(){return $this->codigoITS;}
public function get_Provincia_provinciaId(){return $this->provincia_provinciaId;}
public function get_Matriculas_CodigoMatricula(){return $this->matriculas_CodigoMatricula;}
public function get_fkInstitutosInstitutosId(){return $this->fkInstitutosInstitutosId;}
public function get_FechaDelDocumentoHabilitantePresentado(){return $this->fechaDelDocumentoHabilitantePresentado;}
		public function _construct(){}
	}
?>