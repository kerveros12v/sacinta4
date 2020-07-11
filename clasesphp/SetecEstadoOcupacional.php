<?php
namespace Clasesphp;

class SetecEstadoOcupacional{
    private $setecEstadoOcupacionalId,
    $setecestadoocupacionalcodigo,
    $estadoOcupacional,
    $seoOculto,
    $seoAccion,
    $seofecha,
    $seouser;
    public function __construct(){  }
    public function set_setecEstadoOcupacionalId($setecEstadoOcupacionalId){$this->setecEstadoOcupacionalId=$setecEstadoOcupacionalId;}
    public function set_setecestadoocupacionalcodigo($setecestadoocupacionalcodigo){$this->setecestadoocupacionalcodigo=$setecestadoocupacionalcodigo;}
    public function set_estadoOcupacional($estadoOcupacional){$this->estadoOcupacional=$estadoOcupacional;}
    public function set_seoOculto($seoOculto){$this->seoOculto=$seoOculto;}
    public function set_seoAccion($seoAccion){$this->seoAccion=$seoAccion;}
    public function set_seofecha($seofecha){$this->seofecha=$seofecha;}
    public function set_seouser($seouser){$this->seouser=$seouser;}

    public function get_setecEstadoOcupacionalId(){return $this->setecEstadoOcupacionalId;}
    public function get_setecestadoocupacionalcodigo(){return $this->setecestadoocupacionalcodigo;}
    public function get_estadoOcupacional(){return $this->estadoOcupacional;}
    public function get_seoOculto(){return $this->seoOculto;}
    public function get_seoAccion(){return $this->seoAccion;}
    public function get_seofecha(){return $this->seofecha;}
    public function get_seouser(){return $this->seouser;}
    public function formatoJSON(){
       $myarray=array( 'setecEstadoOcupacionalId'=>$this->setecEstadoOcupacionalId,
       'setecestadoocupacionalcodigo'=>$this->setecestadoocupacionalcodigo,
       'estadoOcupacional'=>$this->estadoOcupacional,
       'seoOculto'=>$this->seoOculto,
       'seoAccion'=>$this->seoAccion,
       'seofecha'=>$this->seofecha,
       'seouser'=>$this->seouser);
       return json_encode($myarray);
    }
}
?>