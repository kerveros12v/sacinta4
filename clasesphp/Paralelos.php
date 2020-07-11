<?php
namespace Clasesphp;

class Paralelos{
private $paraleloId, $paralelocodigo, $paralelo, $paraleloOculto, $paraleloAccion, $paralelofecha, $paralelouser;
public function _construct(){}
public function set_paraleloId($paraleloId){$this->paraleloId=$paraleloId;}
public function set_paralelo($paralelo){$this->paralelo=$paralelo;}
public function get_paraleloId(){return $this->paraleloId;}
public function get_paralelo(){return $this->paralelo;}

public function set_paralelocodigo($paralelocodigo){$this->paralelocodigo=$paralelocodigo;}
public function get_paralelocodigo(){return $this->paralelocodigo;}
public function set_paraleloOculto($paraleloOculto){$this->paraleloOculto=$paraleloOculto;}
public function get_paraleloOculto(){return $this->paraleloOculto;}
public function set_paraleloAccion($paraleloAccion){$this->paraleloAccion=$paraleloAccion;}
public function get_paraleloAccion(){return $this->paraleloAccion;}
public function set_paralelofecha($paralelofecha){$this->paralelofecha=$paralelofecha;}
public function get_paralelofecha(){return $this->paralelofecha;}
public function set_paralelouser($paralelouser){$this->paralelouser=$paralelouser;}
public function get_paralelouser(){return $this->paralelouser;}
}
?>