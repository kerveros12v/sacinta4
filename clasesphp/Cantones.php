<?php
namespace Clasesphp;

	class Cantones {
		private $cantonOculto, $cantonAccion, $cantonfecha, $cantonuser;
		private $cantonId;
		private $canton;
		private $cantoncodigo;
		private $cantonprovincia;
		public function _construct(){}
		public function set_cantonId($cantonId){$this->cantonId=$cantonId;}
		public function set_canton($canton){$this->canton=$canton;}
		public function get_cantonId(){return $this->cantonId;}
		public function get_canton(){return $this->canton;}
		public function set_cantoncodigo($cantoncodigo){$this->cantoncodigo=$cantoncodigo;}
		public function get_cantoncodigo(){return $this->cantoncodigo;}
		public function set_cantonprovincia($cantonprovincia){$this->cantonprovincia=$cantonprovincia;}
		public function get_cantonprovincia(){return $this->cantonprovincia;}

		public function set_cantonOculto($cantonOculto){$this->cantonOculto=$cantonOculto;}
		public function get_cantonOculto(){return $this->cantonOculto;}
		public function set_cantonAccion($cantonAccion){$this->cantonAccion=$cantonAccion;}
		public function get_cantonAccion(){return $this->cantonAccion;}
		public function set_cantonfecha($cantonfecha){$this->cantonfecha=$cantonfecha;}
		public function get_cantonfecha(){return $this->cantonfecha;}
		public function set_cantonuser($cantonuser){$this->cantonuser=$cantonuser;}
		public function get_cantonuser(){return $this->cantonuser;}

		public function formatoJSON(){
			$myarray=array('cantonId'=>$this->cantonId,'canton'=>$this->canton,'cantoncodigo'=>$this->cantoncodigo,'cantonprovincia'=>$this->cantonprovincia);
			return json_encode($myarray);
		}
		public function formatoArray(){
			$myarray=array('cantonId'=>$this->cantonId,'canton'=>$this->canton,'cantoncodigo'=>$this->cantoncodigo,'cantonprovincia'=>$this->cantonprovincia);
			return $myarray;
		}
	}
?>