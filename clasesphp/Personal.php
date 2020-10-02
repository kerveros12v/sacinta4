<?php

namespace Clasesphp;

class Personal
{
   private $tipodocumentoId;
   private $numeroIdentificacion;
   private $primerApellido;
   private $segundoApellido;
   private $primerNombre;
   private $segundoNombre;
   private $sexoId;
   private $generoId;
   private $estadocivilId;
   private $etniaId;
   private $pueblonacionalidadId;
   private $direccionDomiciliaria;
   private $provinciaSufragio;
   private $numeroCelular;
   private $correoElectronico;
   private $numDomicilio;
   private $porcentajeDiscapacidad;
   private $numCarnetDiscapacidad;
   private $tipoDiscapacidadid;
   private $tipoEnfermedadCatastroficaId;
   private $fechaNacimiento;
   private $paisNacionalidadId;
   private $tipoPersonalAdministrativo;
   private $fechaIngresoIES;
   private $fechaSalidaIES;
   private $relacionLaboralIESId;
   private $ingresoConConcursoMeritos;
   private $nroHorasLaborablesSemana;
   private $salarioMensual;
   private $usuarioPersonal;
   private $passwordPersonal;
   private $accesodepartamento;
   private $personalOculto;
   private $personalAccion;
   private $personalfecha;
   private $personaluser;
   /**
    * Class constructor.
    */
   public function __construct()
   {
   }

   /**
    * Get the value of tipodocumentoId
    */
   public function getTipodocumentoId()
   {
      return $this->tipodocumentoId;
   }

   /**
    * Set the value of tipodocumentoId
    *
    * @return  self
    */
   public function setTipodocumentoId($tipodocumentoId)
   {
      $this->tipodocumentoId = $tipodocumentoId;

      return $this;
   }

   /**
    * Get the value of numeroIdentificacion
    */
   public function getNumeroIdentificacion()
   {
      return $this->numeroIdentificacion;
   }

   /**
    * Set the value of numeroIdentificacion
    *
    * @return  self
    */
   public function setNumeroIdentificacion($numeroIdentificacion)
   {
      $this->numeroIdentificacion = $numeroIdentificacion;

      return $this;
   }

   /**
    * Get the value of primerApellido
    */
   public function getPrimerApellido()
   {
      return $this->primerApellido;
   }

   /**
    * Set the value of primerApellido
    *
    * @return  self
    */
   public function setPrimerApellido($primerApellido)
   {
      $this->primerApellido = $primerApellido;

      return $this;
   }

   /**
    * Get the value of segundoApellido
    */
   public function getSegundoApellido()
   {
      return $this->segundoApellido;
   }

   /**
    * Set the value of segundoApellido
    *
    * @return  self
    */
   public function setSegundoApellido($segundoApellido)
   {
      $this->segundoApellido = $segundoApellido;

      return $this;
   }

   /**
    * Get the value of primerNombre
    */
   public function getPrimerNombre()
   {
      return $this->primerNombre;
   }

   /**
    * Set the value of primerNombre
    *
    * @return  self
    */
   public function setPrimerNombre($primerNombre)
   {
      $this->primerNombre = $primerNombre;

      return $this;
   }

   /**
    * Get the value of segundoNombre
    */
   public function getSegundoNombre()
   {
      return $this->segundoNombre;
   }

   /**
    * Set the value of segundoNombre
    *
    * @return  self
    */
   public function setSegundoNombre($segundoNombre)
   {
      $this->segundoNombre = $segundoNombre;

      return $this;
   }

   /**
    * Get the value of sexoId
    */
   public function getSexoId()
   {
      return $this->sexoId;
   }

   /**
    * Set the value of sexoId
    *
    * @return  self
    */
   public function setSexoId($sexoId)
   {
      $this->sexoId = $sexoId;

      return $this;
   }

   /**
    * Get the value of generoId
    */
   public function getGeneroId()
   {
      return $this->generoId;
   }

   /**
    * Set the value of generoId
    *
    * @return  self
    */
   public function setGeneroId($generoId)
   {
      $this->generoId = $generoId;

      return $this;
   }

   /**
    * Get the value of estadocivilId
    */
   public function getEstadocivilId()
   {
      return $this->estadocivilId;
   }

   /**
    * Set the value of estadocivilId
    *
    * @return  self
    */
   public function setEstadocivilId($estadocivilId)
   {
      $this->estadocivilId = $estadocivilId;

      return $this;
   }

   /**
    * Get the value of etniaId
    */
   public function getEtniaId()
   {
      return $this->etniaId;
   }

   /**
    * Set the value of etniaId
    *
    * @return  self
    */
   public function setEtniaId($etniaId)
   {
      $this->etniaId = $etniaId;

      return $this;
   }

   /**
    * Get the value of pueblonacionalidadId
    */
   public function getPueblonacionalidadId()
   {
      return $this->pueblonacionalidadId;
   }

