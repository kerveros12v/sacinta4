<?php
namespace Clasesphp;

class Sostenimientos
{
	private $idSostenimiento ;
	private $codigoSostenimiento;
	private $sostenimiento;

public function _construct(){}
public function set_idSostenimiento($idSostenimiento){$this->idSostenimiento=$idSostenimiento;}
public function get_idSostenimiento(){return $this->idSostenimiento;}
public function set_codigoSostenimiento($codigoSostenimiento){$this->codigoSostenimiento=$codigoSostenimiento;}
public function get_codigoSostenimiento(){return $this->codigoSostenimiento;}
public function set_sostenimiento($sostenimiento){$this->sostenimiento=$sostenimiento;}
public function get_sostenimiento(){return $this->sostenimiento;}
}
?>