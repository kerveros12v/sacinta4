<?php
namespace Clasesphp;

	class Gradosocupacionales{
		private $gradoOcupacionalId;
		private $gradoOcupacionalCodigo;
		private $gradoOcupacional;
		public function _construct(){}
		public function set_gradoOcupacionalId($gradoOcupacionalId){$this->gradoOcupacionalId=$gradoOcupacionalId;}
		public function set_gradoOcupacionalCodigo($gradoOcupacionalCodigo){$this->gradoOcupacionalCodigo=$gradoOcupacionalCodigo;}
		public function set_gradoOcupacional($gradoOcupacional){$this->gradoOcupacional=$gradoOcupacional;}
		public function get_gradoOcupacionalId(){return $this->gradoOcupacionalId;}
		public function get_gradoOcupacionalCodigo(){return $this->gradoOcupacionalCodigo;}
		public function get_gradoOcupacional(){return $this->gradoOcupacional;}
	}
?>