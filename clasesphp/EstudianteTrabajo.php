<?php
namespace Clasesphp;

	class EstudianteTrabajo
{
private $estudinatetrabajoperiodo;
private $estudianteTrabajoid;
private $nomempresa;
private $sectoreconomico;
private $estudinatenum;
private $estudinatetrabajoOculto,$estudinatetrabajoAccion,$estudinatetrabajofecha,$estudinatetrabajouser;

public function get_estudinatetrabajoperiodo(){return $this->estudinatetrabajoperiodo;}
public function set_estudinatetrabajoperiodo($estudinatetrabajoperiodo){$this->estudinatetrabajoperiodo=$estudinatetrabajoperiodo;}
public function set_estudianteTrabajoid($estudianteTrabajoid){$this->estudianteTrabajoid=$estudianteTrabajoid;}
public function set_nomempresa($nomempresa){$this->nomempresa=$nomempresa;}
public function set_sectoreconomico($sectoreconomico){$this->sectoreconomico=$sectoreconomico;}
public function set_estudinatenum($estudinatenum){$this->estudinatenum=$estudinatenum;}
public function get_estudianteTrabajoid(){return $this->estudianteTrabajoid;}
public function get_nomempresa(){return $this->nomempresa;}
public function get_sectoreconomico(){return $this->sectoreconomico;}
public function get_estudinatenum(){return $this->estudinatenum;}
public function set_estudinatetrabajoOculto($estudinatetrabajoOculto){$this->estudinatetrabajoOculto=$estudinatetrabajoOculto;}
public function set_estudinatetrabajoAccion($estudinatetrabajoAccion){$this->estudinatetrabajoAccion=$estudinatetrabajoAccion;}
public function set_estudinatetrabajouser($estudinatetrabajouser){$this->estudinatetrabajouser=$estudinatetrabajouser;}
public function set_estudinatetrabajofecha($estudinatetrabajofecha){$this->estudinatetrabajofecha=$estudinatetrabajofecha;}
public function get_estudinatetrabajouser(){return $this->estudinatetrabajouser;}
public function get_estudinatetrabajofecha(){return $this->estudinatetrabajofecha;}
public function get_estudinatetrabajoAccion(){return $this->estudinatetrabajoAccion;}
public function get_estudinatetrabajoOculto(){return $this->estudinatetrabajoOculto;}
public function _construct(){}

	public function formatoJSON(){
	$myarray=array(
	'estudianteTrabajoid'=>$this->estudianteTrabajoid,
	'estudinatenum'=>$this->estudinatenum,
	'estudinatetrabajoAccion'=>$this->estudinatetrabajoAccion,
	'estudinatetrabajofecha'=>$this->estudinatetrabajofecha,
	'estudinatetrabajoOculto'=>$this->estudinatetrabajoOculto,
	'estudinatetrabajouser'=>$this->estudinatetrabajouser);
	}
		}
?>