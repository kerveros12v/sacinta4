<?php
namespace Clasesphp;

class Tipomatricula{
private $tipomatriculacodigo;
private $tipomatriculaOculto;
private $tipomatriculaAccion;
private $tipomatriculafecha;
private $tipomatriculauser;
private $tipoMatriculaId;
private $tipoMatricula;
	public function _construct(){}
	public function set_tipomatriculauser($tipomatriculauser){$this->tipomatriculauser=$tipomatriculauser;}
	public function get_tipomatriculauser() {return $this->tipomatriculauser;}
	public function set_tipomatriculafecha($tipomatriculafecha){$this->tipomatriculafecha=$tipomatriculafecha;}
	public function get_tipomatriculafecha() {return $this->tipomatriculafecha;}
	public function set_tipomatriculaAccion($tipomatriculaAccion){$this->tipomatriculaAccion=$tipomatriculaAccion;}
	public function get_tipomatriculaAccion() {return $this->tipomatriculaAccion;}
	public function set_tipomatriculaOculto($tipomatriculaOculto){$this->tipomatriculaOculto=$tipomatriculaOculto;}
	public function get_tipomatriculaOculto() {return $this->tipomatriculaOculto;}
	public function set_tipomatriculacodigo($tipomatriculacodigo){$this->tipomatriculacodigo=$tipomatriculacodigo;}
	public function get_tipomatriculacodigo() {return $this->tipomatriculacodigo;}
	public function set_tipoMatriculaId($tipoMatriculaId){$this->tipoMatriculaId=$tipoMatriculaId;}
	public function get_tipoMatriculaId() {return $this->tipoMatriculaId;}
	public function set_tipoMatricula($tipoMatricula){$this->tipoMatricula=$tipoMatricula;}
	public function get_tipoMatricula() {return $this->tipoMatricula;}
	public function __toString(){
		return $this->tipoMatricula;
	}
}
?>