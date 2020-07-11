<?php
namespace Clasesphp;

class Setec{


    private $fksecestadocertificacion;
    private $setecfkcondiciondevida, $setecfkcondicionlaboral;
    private $idsetec;
    private $setecAspirante_numeroidentificacionsetec;
    private $fksetecEncuestador;
    private $setecCertificacion_idsetecCertificacion;
    private $setecOculto;
    private $setecAccion;
    private $setecfecha;
    private $setecuser;
    public function __construct(){}
    public function set_fksecestadocertificacion($fksecestadocertificacion){$this->fksecestadocertificacion=$fksecestadocertificacion;}
    public function get_fksecestadocertificacion(){return $this->fksecestadocertificacion;}
    public function set__idsetec($idsetec){$this->idsetec=$idsetec;}
    public function set__setecAspirante_numeroidentificacionsetec($setecAspirante_numeroidentificacionsetec){$this->setecAspirante_numeroidentificacionsetec=$setecAspirante_numeroidentificacionsetec;}
    public function set__fksetecEncuestador($fksetecEncuestador){$this->fksetecEncuestador=$fksetecEncuestador;}
    public function set__setecCertificacion_idsetecCertificacion($setecCertificacion_idsetecCertificacion){$this->setecCertificacion_idsetecCertificacion=$setecCertificacion_idsetecCertificacion;}
    public function set__setecOculto($setecOculto){$this->setecOculto=$setecOculto;}
    public function set__setecAccion($setecAccion){$this->setecAccion=$setecAccion;}
    public function set__setecfecha($setecfecha){$this->setecfecha=$setecfecha;}
    public function set__setecuser($setecuser){$this->setecuser=$setecuser;}
    public function set__setecfkcondiciondevida($setecfkcondiciondevida){$this->setecfkcondiciondevida=$setecfkcondiciondevida;}
    public function set__setecfkcondicionlaboral($setecfkcondicionlaboral){$this->setecfkcondicionlaboral=$setecfkcondicionlaboral;}
    public function get_idsetec(){return $this->idsetec;}
   public function get_setecAspirante_numeroidentificacionsetec(){return $this->setecAspirante_numeroidentificacionsetec;}
   public function get_fksetecEncuestador(){return $this->fksetecEncuestador;}
   public function get_setecCertificacion_idsetecCertificacion(){return $this->setecCertificacion_idsetecCertificacion;}
   public function get_setecfkcondiciondevida(){return $this->setecfkcondiciondevida;}
   public function get_setecfkcondicionlaboral(){return $this->setecfkcondicionlaboral;}
   public function get_setecOculto(){return $this->setecOculto;}
   public function get_setecAccion(){return $this->setecAccion;}
   public function get_setecfecha(){return $this->setecfecha;}
   public function get_setecuser(){return $this->setecuser;}
   public function formatoJSON(){
    $myarray=array('idsetec'=>$this->idsetec,
    'setecAspirante_numeroidentificacionsetec'=>$this->setecAspirante_numeroidentificacionsetec,
    'fksetecEncuestador'=>$this->fksetecEncuestador,
    'setecCertificacion_idsetecCertificacion'=>$this->setecCertificacion_idsetecCertificacion,
    'setecOculto'=>$this->setecOculto,
    'setecAccion'=>$this->setecAccion,
    'setecfecha'=>$this->setecfecha,
    'setecuser'=>$this->setecuser,
    'setecfkcondiciondevida'=>$this->setecfkcondiciondevida,
    'setecfkcondicionlaboral'=>$this->setecfkcondicionlaboral,
    'fksecestadocertificacion'=>$this->fksecestadocertificacion);
    return json_encode($myarray);
   }
   public function formatoArray(){
    $myarray=array('idsetec'=>$this->idsetec,
    'setecAspirante_numeroidentificacionsetec'=>$this->setecAspirante_numeroidentificacionsetec,
    'fksetecEncuestador'=>$this->fksetecEncuestador,
    'setecCertificacion_idsetecCertificacion'=>$this->setecCertificacion_idsetecCertificacion,
    'setecOculto'=>$this->setecOculto,
    'setecAccion'=>$this->setecAccion,
    'setecfecha'=>$this->setecfecha,
    'setecuser'=>$this->setecuser,
    'setecfkcondiciondevida'=>$this->setecfkcondiciondevida,
    'setecfkcondicionlaboral'=>$this->setecfkcondicionlaboral,
    'fksecestadocertificacion'=>$this->fksecestadocertificacion);
    return $myarray;
   }
}
?>