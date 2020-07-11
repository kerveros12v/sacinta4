<?php
namespace Clasesphp;

class Provincias
{
	private $provinciapais, $provinciaOculto, $provinciaAccion, $provinciafecha, $provinciauser;
	private $provinciaId;
	private $provincia;
	private $provinciacodigo;
public function _construct(){}
public function get_provinciapais(){return $this->provinciapais;}
public function set_provinciapais($provinciapais){$this->provinciapais=$provinciapais;}
public function get_provinciaOculto(){return $this->provinciaOculto;}
public function set_provinciaOculto($provinciaOculto){$this->provinciaOculto=$provinciaOculto;}
public function get_provinciaAccion(){return $this->provinciaAccion;}
public function set_provinciaAccion($provinciaAccion){$this->provinciaAccion=$provinciaAccion;}
public function get_provinciafecha(){return $this->provinciafecha;}
public function set_provinciafecha($provinciafecha){$this->provinciafecha=$provinciafecha;}
public function get_provinciauser(){return $this->provinciauser;}
public function set_provinciauser($provinciauser){$this->provinciauser=$provinciauser;}
public function get_provinciacodigo(){return $this->provinciacodigo;}
public function set_provinciacodigo($provinciacodigo){$this->provinciacodigo=$provinciacodigo;}
public function set_provinciaId($provinciaId){$this->provinciaId=$provinciaId;}
public function get_provinciaId(){return $this->provinciaId;}
public function set_provincia($provincia){$this->provincia=$provincia;}
public function get_provincia(){return $this->provincia;}
public function formatoJSON(){
	$myarray=array(
'provinciaId'=>$this->provinciaId,
'provincia'=>$this->provincia
	);
	return json_encode($myarray);
}
public function formatoArray(){
	$myarray=array(
'provinciaId'=>$this->provinciaId,
'provincia'=>$this->provincia
	);
	return $myarray;
}
}
?>