   /**
    * Set the value of pueblonacionalidadId
    *
    * @return  self
    */
   public function setPueblonacionalidadId($pueblonacionalidadId)
   {
      $this->pueblonacionalidadId = $pueblonacionalidadId;

      return $this;
   }

   /**
    * Get the value of direccionDomiciliaria
    */
   public function getDireccionDomiciliaria()
   {
      return $this->direccionDomiciliaria;
   }

   /**
    * Set the value of direccionDomiciliaria
    *
    * @return  self
    */
   public function setDireccionDomiciliaria($direccionDomiciliaria)
   {
      $this->direccionDomiciliaria = $direccionDomiciliaria;

      return $this;
   }

   /**
    * Get the value of provinciaSufragio
    */
   public function getProvinciaSufragio()
   {
      return $this->provinciaSufragio;
   }

   /**
    * Set the value of provinciaSufragio
    *
    * @return  self
    */
   public function setProvinciaSufragio($provinciaSufragio)
   {
      $this->provinciaSufragio = $provinciaSufragio;

      return $this;
   }

   /**
    * Get the value of numeroCelular
    */
   public function getNumeroCelular()
   {
      return $this->numeroCelular;
   }

   /**
    * Set the value of numeroCelular
    *
    * @return  self
    */
   public function setNumeroCelular($numeroCelular)
   {
      $this->numeroCelular = $numeroCelular;

      return $this;
   }

   /**
    * Get the value of correoElectronico
    */
   public function getCorreoElectronico()
   {
      return $this->correoElectronico;
   }

   /**
    * Set the value of correoElectronico
    *
    * @return  self
    */
   public function setCorreoElectronico($correoElectronico)
   {
      $this->correoElectronico = $correoElectronico;

      return $this;
   }

   /**
    * Get the value of numDomicilio
    */
   public function getNumDomicilio()
   {
      return $this->numDomicilio;
   }

   /**
    * Set the value of numDomicilio
    *
    * @return  self
    */
   public function setNumDomicilio($numDomicilio)
   {
      $this->numDomicilio = $numDomicilio;

      return $this;
   }

   /**
    * Get the value of porcentajeDiscapacidad
    */
   public function getPorcentajeDiscapacidad()
   {
      return $this->porcentajeDiscapacidad;
   }

   /**
    * Set the value of porcentajeDiscapacidad
    *
    * @return  self
    */
   public function setPorcentajeDiscapacidad($porcentajeDiscapacidad)
   {
      $this->porcentajeDiscapacidad = $porcentajeDiscapacidad;

      return $this;
   }

   /**
    * Get the value of numCarnetDiscapacidad
    */
   public function getNumCarnetDiscapacidad()
   {
      return $this->numCarnetDiscapacidad;
   }

   /**
    * Set the value of numCarnetDiscapacidad
    *
    * @return  self
    */
   public function setNumCarnetDiscapacidad($numCarnetDiscapacidad)
   {
      $this->numCarnetDiscapacidad = $numCarnetDiscapacidad;

      return $this;
   }

   /**
    * Get the value of tipoDiscapacidadid
    */
   public function getTipoDiscapacidadid()
   {
      return $this->tipoDiscapacidadid;
   }

   /**
    * Set the value of tipoDiscapacidadid
    *
    * @return  self
    */
   public function setTipoDiscapacidadid($tipoDiscapacidadid)
   {
      $this->tipoDiscapacidadid = $tipoDiscapacidadid;

      return $this;
   }

   /**
    * Get the value of tipoEnfermedadCatastroficaId
    */
   public function getTipoEnfermedadCatastroficaId()
   {
      return $this->tipoEnfermedadCatastroficaId;
   }

   /**
    * Set the value of tipoEnfermedadCatastroficaId
    *
    * @return  self
    */
   public function setTipoEnfermedadCatastroficaId($tipoEnfermedadCatastroficaId)
   {
      $this->tipoEnfermedadCatastroficaId = $tipoEnfermedadCatastroficaId;

      return $this;
   }

   /**
    * Get the value of fechaNacimiento
    */
   public function getFechaNacimiento()
   {
      return $this->fechaNacimiento;
   }

   /**
    * Set the value of fechaNacimiento
    *
    * @return  self
    */
   public function setFechaNacimiento($fechaNacimiento)
   {
      $this->fechaNacimiento = $fechaNacimiento;

      return $this;
   }

   /**
    * Get the value of paisNacionalidadId
    */
   public function getPaisNacionalidadId()
   {
      return $this->paisNacionalidadId;
   }

   /**
    * Set the value of paisNacionalidadId
    *
    * @return  self
    */
   public function setPaisNacionalidadId($paisNacionalidadId)
   {
      $this->paisNacionalidadId = $paisNacionalidadId;

      return $this;
   }

   /**
    * Get the value of tipoPersonalAdministrativo
    */
   public function getTipoPersonalAdministrativo()
   {
      return $this->tipoPersonalAdministrativo;
   }

   /**
    * Set the value of tipoPersonalAdministrativo
    *
    * @return  self
    */
   public function setTipoPersonalAdministrativo($tipoPersonalAdministrativo)
   {
      $this->tipoPersonalAdministrativo = $tipoPersonalAdministrativo;

      return $this;
   }

