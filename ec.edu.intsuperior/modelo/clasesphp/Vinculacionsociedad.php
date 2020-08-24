<?php
namespace Clasesphp;

class Vinculacionsociedad{
private $inculaciocionSociedadId;
private $numProyecto;
private $idProyectosMacro;
private $proyectoMicro;
private $objetivoProyecto;
private $codigoMatricula;
private $empresasId;
private $fechaInicioProyecto;
private $fechaFinProyecto;
private $fechaPrecentacionProyecto;
private $numeroHorasProyecto;
private $docentes_numeroIdentificacion;
private $notaTutor;
private $notauvcom;
private $notaVinculacion;
private $fisico;
private $digital;
private $certificado;
private $tipoAlcanceProyectoVinculacionId;
private $vinculacion;
private $fkparticipaEnProyectoVinculacionSociedadid;
	public function _construct(){}
	public function set_inculaciocionSociedadId($inculaciocionSociedadId){$this->inculaciocionSociedadId=$inculaciocionSociedadId;}
	public function get_inculaciocionSociedadId() {return $this->inculaciocionSociedadId;}

	public function set_numProyecto($numProyecto){$this->numProyecto=$numProyecto;}
	public function get_numProyecto() {return $this->numProyecto;}

	public function set_idProyectosMacro($idProyectosMacro){$this->idProyectosMacro=$idProyectosMacro;}
	public function get_idProyectosMacro() {return $this->idProyectosMacro;}

	public function set_proyectoMicro($proyectoMicro){$this->proyectoMicro=$proyectoMicro;}
	public function get_proyectoMicro() {return $this->proyectoMicro;}


	public function set_objetivoProyecto($objetivoProyecto){$this->objetivoProyecto=$objetivoProyecto;}
	public function get_objetivoProyecto() {return $this->objetivoProyecto;}

	public function set_codigoMatricula($codigoMatricula){$this->codigoMatricula=$codigoMatricula;}
	public function get_codigoMatricula() {return $this->codigoMatricula;}

	public function set_empresasId($empresasId){$this->empresasId=$empresasId;}
	public function get_empresasId() {return $this->empresasId;}

	public function set_fechaInicioProyecto($fechaInicioProyecto){$this->fechaInicioProyecto=$fechaInicioProyecto;}
	public function get_fechaInicioProyecto() {return $this->fechaInicioProyecto;}

	public function set_fechaFinProyecto($fechaFinProyecto){$this->fechaFinProyecto=$fechaFinProyecto;}
	public function get_fechaFinProyecto() {return $this->fechaFinProyecto;}


	public function set_fechaPrecentacionProyecto($fechaPrecentacionProyecto){$this->fechaPrecentacionProyecto=$fechaPrecentacionProyecto;}
	public function get_fechaPrecentacionProyecto() {return $this->fechaPrecentacionProyecto;}

	public function set_numeroHorasProyecto($numeroHorasProyecto){$this->numeroHorasProyecto=$numeroHorasProyecto;}
	public function get_numeroHorasProyecto() {return $this->numeroHorasProyecto;}

	public function set_docentes_numeroIdentificacion($docentes_numeroIdentificacion){$this->docentes_numeroIdentificacion=$docentes_numeroIdentificacion;}
	public function get_docentes_numeroIdentificacion() {return $this->docentes_numeroIdentificacion;}

	public function set_notaTutor($notaTutor){$this->notaTutor=$notaTutor;}
	public function get_notaTutor() {return $this->notaTutor;}

	public function set_notauvcom($notauvcom){$this->notauvcom=$notauvcom;}
	public function get_notauvcom() {return $this->notauvcom;}


	public function set_notaVinculacion($notaVinculacion){$this->notaVinculacion=$notaVinculacion;}
	public function get_notaVinculacion() {return $this->notaVinculacion;}

	public function set_fisico($fisico){$this->fisico=$fisico;}
	public function get_fisico() {return $this->fisico;}

	public function set_digital($digital){$this->digital=$digital;}
	public function get_digital() {return $this->digital;}

	public function set_certificado($certificado){$this->certificado=$certificado;}
	public function get_certificado() {return $this->certificado;}

	public function set_tipoAlcanceProyectoVinculacionId($tipoAlcanceProyectoVinculacionId){$this->tipoAlcanceProyectoVinculacionId=$tipoAlcanceProyectoVinculacionId;}
	public function get_tipoAlcanceProyectoVinculacionId() {return $this->tipoAlcanceProyectoVinculacionId;}


	public function set_vinculacion($vinculacion){$this->vinculacion=$vinculacion;}
	public function get_vinculacion() {return $this->vinculacion;}

	public function set_fkparticipaEnProyectoVinculacionSociedadid($fkparticipaEnProyectoVinculacionSociedadid) {$this->fkparticipaEnProyectoVinculacionSociedadid=$fkparticipaEnProyectoVinculacionSociedadid;}
	public function get_fkparticipaEnProyectoVinculacionSociedadid(){return $this->fkparticipaEnProyectoVinculacionSociedadid;}

}
?>