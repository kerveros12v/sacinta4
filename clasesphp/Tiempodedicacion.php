<?php
namespace Clasesphp;

class Tiempodedicacion{
	private $tiempoDedicacionId;
	private $tiempoDedicacion;
	public function _construct() {}
	public function set_tiempoDedicacionId($tiempoDedicacionId) {$this->tiempoDedicacionId=$tiempoDedicacionId;}
	public function get_tiempoDedicacionId() {return $this->tiempoDedicacionId;}
		public function set_tiempoDedicacion($tiempoDedicacion) {$this->tiempoDedicacion=$tiempoDedicacion;}
	public function get_tiempoDedicacion() {return $this->tiempoDedicacion;}
}
?>