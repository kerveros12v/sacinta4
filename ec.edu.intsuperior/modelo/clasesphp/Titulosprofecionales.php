<?php
namespace Clasesphp;

class Titulosprofecionales{
private $tituloProfecionalId;
private $tituloProfecionalCodigo;
private $tituloProfecional;
	public function _construct(){}
	public function set_tituloProfecionalId($tituloProfecionalId){$this->tituloProfecionalId=$tituloProfecionalId;}
	public function get_tituloProfecionalId() {return $this->tituloProfecionalId;}
	public function set_tituloProfecionalCodigo($tituloProfecionalCodigo){$this->tituloProfecionalCodigo=$tituloProfecionalCodigo;}
	public function get_tituloProfecionalCodigo() {return $this->tituloProfecionalCodigo;}
	public function set_tituloProfecional($tituloProfecional){$this->tituloProfecional=$tituloProfecional;}
	public function get_tituloProfecional() {return $this->tituloProfecional;}

}
?>