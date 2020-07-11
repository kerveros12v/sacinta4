<?php
namespace Clasesphp;

	class Carreras
{
private $carrerasId;
private $codigoCarreras;
private $carrera;
private $estado;
private $carreraTituloAOptener;
private $tipoCarreras_tipoCarrerasId;
private $modalidadCarrera_modalidadCarreraId;
private $carreraOculto, $carreraAccion, $carrerafecha, $carrerauser;
public function set_carreraOculto($carreraOculto){$this->carreraOculto=$carreraOculto;}
public function set_carreraAccion($carreraAccion){$this->carreraAccion=$carreraAccion;}
public function set_carrerafecha($carrerafecha){$this->carrerafecha=$carrerafecha;}
public function set_carrerauser($carrerauser){$this->carrerauser=$carrerauser;}

public function set_carrerasId($carrerasId){$this->carrerasId=$carrerasId;}
public function set_codigoCarreras($codigoCarreras){$this->codigoCarreras=$codigoCarreras;}
public function set_carrera($carrera){$this->carrera=$carrera;}
public function set_estado($estado){$this->estado=$estado;}
public function set_carreraTituloAOptener($carreraTituloAOptener){$this->carreraTituloAOptener=$carreraTituloAOptener;}
public function set_TipoCarreras_tipoCarrerasId($tipoCarreras_tipoCarrerasId){$this->tipoCarreras_tipoCarrerasId=$tipoCarreras_tipoCarrerasId;}
public function set_ModalidadCarrera_modalidadCarreraId($modalidadCarrera_modalidadCarreraId){$this->modalidadCarrera_modalidadCarreraId=$modalidadCarrera_modalidadCarreraId;}

public function get_carreraOculto(){return $this->carreraOculto;}
public function get_carreraAccion(){return $this->carreraAccion;}
public function get_carrerafecha(){return $this->carrerafecha;}
public function get_carrerauser(){return $this->carrerauser;}

public function get_carrerasId(){return $this->carrerasId;}
public function get_codigoCarreras(){return $this->codigoCarreras;}
public function get_carrera(){return $this->carrera;}
public function get_estado(){return $this->estado;}
public function get_carreraTituloAOptener(){return $this->carreraTituloAOptener;}
public function get_TipoCarreras_tipoCarrerasId(){return $this->tipoCarreras_tipoCarrerasId;}
public function get_ModalidadCarrera_modalidadCarreraId(){return $this->modalidadCarrera_modalidadCarreraId;}

		public function _construct(){}
		public function __toString(){
			return $this->carrera;
		}
	}
?>