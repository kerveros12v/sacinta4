<?php
namespace Clasesphp;

class Sectoreconomico
{
	private $sectoreconomicocodigo, $sectoreconomicoOculto, $sectoreconomicoAccion, $sectoreconomicofecha, $sectoreconomicouser;
	private $sectorEconomicoid;
	private $SectorEconomico;

public function _construct(){}
public function set_sectorEconomicoid($sectorEconomicoid){$this->sectorEconomicoid=$sectorEconomicoid;}
public function get_sectorEconomicoid(){return $this->sectorEconomicoid;}
public function set_SectorEconomico($SectorEconomico){$this->SectorEconomico=$SectorEconomico;}
public function get_SectorEconomico(){return $this->SectorEconomico;}

public function set_sectoreconomicocodigo($sectoreconomicocodigo){$this->sectoreconomicocodigo=$sectoreconomicocodigo;}
public function get_sectoreconomicocodigo(){return $this->sectoreconomicocodigo;}
public function set_sectoreconomicoOculto($sectoreconomicoOculto){$this->sectoreconomicoOculto=$sectoreconomicoOculto;}
public function get_sectoreconomicoOculto(){return $this->sectoreconomicoOculto;}
public function set_sectoreconomicoAccion($sectoreconomicoAccion){$this->sectoreconomicoAccion=$sectoreconomicoAccion;}
public function get_sectoreconomicoAccion(){return $this->sectoreconomicoAccion;}
public function set_sectoreconomicofecha($sectoreconomicofecha){$this->sectoreconomicofecha=$sectoreconomicofecha;}
public function get_sectoreconomicofecha(){return $this->sectoreconomicofecha;}
public function set_sectoreconomicouser($sectoreconomicouser){$this->sectoreconomicouser=$sectoreconomicouser;}
public function get_sectoreconomicouser(){return $this->sectoreconomicouser;}
}
?>