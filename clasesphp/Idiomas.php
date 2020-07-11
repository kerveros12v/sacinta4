<?php
namespace Clasesphp;

class Idiomas{
	private $ididiomaAncestral, $idiomasancestralcodigo,$idioma, $idiomaetnia, $idiomaancestralOculto, $idiomaancestralAccion, $idiomaancestralfecha, $idiomaancestraluser;

	public function _construct(){}
	public function set_ididiomaAncestral($ididiomaAncestral){$this->ididiomaAncestral=$ididiomaAncestral;}
	public function get_ididiomaAncestral() {return $this->ididiomaAncestral;}
	public function set_idioma($idioma){$this->idioma=$idioma;}
	public function get_idioma() {return $this->idioma;}
	public function set_idiomaetnia($idiomaetnia){$this->idiomaetnia=$idiomaetnia;}
	public function get_idiomaetnia() {return $this->idiomaetnia;}
	public function set_idiomaancestralOculto($idiomaancestralOculto){$this->idiomaancestralOculto=$idiomaancestralOculto;}
	public function get_idiomaancestralOculto() {return $this->idiomaancestralOculto;}
	public function set_idiomaancestralAccion($idiomaancestralAccion){$this->idiomaancestralAccion=$idiomaancestralAccion;}
	public function get_idiomaancestralAccion() {return $this->idiomaancestralAccion;}
	public function set_idiomaancestralfecha($idiomaancestralfecha){$this->idiomaancestralfecha=$idiomaancestralfecha;}
	public function get_idiomaancestralfecha() {return $this->idiomaancestralfecha;}
	public function set_idiomaancestraluser($idiomaancestraluser){$this->idiomaancestraluser=$idiomaancestraluser;}
	public function get_idiomaancestraluser() {return $this->idiomaancestraluser;}
	public function set_idiomasancestralcodigo($idiomasancestralcodigo){$this->idiomasancestralcodigo=$idiomasancestralcodigo;}
	public function get_idiomasancestralcodigo() {return $this->idiomasancestralcodigo;}
	public function __toString(){
		return ' ididiomaAncestral:{'.$this->ididiomaAncestral.'} idiomasancestralcodigo:{'. $this->idiomasancestralcodigo.'} idioma:{'.$this->idioma.'} idiomaetnia:{'. $this->idiomaetnia.'} idiomaancestralOculto:{'. $this->idiomaancestralOculto.'} idiomaancestralAccion:{'. $this->idiomaancestralAccion.'} idiomaancestralfecha:{'. $this->idiomaancestralfecha.'} idiomaancestraluser:{'. $this->idiomaancestraluser.'}';
	}
}
?>