<?php
namespace Clasesphp;

	class Financiamientobecadocentes{
		private $financiamientoBecaId;
		private $financiamientoBeca;
		public function _construct(){}
		public function set_financiamientoBecaId($financiamientoBecaId){$this->financiamientoBecaId=$financiamientoBecaId;}
		public function set_financiamientoBeca($financiamientoBeca){$this->financiamientoBeca=$financiamientoBeca;}
		public function get_financiamientoBecaId(){return $this->financiamientoBecaId;}
		public function get_financiamientoBeca(){return $this->financiamientoBeca;}
	}
?>