   /**
    * Get the value of fechaIngresoIES
    */
   public function getFechaIngresoIES()
   {
      return $this->fechaIngresoIES;
   }

   /**
    * Set the value of fechaIngresoIES
    *
    * @return  self
    */
   public function setFechaIngresoIES($fechaIngresoIES)
   {
      $this->fechaIngresoIES = $fechaIngresoIES;

      return $this;
   }

   /**
    * Get the value of fechaSalidaIES
    */
   public function getFechaSalidaIES()
   {
      return $this->fechaSalidaIES;
   }

   /**
    * Set the value of fechaSalidaIES
    *
    * @return  self
    */
   public function setFechaSalidaIES($fechaSalidaIES)
   {
      $this->fechaSalidaIES = $fechaSalidaIES;

      return $this;
   }

   /**
    * Get the value of relacionLaboralIESId
    */
   public function getRelacionLaboralIESId()
   {
      return $this->relacionLaboralIESId;
   }

   /**
    * Set the value of relacionLaboralIESId
    *
    * @return  self
    */
   public function setRelacionLaboralIESId($relacionLaboralIESId)
   {
      $this->relacionLaboralIESId = $relacionLaboralIESId;

      return $this;
   }

   /**
    * Get the value of ingresoConConcursoMeritos
    */
   public function getIngresoConConcursoMeritos()
   {
      return $this->ingresoConConcursoMeritos;
   }

   /**
    * Set the value of ingresoConConcursoMeritos
    *
    * @return  self
    */
   public function setIngresoConConcursoMeritos($ingresoConConcursoMeritos)
   {
      $this->ingresoConConcursoMeritos = $ingresoConConcursoMeritos;

      return $this;
   }

   /**
    * Get the value of nroHorasLaborablesSemana
    */
   public function getNroHorasLaborablesSemana()
   {
      return $this->nroHorasLaborablesSemana;
   }

   /**
    * Set the value of nroHorasLaborablesSemana
    *
    * @return  self
    */
   public function setNroHorasLaborablesSemana($nroHorasLaborablesSemana)
   {
      $this->nroHorasLaborablesSemana = $nroHorasLaborablesSemana;

      return $this;
   }

   /**
    * Get the value of salarioMensual
    */
   public function getSalarioMensual()
   {
      return $this->salarioMensual;
   }

   /**
    * Set the value of salarioMensual
    *
    * @return  self
    */
   public function setSalarioMensual($salarioMensual)
   {
      $this->salarioMensual = $salarioMensual;

      return $this;
   }

   /**
    * Get the value of usuarioPersonal
    */
   public function getUsuarioPersonal()
   {
      return $this->usuarioPersonal;
   }

   /**
    * Set the value of usuarioPersonal
    *
    * @return  self
    */
   public function setUsuarioPersonal($usuarioPersonal)
   {
      $this->usuarioPersonal = $usuarioPersonal;

      return $this;
   }

   /**
    * Get the value of passwordPersonal
    */
   public function getPasswordPersonal()
   {
      return $this->passwordPersonal;
   }

   /**
    * Set the value of passwordPersonal
    *
    * @return  self
    */
   public function setPasswordPersonal($passwordPersonal)
   {
      $this->passwordPersonal = $passwordPersonal;

      return $this;
   }

   /**
    * Get the value of accesodepartamento
    */
   public function getAccesodepartamento()
   {
      return $this->accesodepartamento;
   }

   /**
    * Set the value of accesodepartamento
    *
    * @return  self
    */
   public function setAccesodepartamento($accesodepartamento)
   {
      $this->accesodepartamento = $accesodepartamento;

      return $this;
   }

   /**
    * Get the value of personalOculto
    */
   public function getPersonalOculto()
   {
      return $this->personalOculto;
   }

   /**
    * Set the value of personalOculto
    *
    * @return  self
    */
   public function setPersonalOculto($personalOculto)
   {
      $this->personalOculto = $personalOculto;

      return $this;
   }

   /**
    * Get the value of personalAccion
    */
   public function getPersonalAccion()
   {
      return $this->personalAccion;
   }

   /**
    * Set the value of personalAccion
    *
    * @return  self
    */
   public function setPersonalAccion($personalAccion)
   {
      $this->personalAccion = $personalAccion;

      return $this;
   }

   /**
    * Get the value of personalfecha
    */
   public function getPersonalfecha()
   {
      return $this->personalfecha;
   }

   /**
    * Set the value of personalfecha
    *
    * @return  self
    */
   public function setPersonalfecha($personalfecha)
   {
      $this->personalfecha = $personalfecha;

      return $this;
   }

   /**
    * Get the value of personaluser
    */
   public function getPersonaluser()
   {
      return $this->personaluser;
   }

   /**
    * Set the value of personaluser
    *
    * @return  self
    */
   public function setPersonaluser($personaluser)
   {
      $this->personaluser = $personaluser;

      return $this;
   }
}
