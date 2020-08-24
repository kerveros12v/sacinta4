<?php
namespace Clasesphp;

class SocioEmpleo{
    private $idsocioempleo,$socioEmpleoregistro,$socioempleoOculto,$socioempleoAccion,$socioempleofecha,$socioempleouser;
    public function __construct(){}
    public function set_idsocioempleo($idsocioempleo){$this->idsocioempleo=$idsocioempleo;}
    public function set_socioEmpleoregistro($socioEmpleoregistro){$this->socioEmpleoregistro=$socioEmpleoregistro;}
    public function set_socioempleoOculto($socioempleoOculto){$this->socioempleoOculto=$socioempleoOculto;}
    public function set_socioempleoAccion($socioempleoAccion){$this->socioempleoAccion=$socioempleoAccion;}
    public function set_socioempleofecha($socioempleofecha){$this->socioempleofecha=$socioempleofecha;}
    public function set_socioempleouser($socioempleouser){$this->socioempleouser=$socioempleouser;}
    public function get_idsocioempleo(){return $this->idsocioempleo;}
    public function get_socioEmpleoregistro(){return $this->socioEmpleoregistro;}
    public function get_socioempleoOculto(){return $this->socioempleoOculto;}
    public function get_socioempleoAccion(){return $this->socioempleoAccion;}
    public function get_socioempleofecha(){return $this->socioempleofecha;}
    public function get_socioempleouser(){return $this->socioempleouser;}
    public function formatoJSON(){
        $myarray=array(
            'idsocioempleo'=>$this->idsocioempleo,
            'socioEmpleoregistro'=>$this->socioEmpleoregistro,
            'socioempleoOculto'=>$this->socioempleoOculto,
            'socioempleoAccion'=>$this->socioempleoAccion,
            'socioempleofecha'=>$this->socioempleofecha,
            'socioempleouser'=>$this->socioempleouser
        );
        return json_encode($myarray);
    }
    public function formatoArray(){
        $myarray=array(
            'idsocioempleo'=>$this->idsocioempleo,
            'socioEmpleoregistro'=>$this->socioEmpleoregistro,
            'socioempleoOculto'=>$this->socioempleoOculto,
            'socioempleoAccion'=>$this->socioempleoAccion,
            'socioempleofecha'=>$this->socioempleofecha,
            'socioempleouser'=>$this->socioempleouser
        );
        return $myarray;
    }
}
?>