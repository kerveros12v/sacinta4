<?php
namespace Clasesphp;

class Tipossangre{
private $tipossangreOculto, $tipossangreAccion, $tipossangrefecha, $tipossangreuser;
private $tipoSangreId;
private $tipoSangre;
private $tipossangrescodigo;
	public function _construct(){}
	public function set_tipoSangreId($tipoSangreId){$this->tipoSangreId=$tipoSangreId;}
	public function get_tipoSangreId() {return $this->tipoSangreId;}
	public function set_tipoSangre($tipoSangre){$this->tipoSangre=$tipoSangre;}
	public function get_tipoSangre() {return $this->tipoSangre;}
	public function set_tipossangrescodigo($tipossangrescodigo){$this->tipossangrescodigo=$tipossangrescodigo;}
	public function get_tipossangrescodigo() {return $this->tipossangrescodigo;}
	public function set_tipossangreOculto($tipossangreOculto){$this->tipossangreOculto=$tipossangreOculto;}
	public function get_tipossangreOculto() {return $this->tipossangreOculto;}
	public function set_tipossangreAccion($tipossangreAccion){$this->tipossangreAccion=$tipossangreAccion;}
	public function get_tipossangreAccion() {return $this->tipossangreAccion;}
	public function set_tipossangrefecha($tipossangrefecha){$this->tipossangrefecha=$tipossangrefecha;}
	public function get_tipossangrefecha() {return $this->tipossangrefecha;}
	public function set_tipossangreuser($tipossangreuser){$this->tipossangreuser=$tipossangreuser;}
	public function get_tipossangreuser() {return $this->tipossangreuser;}
}
?>