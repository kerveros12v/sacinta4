<?php

namespace Clasesphp;

class SetecCertificacion
{
   private $idsetecCertificacion;
   private $fkidsetecperfil;
   private $fechaprueba;
   private $horaprueba;
   private $costoCertidicacion;
   private $setecLugardondeExaminado;
   private $setecnombreEmpresaLugar;
   private $setecdireccionEmpresa;
   private $setecTelefonoEmpresa;
   private $seteccertificacionOculto;
   private $seteccertificacionAccion;
   private $seteccertificacionfecha;
   private $seteccertificacionuser;
   /**
    * Class constructor.
    */
   public function __construct()
   {
   }

   /**
    * Get the value of idsetecCertificacion
    */
   public function getIdsetecCertificacion()
   {
      return $this->idsetecCertificacion;
   }

   /**
    * Set the value of idsetecCertificacion
    *
    * @return  self
    */
   public function setIdsetecCertificacion($idsetecCertificacion)
   {
      $this->idsetecCertificacion = $idsetecCertificacion;

      return $this;
   }

   /**
    * Get the value of fkidsetecperfil
    */
   public function getFkidsetecperfil()
   {
      return $this->fkidsetecperfil;
   }

   /**
    * Set the value of fkidsetecperfil
    *
    * @return  self
    */
   public function setFkidsetecperfil($fkidsetecperfil)
   {
      $this->fkidsetecperfil = $fkidsetecperfil;

      return $this;
   }

   /**
    * Get the value of fechaprueba
    */
   public function getFechaprueba()
   {
      return $this->fechaprueba;
   }

   /**
    * Set the value of fechaprueba
    *
    * @return  self
    */
   public function setFechaprueba($fechaprueba)
   {
      $this->fechaprueba = $fechaprueba;

      return $this;
   }

   /**
    * Get the value of horaprueba
    */
   public function getHoraprueba()
   {
      return $this->horaprueba;
   }

   /**
    * Set the value of horaprueba
    *
    * @return  self
    */
   public function setHoraprueba($horaprueba)
   {
      $this->horaprueba = $horaprueba;

      return $this;
   }

   /**
    * Get the value of costoCertidicacion
    */
   public function getCostoCertidicacion()
   {
      return $this->costoCertidicacion;
   }

   /**
    * Set the value of costoCertidicacion
    *
    * @return  self
    */
   public function setCostoCertidicacion($costoCertidicacion)
   {
      $this->costoCertidicacion = $costoCertidicacion;

      return $this;
   }

   /**
    * Get the value of setecLugardondeExaminado
    */
   public function getSetecLugardondeExaminado()
   {
      return $this->setecLugardondeExaminado;
   }

   /**
    * Set the value of setecLugardondeExaminado
    *
    * @return  self
    */
   public function setSetecLugardondeExaminado($setecLugardondeExaminado)
   {
      $this->setecLugardondeExaminado = $setecLugardondeExaminado;

      return $this;
   }

   /**
    * Get the value of setecnombreEmpresaLugar
    */
   public function getSetecnombreEmpresaLugar()
   {
      return $this->setecnombreEmpresaLugar;
   }

   /**
    * Set the value of setecnombreEmpresaLugar
    *
    * @return  self
    */
   public function setSetecnombreEmpresaLugar($setecnombreEmpresaLugar)
   {
      $this->setecnombreEmpresaLugar = $setecnombreEmpresaLugar;

      return $this;
   }

   /**
    * Get the value of setecdireccionEmpresa
    */
   public function getSetecdireccionEmpresa()
   {
      return $this->setecdireccionEmpresa;
   }

   /**
    * Set the value of setecdireccionEmpresa
    *
    * @return  self
    */
   public function setSetecdireccionEmpresa($setecdireccionEmpresa)
   {
      $this->setecdireccionEmpresa = $setecdireccionEmpresa;

      return $this;
   }

   /**
    * Get the value of setecTelefonoEmpresa
    */
   public function getSetecTelefonoEmpresa()
   {
      return $this->setecTelefonoEmpresa;
   }

