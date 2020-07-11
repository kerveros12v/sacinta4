<?php
namespace Clasesphp;

	class Discapacidad
{
	private $discapacidadId, $discapacidadcodigo, $discapacidad, $discapacidadOculto, $discapacidadAccion, $discapacidadfecha, $discapacidaduser;

	public function set_discapacidadId($discapacidadId){$this->discapacidadId=$discapacidadId;}
	public function set_discapacidad($discapacidad){$this->discapacidad=$discapacidad;}
	public function get_discapacidadId(){return $this->discapacidadId;}
	public function get_discapacidad(){return $this->discapacidad;}
	public function set_discapacidadcodigo($discapacidadcodigo){$this->discapacidadcodigo=$discapacidadcodigo;}
	public function get_discapacidadcodigo(){return $this->discapacidadcodigo;}
	public function set_discapacidadOculto($discapacidadOculto){$this->discapacidadOculto=$discapacidadOculto;}
	public function get_discapacidadOculto(){return $this->discapacidadOculto;}
	public function set_discapacidadAccion($discapacidadAccion){$this->discapacidadAccion=$discapacidadAccion;}
	public function get_discapacidadAccion(){return $this->discapacidadAccion;}
	public function set_discapacidadfecha($discapacidadfecha){$this->discapacidadfecha=$discapacidadfecha;}
	public function get_discapacidadfecha(){return $this->discapacidadfecha;}
	public function set_discapacidaduser($discapacidaduser){$this->discapacidaduser=$discapacidaduser;}
	public function get_discapacidaduser(){return $this->discapacidaduser;}
		public function _construct(){}
		public function formatoJSON(){
			$myarray=array(
				'discapacidadId'=>$this->discapacidadId,
				'discapacidad'=>$this->discapacidad
			);
			return json_encode($myarray);
		}
		public function formatoArray(){
			$myarray=array(
				'discapacidadId'=>$this->discapacidadId,
				'discapacidad'=>$this->discapacidad
			);
			return ($myarray);
		}
}
?>