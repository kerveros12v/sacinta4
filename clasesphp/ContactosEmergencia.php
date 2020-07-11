<?php
namespace Clasesphp;

	class Contactosemergencia
{
private $contactosEmergenciaId;
private $nombreContactoEmergencia;
private $numeroContactosEmergencia;
private $parentescos_idParentescos;
private $estudiantes_numeroIdentificacion;
private $contactosperiodo;
private $contactosemergenciaOculto;
private $contactosemergenciaAccion;
private $contactosemergenciafecha;
private $contactosemergenciauser;
public function set_contactosEmergenciaId($contactosEmergenciaId){$this->contactosEmergenciaId=$contactosEmergenciaId;}
public function set_nombreContactoEmergencia($nombreContactoEmergencia){$this->nombreContactoEmergencia=$nombreContactoEmergencia;}
public function set_numeroContactosEmergencia($numeroContactosEmergencia){$this->numeroContactosEmergencia=$numeroContactosEmergencia;}
public function set_Parentescos_idParentescos($parentescos_idParentescos){$this->parentescos_idParentescos=$parentescos_idParentescos;}
public function set_Estudiantes_numeroIdentificacion($estudiantes_numeroIdentificacion){$this->estudiantes_numeroIdentificacion=$estudiantes_numeroIdentificacion;}
public function set_contactosperiodo($contactosperiodo){$this->contactosperiodo=$contactosperiodo;}
public function set_contactosemergenciaOculto($contactosemergenciaOculto){$this->contactosemergenciaOculto=$contactosemergenciaOculto;}
public function set_contactosemergenciaAccion($contactosemergenciaAccion){$this->contactosemergenciaAccion=$contactosemergenciaAccion;}
public function set_contactosemergenciafecha($contactosemergenciafecha){$this->contactosemergenciafecha=$contactosemergenciafecha;}
public function set_contactosemergenciauser($contactosemergenciauser){$this->contactosemergenciauser=$contactosemergenciauser;}
public function get_contactosperiodo(){return $this->contactosperiodo;}
public function get_contactosemergenciaOculto(){return $this->contactosemergenciaOculto;}
public function get_contactosemergenciaAccion(){return $this->contactosemergenciaAccion;}
public function get_contactosemergenciafecha(){return $this->contactosemergenciafecha;}
public function get_contactosemergenciauser(){return $this->contactosemergenciauser;}
public function get_contactosEmergenciaId(){return $this->contactosEmergenciaId;}
public function get_nombreContactoEmergencia(){return $this->nombreContactoEmergencia;}
public function get_numeroContactosEmergencia(){return $this->numeroContactosEmergencia;}
public function get_Parentescos_idParentescos(){return $this->parentescos_idParentescos;}
public function get_Estudiantes_numeroIdentificacion(){return $this->estudiantes_numeroIdentificacion;}
		public function _construct(){}
public function __toString()
{
	return  "contactosEmergenciaId {".$this->contactosEmergenciaId
	."}nombreContactoEmergencia{".$this->nombreContactoEmergencia
	."}numeroContactosEmergencia{".$this->numeroContactosEmergencia
	."}parentescos_idParentescos{".$this->parentescos_idParentescos
	."}estudiantes_numeroIdentificacion{".$this->estudiantes_numeroIdentificacion
	."}contactosperiodo{".$this->contactosperiodo
	."}contactosemergenciaOculto{".$this->contactosemergenciaOculto
	."}contactosemergenciaAccion{".$this->contactosemergenciaAccion
	."}contactosemergenciafecha{".$this->contactosemergenciafecha
	."}contactosemergenciauser{".$this->contactosemergenciauser."}";
}
	}
?>