   /**
    * Set the value of setecTelefonoEmpresa
    *
    * @return  self
    */
   public function setSetecTelefonoEmpresa($setecTelefonoEmpresa)
   {
      $this->setecTelefonoEmpresa = $setecTelefonoEmpresa;

      return $this;
   }

   /**
    * Get the value of seteccertificacionOculto
    */
   public function getSeteccertificacionOculto()
   {
      return $this->seteccertificacionOculto;
   }

   /**
    * Set the value of seteccertificacionOculto
    *
    * @return  self
    */
   public function setSeteccertificacionOculto($seteccertificacionOculto)
   {
      $this->seteccertificacionOculto = $seteccertificacionOculto;

      return $this;
   }

   /**
    * Get the value of seteccertificacionAccion
    */
   public function getSeteccertificacionAccion()
   {
      return $this->seteccertificacionAccion;
   }

   /**
    * Set the value of seteccertificacionAccion
    *
    * @return  self
    */
   public function setSeteccertificacionAccion($seteccertificacionAccion)
   {
      $this->seteccertificacionAccion = $seteccertificacionAccion;

      return $this;
   }

   /**
    * Get the value of seteccertificacionfecha
    */
   public function getSeteccertificacionfecha()
   {
      return $this->seteccertificacionfecha;
   }

   /**
    * Set the value of seteccertificacionfecha
    *
    * @return  self
    */
   public function setSeteccertificacionfecha($seteccertificacionfecha)
   {
      $this->seteccertificacionfecha = $seteccertificacionfecha;

      return $this;
   }

   /**
    * Get the value of seteccertificacionuser
    */
   public function getSeteccertificacionuser()
   {
      return $this->seteccertificacionuser;
   }

   /**
    * Set the value of seteccertificacionuser
    *
    * @return  self
    */
   public function setSeteccertificacionuser($seteccertificacionuser)
   {
      $this->seteccertificacionuser = $seteccertificacionuser;

      return $this;
   }
   public function formatoJSON()
   {
      $myarray = array(
         'idsetecCertificacion' => $this->idsetecCertificacion,
         'fkidsetecperfil' => $this->fkidsetecperfil,
         'fechaprueba' => $this->fechaprueba,
         'horaprueba' => $this->horaprueba,
         'costoCertidicacion' => $this->costoCertidicacion,
         'setecLugardondeExaminado' => $this->setecLugardondeExaminado,
         'setecnombreEmpresaLugar' => $this->setecnombreEmpresaLugar,
         'setecdireccionEmpresa' => $this->setecdireccionEmpresa,
         'setecTelefonoEmpresa' => $this->setecTelefonoEmpresa,
         'seteccertificacionOculto' => $this->seteccertificacionOculto,
         'seteccertificacionAccion' => $this->seteccertificacionAccion,
         'seteccertificacionfecha' => $this->seteccertificacionfecha,
         'seteccertificacionuser' => $this->seteccertificacionuser
      );
      return json_encode($myarray);
   }
   public function formatoArray()
   {
      $myarray = array(
         'idsetecCertificacion' => $this->idsetecCertificacion,
         'fkidsetecperfil' => $this->fkidsetecperfil,
         'fechaprueba' => $this->fechaprueba,
         'horaprueba' => $this->horaprueba,
         'costoCertidicacion' => $this->costoCertidicacion,
         'setecLugardondeExaminado' => $this->setecLugardondeExaminado,
         'setecnombreEmpresaLugar' => $this->setecnombreEmpresaLugar,
         'setecdireccionEmpresa' => $this->setecdireccionEmpresa,
         'setecTelefonoEmpresa' => $this->setecTelefonoEmpresa,
         'seteccertificacionOculto' => $this->seteccertificacionOculto,
         'seteccertificacionAccion' => $this->seteccertificacionAccion,
         'seteccertificacionfecha' => $this->seteccertificacionfecha,
         'seteccertificacionuser' => $this->seteccertificacionuser
      );
      return $myarray;
   }
}
