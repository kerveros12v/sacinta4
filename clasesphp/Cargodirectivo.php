<?php
namespace Clasesphp;

	class Cargodirectivo {
		private $cargoDirectivoId;
		private $cargoDirectivo;
		public function set_cargoDirectivoId($cargoDirectivoId){$this->cargoDirectivoId=$cargoDirectivoId;}
		public function set_cargoDirectivo($cargoDirectivo){$this->cargoDirectivo=$cargoDirectivo;}
		public function get_cargoDirectivoId() {return $this->cargoDirectivoId;}
		public function get_cargoDirectivo(){return $this->cargoDirectivo;}
		public function _construct(){}
	}
?>