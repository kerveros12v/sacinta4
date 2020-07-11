<?php
namespace Clasesphp;

class Residenciaestudiantes{
private $residenciaEstudiantesId;
private $estudiantes_numeroIdentificacion ;
private $paisResidencia ;
private $provinciaResidencia ;
private $cantonResidencia ;
private $direccionDomiciliariaResidencia ;
private $codigoPostal ;
private $periodo ;
private $residenciaestudiantesOculto ;
private $residenciaestudiantesAccion ;
private $residenciaestudiantesfecha ;
private $residenciaestudiantesuser;
public function _construct(){}
public function set_residenciaEstudiantesId($residenciaEstudiantesId){$this->residenciaEstudiantesId=$residenciaEstudiantesId;}
public function set_estudiantes_numeroIdentificacion($estudiantes_numeroIdentificacion){$this->estudiantes_numeroIdentificacion=$estudiantes_numeroIdentificacion;}
public function set_provinciaResidencia($provinciaResidencia){$this->provinciaResidencia=$provinciaResidencia;}
public function set_paisResidencia($paisResidencia){$this->paisResidencia=$paisResidencia;}
public function set_cantonResidencia($cantonResidencia){$this->cantonResidencia=$cantonResidencia;}
public function set_direccionDomiciliariaResidencia($direccionDomiciliariaResidencia){$this->direccionDomiciliariaResidencia=$direccionDomiciliariaResidencia;}
public function set_codigoPostal($codigoPostal){$this->codigoPostal=$codigoPostal;}
public function set_periodo($periodo){$this->periodo=$periodo;}
public function set_residenciaestudiantesOculto($residenciaestudiantesOculto){$this->residenciaestudiantesOculto=$residenciaestudiantesOculto;}
public function set_residenciaestudiantesAccion($residenciaestudiantesAccion){$this->residenciaestudiantesAccion=$residenciaestudiantesAccion;}
public function set_residenciaestudiantesfecha($residenciaestudiantesfecha){$this->residenciaestudiantesfecha=$residenciaestudiantesfecha;}
public function set_residenciaestudiantesuser($residenciaestudiantesuser){$this->residenciaestudiantesuser=$residenciaestudiantesuser;}

public function get_estudiantes_numeroIdentificacion(){return $this->estudiantes_numeroIdentificacion;}
public function get_residenciaEstudiantesId(){return $this->residenciaEstudiantesId;}
public function get_provinciaResidencia(){return $this->provinciaResidencia;}
public function get_paisResidencia(){return $this->paisResidencia;}
public function get_cantonResidencia(){return $this->cantonResidencia;}
public function get_direccionDomiciliariaResidencia(){return $this->direccionDomiciliariaResidencia;}
public function get_residenciaestudiantesOculto(){return $this->residenciaestudiantesOculto;}
public function get_codigoPostal(){return $this->codigoPostal;}
public function get_residenciaestudiantesAccion(){return $this->residenciaestudiantesAccion;}
public function get_residenciaestudiantesfecha(){return $this->residenciaestudiantesfecha;}
public function get_residenciaestudiantesuser(){return $this->residenciaestudiantesuser;}
public function get_periodo(){return $this->periodo;}

public function toString()
{
 return ('residenciaEstudiantesId{'.$this->residenciaEstudiantesId.
    '}estudiantes_numeroIdentificacion{'.$this->estudiantes_numeroIdentificacion.
        '}paisResidencia{'.$this->paisResidencia.
            '}provinciaResidencia{'.$this->provinciaResidencia.
                '}cantonResidencia{'.$this->cantonResidencia.
                    '}codigoPostal{'.$this->codigoPostal.
                        '}periodo{'.$this->periodo.
                            '}residenciaestudiantesAccion{'.$this->residenciaestudiantesAccion.
                                '}residenciaestudiantesfecha{'.$this->residenciaestudiantesfecha.
                                    '}residenciaestudiantesOculto{'.$this->residenciaestudiantesOculto.
                                        '}residenciaestudiantesuser{'.$this->residenciaestudiantesuser.
                                            '}');
}
public function formatoJSON(){
    $myarrayjson = array('residenciaEstudiantesId'=>$this->residenciaEstudiantesId,
    'estudiantes_numeroIdentificacion'=>$this->estudiantes_numeroIdentificacion,
    'paisResidencia'=>$this->paisResidencia,
    'provinciaResidencia'=>$this->provinciaResidencia,
    'cantonResidencia'=>$this->cantonResidencia,
    'codigoPostal'=>$this->codigoPostal,
    'direccionDomiciliariaResidencia'=>$this->direccionDomiciliariaResidencia,
    'periodo'=>$this->periodo,
    'residenciaestudiantesAccion'=>$this->residenciaestudiantesAccion,
    'residenciaestudiantesfecha'=>$this->residenciaestudiantesfecha,
    'residenciaestudiantesOculto'=>$this->residenciaestudiantesOculto,
    'residenciaestudiantesuser'=>$this->residenciaestudiantesuser);

    return json_encode($myarrayjson);
}
}
?>