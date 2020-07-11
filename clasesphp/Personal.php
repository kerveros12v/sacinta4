<?php
namespace Clasesphp;

class Personal
{

private $tipodocumentoId ;
private $numeroIdentificacion;
private $primerApellido;
private $segundoApellido;
private $primerNombre;
private $segundoNombre;
private $sexoId ;
private $generoId;
private $estadocivilId ;
private $etniaId ;
private $pueblonacionalidadId ;
private $direccionDomiciliaria;
private $provinciaSufragio ;
private $numeroCelular;
private $correoElectronico;
private $numDomicilio;
private $discapacidadid ;
private $porcentajeDiscapacidad;
private $numCarnetDiscapacidad;
private $tipoDiscapacidadid ;
private $tipoEnfermedadCatastroficaId ;
private $fechaNacimiento;
private $paisNacionalidadId ;
private $tipoPersonalAdministrativo ;
private $fechaIngresoIES;
private $fechaSalidaIES;
private $relacionLaboralIESId ;
private $ingresoConConcursoMeritos ;
private $nroHorasLaborablesSemana;
private $salarioMensual;
private $usuarioPersonal;
private $passwordPersonal;

public function _construct(){}
public function set_tipodocumentoId($tipodocumentoId){$this->tipodocumentoId=$tipodocumentoId;}
public function get_tipodocumentoId(){return $this->tipodocumentoId;}
public function set_numeroIdentificacion($numeroIdentificacion){$this->numeroIdentificacion=$numeroIdentificacion;}
public function get_numeroIdentificacion(){return $this->numeroIdentificacion;}
public function set_primerApellido($primerApellido){$this->primerApellido=$primerApellido;}
public function get_primerApellido(){return $this->primerApellido;}
public function set_segundoApellido($segundoApellido){$this->segundoApellido=$segundoApellido;}
public function get_segundoApellido(){return $this->segundoApellido;}
public function set_primerNombre($primerNombre){$this->primerNombre=$primerNombre;}
public function get_primerNombre(){return $this->primerNombre;}
public function set_segundoNombre($segundoNombre){$this->segundoNombre=$segundoNombre;}
public function get_segundoNombre(){return $this->segundoNombre;}
public function set_sexoId($sexoId){$this->sexoId=$sexoId;}
public function get_sexoId(){return $this->sexoId;}
public function set_generoId($generoId){$this->generoId=$generoId;}
public function get_generoId(){return $this->generoId;}
public function set_estadocivilId($estadocivilId){$this->estadocivilId=$estadocivilId;}
public function get_estadocivilId(){return $this->estadocivilId;}
public function set_etniaId($etniaId){$this->etniaId=$etniaId;}
public function get_etniaId(){return $this->etniaId;}
public function set_pueblonacionalidadId($pueblonacionalidadId){$this->pueblonacionalidadId=$pueblonacionalidadId;}
public function get_pueblonacionalidadId(){return $this->pueblonacionalidadId;}
public function set_direccionDomiciliaria($direccionDomiciliaria){$this->direccionDomiciliaria=$direccionDomiciliaria;}
public function get_direccionDomiciliaria(){return $this->direccionDomiciliaria;}
public function set_porcentajeDiscapacidad($porcentajeDiscapacidad){$this->porcentajeDiscapacidad=$porcentajeDiscapacidad;}
public function get_porcentajeDiscapacidad(){return $this->porcentajeDiscapacidad;}
public function set_provinciaSufragio($provinciaSufragio){$this->provinciaSufragio=$provinciaSufragio;}
public function get_provinciaSufragio(){return $this->provinciaSufragio;}
public function set_numeroCelular($numeroCelular){$this->numeroCelular=$numeroCelular;}
public function get_numeroCelular(){return $this->numeroCelular;}
public function set_correoElectronico($correoElectronico){$this->correoElectronico=$correoElectronico;}
public function get_correoElectronico(){return $this->correoElectronico;}
public function set_numDomicilio($numDomicilio){$this->numDomicilio=$numDomicilio;}
public function get_numDomicilio(){return $this->numDomicilio;}
public function set_discapacidadid($discapacidadid){$this->discapacidadid=$discapacidadid;}
public function get_discapacidadid(){return $this->discapacidadid;}
public function set_numCarnetDiscapacidad($numCarnetDiscapacidad){$this->numCarnetDiscapacidad=$numCarnetDiscapacidad;}
public function get_numCarnetDiscapacidad(){return $this->numCarnetDiscapacidad;}
public function set_tipoDiscapacidadid($tipoDiscapacidadid){$this->tipoDiscapacidadid=$tipoDiscapacidadid;}
public function get_tipoDiscapacidadid(){return $this->tipoDiscapacidadid;}
public function set_tipoEnfermedadCatastroficaId($tipoEnfermedadCatastroficaId){$this->tipoEnfermedadCatastroficaId=$tipoEnfermedadCatastroficaId;}
public function get_tipoEnfermedadCatastroficaId(){return $this->tipoEnfermedadCatastroficaId;}
public function set_fechaNacimiento($fechaNacimiento){$this->fechaNacimiento=$fechaNacimiento;}
public function get_fechaNacimiento(){return $this->fechaNacimiento;}
public function set_paisNacionalidadId($paisNacionalidadId){$this->paisNacionalidadId=$paisNacionalidadId;}
public function get_paisNacionalidadId(){return $this->paisNacionalidadId;}
public function set_tipoPersonalAdministrativo($tipoPersonalAdministrativo){$this->tipoPersonalAdministrativo=$tipoPersonalAdministrativo;}
public function get_tipoPersonalAdministrativo(){return $this->tipoPersonalAdministrativo;}
public function set_fechaIngresoIES($fechaIngresoIES){$this->fechaIngresoIES=$fechaIngresoIES;}
public function get_fechaIngresoIES(){return $this->fechaIngresoIES;}
public function set_fechaSalidaIES($fechaSalidaIES){$this->fechaSalidaIES=$fechaSalidaIES;}
public function get_fechaSalidaIES(){return $this->fechaSalidaIES;}
public function set_relacionLaboralIESId($relacionLaboralIESId){$this->relacionLaboralIESId=$relacionLaboralIESId;}
public function get_relacionLaboralIESId(){return $this->relacionLaboralIESId;}
public function set_ingresoConConcursoMeritos($ingresoConConcursoMeritos){$this->ingresoConConcursoMeritos=$ingresoConConcursoMeritos;}
public function get_ingresoConConcursoMeritos(){return $this->ingresoConConcursoMeritos;}
public function set_nroHorasLaborablesSemana($nroHorasLaborablesSemana){$this->nroHorasLaborablesSemana=$nroHorasLaborablesSemana;}
public function get_nroHorasLaborablesSemana(){return $this->nroHorasLaborablesSemana;}
public function set_salarioMensual($salarioMensual){$this->salarioMensual=$salarioMensual;}
public function get_salarioMensual(){return $this->salarioMensual;}
public function set_usuarioPersonal($usuarioPersonal){$this->usuarioPersonal=$usuarioPersonal;}
public function get_usuarioPersonal(){return $this->usuarioPersonal;}
public function set_passwordPersonal($passwordPersonal){$this->passwordPersonal=$passwordPersonal;}
public function get_passwordPersonal(){return $this->passwordPersonal;}


}
?>