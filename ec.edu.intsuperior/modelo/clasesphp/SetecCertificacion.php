<?php
namespace Clasesphp;

class SetecCertificacion{
    private $idsetecCertificacion,
     $setecperfil_idsetecperfil,
      $fechaprueba,
       $horaprueba,
       $costoCertidicacion,
       $setecLugardondeExaminado,
       $setecnombreEmpresaLugar,
       $setecdireccionEmpresa,
       $setecTelefonoEmpresa,
       $seteccertificacionOculto,
       $seteccertificacionAccion,
       $seteccertificacionfecha,
       $seteccertificacionuser;
public function __construct(){}
public function set_idsetecCertificacion($idsetecCertificacion){$this->idsetecCertificacion=$idsetecCertificacion;}
public function set_setecperfil_idsetecperfil($setecperfil_idsetecperfil){$this->setecperfil_idsetecperfil=$setecperfil_idsetecperfil;}
public function set_fechaprueba($fechaprueba){$this->fechaprueba=$fechaprueba;}
public function set_horaprueba($horaprueba){$this->horaprueba=$horaprueba;}
public function set_costoCertidicacion($costoCertidicacion){$this->costoCertidicacion=$costoCertidicacion;}
public function set_setecLugardondeExaminado($setecLugardondeExaminado){$this->setecLugardondeExaminado=$setecLugardondeExaminado;}
public function set_setecnombreEmpresaLugar($setecnombreEmpresaLugar){$this->setecnombreEmpresaLugar=$setecnombreEmpresaLugar;}
public function set_setecdireccionEmpresa($setecdireccionEmpresa){$this->setecdireccionEmpresa=$setecdireccionEmpresa;}
public function set_setecTelefonoEmpresa($setecTelefonoEmpresa){$this->setecTelefonoEmpresa=$setecTelefonoEmpresa;}
public function set_seteccertificacionOculto($seteccertificacionOculto){$this->seteccertificacionOculto=$seteccertificacionOculto;}
public function set_seteccertificacionAccion($seteccertificacionAccion){$this->seteccertificacionAccion=$seteccertificacionAccion;}
public function set_seteccertificacionfecha($seteccertificacionfecha){$this->seteccertificacionfecha=$seteccertificacionfecha;}
public function set_seteccertificacionuser($seteccertificacionuser){$this->seteccertificacionuser=$seteccertificacionuser;}

public function get_idsetecCertificacion(){return $this->idsetecCertificacion;}
public function get_setecperfil_idsetecperfil(){return $this->setecperfil_idsetecperfil;}
public function get_fechaprueba(){return $this->fechaprueba;}
public function get_horaprueba(){return $this->horaprueba;}
public function get_costoCertidicacion(){return $this->costoCertidicacion;}
public function get_setecLugardondeExaminado(){return $this->setecLugardondeExaminado;}
public function get_setecnombreEmpresaLugar(){return $this->setecnombreEmpresaLugar;}
public function get_setecdireccionEmpresa(){return $this->setecdireccionEmpresa;}
public function get_setecTelefonoEmpresa(){return $this->setecTelefonoEmpresa;}
public function get_seteccertificacionOculto(){return $this->seteccertificacionOculto;}
public function get_seteccertificacionAccion(){return $this->seteccertificacionAccion;}
public function get_seteccertificacionfecha(){return $this->seteccertificacionfecha;}
public function get_seteccertificacionuser(){return $this->seteccertificacionuser;}
public function formatoJSON(){
   $myarray=array(
    'idsetecCertificacion'=>$this->idsetecCertificacion,
    'setecperfil_idsetecperfil'=>$this->setecperfil_idsetecperfil,
    'fechaprueba'=>$this->fechaprueba,
    'horaprueba'=>$this->horaprueba,
    'costoCertidicacion'=>$this->costoCertidicacion,
    'setecLugardondeExaminado'=>$this->setecLugardondeExaminado,
    'setecnombreEmpresaLugar'=>$this->setecnombreEmpresaLugar,
    'setecdireccionEmpresa'=>$this->setecdireccionEmpresa,
    'setecTelefonoEmpresa'=>$this->setecTelefonoEmpresa,
    'seteccertificacionOculto'=>$this->seteccertificacionOculto,
    'seteccertificacionAccion'=>$this->seteccertificacionAccion,
    'seteccertificacionfecha'=>$this->seteccertificacionfecha,
    'seteccertificacionuser'=>$this->seteccertificacionuser
   );
   return json_encode($myarray);
}
public function formatoArray(){
   $myarray=array(
    'idsetecCertificacion'=>$this->idsetecCertificacion,
    'setecperfil_idsetecperfil'=>$this->setecperfil_idsetecperfil,
    'fechaprueba'=>$this->fechaprueba,
    'horaprueba'=>$this->horaprueba,
    'costoCertidicacion'=>$this->costoCertidicacion,
    'setecLugardondeExaminado'=>$this->setecLugardondeExaminado,
    'setecnombreEmpresaLugar'=>$this->setecnombreEmpresaLugar,
    'setecdireccionEmpresa'=>$this->setecdireccionEmpresa,
    'setecTelefonoEmpresa'=>$this->setecTelefonoEmpresa,
    'seteccertificacionOculto'=>$this->seteccertificacionOculto,
    'seteccertificacionAccion'=>$this->seteccertificacionAccion,
    'seteccertificacionfecha'=>$this->seteccertificacionfecha,
    'seteccertificacionuser'=>$this->seteccertificacionuser
   );
   return $myarray;
}
}
?>