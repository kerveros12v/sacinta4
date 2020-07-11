<?php
namespace Clasesphp;

class SetecExperienciaLaboral{
private $idsetecExperienciaLaboralPrimaria;
private $fknumidentificacionIndice;
private $experiencianombreEmpresa;
private $tiempodetrabajo;
private $setecactividadRealizada ;
private $splOculto;
private $splAccion;
private $splfecha;
private $spluser;
public function __construct(){}
public function set_idsetecExperienciaLaboralPrimaria($idsetecExperienciaLaboralPrimaria){$this->idsetecExperienciaLaboralPrimaria=$idsetecExperienciaLaboralPrimaria;}
public function set_fknumidentificacionIndice($fknumidentificacionIndice){$this->fknumidentificacionIndice=$fknumidentificacionIndice;}
public function set_experiencianombreEmpresa($experiencianombreEmpresa){$this->experiencianombreEmpresa=$experiencianombreEmpresa;}
public function set_tiempodetrabajo($tiempodetrabajo){$this->tiempodetrabajo=$tiempodetrabajo;}
public function set_setecactividadRealizada($setecactividadRealizada){$this->setecactividadRealizada=$setecactividadRealizada;}

public function set_splOculto($splOculto){$this->splOculto=$splOculto;}
public function set_splAccion($splAccion){$this->splAccion=$splAccion;}
public function set_splfecha($splfecha){$this->splfecha=$splfecha;}
public function set_spluser($spluser){$this->spluser=$spluser;}


public function get_idsetecExperienciaLaboralPrimaria(){return $this->idsetecExperienciaLaboralPrimaria;}
public function get_fknumidentificacionIndice(){return $this->fknumidentificacionIndice;}
public function get_experiencianombreEmpresa(){return $this->experiencianombreEmpresa;}
public function get_tiempodetrabajo(){return $this->tiempodetrabajo;}
public function get_setecactividadRealizada (){return $this->setecactividadRealizada;}

public function get_splOculto(){return $this->splOculto;}
public function get_splAccion(){return $this->splAccion;}
public function get_splfecha(){return $this->splfecha;}
public function get_spluser (){return $this->spluser;}

public function formatoJSON(){
    $myarray=array('idsetecExperienciaLaboral'=>$this->idsetecExperienciaLaboralPrimaria,
    'fknumidentificacion'=>$this->fknumidentificacionIndice,
    'experiencianombreEmpresa'=>$this->experiencianombreEmpresa,
    'tiempodetrabajo'=>$this->tiempodetrabajo,
    'setecactividadRealizada'=>$this->setecactividadRealizada,
    'splOculto'=>$this->splOculto,
    'splAccion'=>$this->splAccion,
    'splfecha'=>$this->splfecha,
    'spluser'=>$this->spluser);
    return json_encode($myarray);
}
public function formatoArray(){
    $myarray=array('idsetecExperienciaLaboral'=>$this->idsetecExperienciaLaboralPrimaria,
    'fknumidentificacion'=>$this->fknumidentificacionIndice,
    'experiencianombreEmpresa'=>$this->experiencianombreEmpresa,
    'tiempodetrabajo'=>$this->tiempodetrabajo,
    'setecactividadRealizada'=>$this->setecactividadRealizada,
    'splOculto'=>$this->splOculto,
    'splAccion'=>$this->splAccion,
    'splfecha'=>$this->splfecha,
    'spluser'=>$this->spluser);
    return $myarray;
}
}
?>