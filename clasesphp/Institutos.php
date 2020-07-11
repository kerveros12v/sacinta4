<?php
namespace Clasesphp;

	class Institutos{
private $institutosId;
private $institutoNombre;
private $provincia_provinciaId ;
private $canton_cantonId ;
private $sostenimientos_idSostenimiento ;

		public function _construct(){}
		public function set_($institutosId){$this->institutosId=$institutosId;}
		public function get_(){return $this->institutosId;}
		public function set_($institutoNombre){$this->institutoNombre=$institutoNombre;}
		public function get_(){return $this->institutoNombre;}
		public function set_($provincia_provinciaId){$this->provincia_provinciaId=$provincia_provinciaId;}
		public function get_(){return $this->provincia_provinciaId;}
		public function set_($canton_cantonId){$this->canton_cantonId=$canton_cantonId;}
		public function get_(){return $this->canton_cantonId;}
		public function set_($sostenimientos_idSostenimiento){$this->sostenimientos_idSostenimiento=$sostenimientos_idSostenimiento;}
		public function get_(){return $this->sostenimientos_idSostenimiento;}


	}
?>