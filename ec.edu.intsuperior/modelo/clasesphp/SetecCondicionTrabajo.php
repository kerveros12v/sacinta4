<?php
namespace Clasesphp;

class SeteCondicionLaboral {
    private $SeteCondicionLaboralEmpresa;
     private $SeteCondicionLaboralCedula;
     private $SeteCondicionLaboralFecharegistro;
     private $SeteCondicionLaboralacenso;
     private $SeteCondicionLaboralsatisfaccion;
     private $SeteCondicionLaboralAgotamiento;
     private $SeteCondicionLaboralRespeto;
     private $SeteCondicionLaboralReconocimiento;
     private $SeteCondicionLaboralRiesgo;
     private $SeteCondicionLaboralCambio;
     private $SeteCondicionLaboralBonificacion;
     private $SeteCondicionLaboralTransporte;
     private $SeteCondicionLaboralCapacitacion;
     private $idSeteCondicionLaboral;

     public function get_SeteCondicionLaboralEmpresa() {
         return $this->SeteCondicionLaboralEmpresa;
     }

     public function set_SeteCondicionLaboralEmpresa($seteCondicionLaboralEmpresa) {
        $this->SeteCondicionLaboralEmpresa = $seteCondicionLaboralEmpresa;
     }

     public function get_SeteCondicionLaboralCedula() {
         return $this->SeteCondicionLaboralCedula;
     }

     public function set_SeteCondicionLaboralCedula($seteCondicionLaboralCedula) {
        $this->SeteCondicionLaboralCedula = $seteCondicionLaboralCedula;
     }

     public function get_SeteCondicionLaboralFecharegistro() {
         return $this->SeteCondicionLaboralFecharegistro;
     }

     public function set_SeteCondicionLaboralFecharegistro($seteCondicionLaboralFecharegistro) {
        $this->SeteCondicionLaboralFecharegistro = $seteCondicionLaboralFecharegistro;
     }

     public function get_SeteCondicionLaboralacenso() {
         return $this->SeteCondicionLaboralacenso;
     }

     public function set_SeteCondicionLaboralacenso($seteCondicionLaboralacenso) {
        $this->SeteCondicionLaboralacenso = $seteCondicionLaboralacenso;
     }

     public function get_SeteCondicionLaboralsatisfaccion() {
         return $this->SeteCondicionLaboralsatisfaccion;
     }

     public function set_SeteCondicionLaboralsatisfaccion($seteCondicionLaboralsatisfaccion) {
        $this->SeteCondicionLaboralsatisfaccion = $seteCondicionLaboralsatisfaccion;
     }

     public function get_SeteCondicionLaboralAgotamiento() {
         return $this->SeteCondicionLaboralAgotamiento;
     }

     public function set_SeteCondicionLaboralAgotamiento($seteCondicionLaboralAgotamiento) {
        $this->SeteCondicionLaboralAgotamiento = $seteCondicionLaboralAgotamiento;
     }

     public function get_SeteCondicionLaboralRespeto() {
         return $this->SeteCondicionLaboralRespeto;
     }

     public function set_SeteCondicionLaboralRespeto($seteCondicionLaboralRespeto) {
        $this->SeteCondicionLaboralRespeto = $seteCondicionLaboralRespeto;
     }

     public function get_SeteCondicionLaboralReconocimiento() {
         return $this->SeteCondicionLaboralReconocimiento;
     }

     public function set_SeteCondicionLaboralReconocimiento($seteCondicionLaboralReconocimiento) {
        $this->SeteCondicionLaboralReconocimiento = $seteCondicionLaboralReconocimiento;
     }

     public function get_SeteCondicionLaboralRiesgo() {
         return $this->SeteCondicionLaboralRiesgo;
     }

     public function set_SeteCondicionLaboralRiesgo($seteCondicionLaboralRiesgo) {
        $this->SeteCondicionLaboralRiesgo = $seteCondicionLaboralRiesgo;
     }

     public function get_SeteCondicionLaboralCambio() {
         return $this->SeteCondicionLaboralCambio;
     }

     public function set_SeteCondicionLaboralCambio($seteCondicionLaboralCambio) {
        $this->SeteCondicionLaboralCambio = $seteCondicionLaboralCambio;
     }

     public function get_SeteCondicionLaboralBonificacion() {
         return $this->SeteCondicionLaboralBonificacion;
     }

     public function set_SeteCondicionLaboralBonificacion($seteCondicionLaboralBonificacion) {
        $this->SeteCondicionLaboralBonificacion = $seteCondicionLaboralBonificacion;
     }

     public function get_SeteCondicionLaboralTransporte() {
         return $this->SeteCondicionLaboralTransporte;
     }

     public function set_SeteCondicionLaboralTransporte($seteCondicionLaboralTransporte) {
        $this->SeteCondicionLaboralTransporte = $seteCondicionLaboralTransporte;
     }

     public function get_SeteCondicionLaboralCapacitacion() {
         return $this->SeteCondicionLaboralCapacitacion;
     }

     public function set_SeteCondicionLaboralCapacitacion($seteCondicionLaboralCapacitacion) {
        $this->SeteCondicionLaboralCapacitacion = $seteCondicionLaboralCapacitacion;
     }

     public function get_IdSeteCondicionLaboral() {
         return $this->idSeteCondicionLaboral;
     }

     public function set_IdSeteCondicionLaboral($idSeteCondicionLaboral) {
        $this->idSeteCondicionLaboral = $idSeteCondicionLaboral;
     }
     public function formatoArray(){
        $myarray=array('SeteCondicionLaboralEmpresa'=>$this->SeteCondicionLaboralEmpresa,
        'SeteCondicionLaboralCedula'=>$this->SeteCondicionLaboralCedula,
        'SeteCondicionLaboralFecharegistro'=>$this->SeteCondicionLaboralFecharegistro,
        'SeteCondicionLaboralacenso'=>$this->SeteCondicionLaboralacenso,
        'SeteCondicionLaboralsatisfaccion'=>$this->SeteCondicionLaboralsatisfaccion,
        'SeteCondicionLaboralAgotamiento'=>$this->SeteCondicionLaboralAgotamiento,
        'SeteCondicionLaboralRespeto'=>$this->SeteCondicionLaboralRespeto,
        'SeteCondicionLaboralReconocimiento'=>$this->SeteCondicionLaboralReconocimiento,
        'SeteCondicionLaboralRiesgo'=>$this->SeteCondicionLaboralRiesgo,
        'SeteCondicionLaboralCambio'=>$this->SeteCondicionLaboralCambio,
        'SeteCondicionLaboralBonificacion'=>$this->SeteCondicionLaboralBonificacion,
        'SeteCondicionLaboralTransporte'=>$this->SeteCondicionLaboralTransporte,
        'SeteCondicionLaboralCapacitacion'=>$this->SeteCondicionLaboralCapacitacion,
        'idSeteCondicionLaboral'=>$this->idSeteCondicionLaboral);
        return $myarray;
     }
     public function formatoJSON(){
        $myarray=array('SeteCondicionLaboralEmpresa'=>$this->SeteCondicionLaboralEmpresa,
        'SeteCondicionLaboralCedula'=>$this->SeteCondicionLaboralCedula,
        'SeteCondicionLaboralFecharegistro'=>$this->SeteCondicionLaboralFecharegistro,
        'SeteCondicionLaboralacenso'=>$this->SeteCondicionLaboralacenso,
        'SeteCondicionLaboralsatisfaccion'=>$this->SeteCondicionLaboralsatisfaccion,
        'SeteCondicionLaboralAgotamiento'=>$this->SeteCondicionLaboralAgotamiento,
        'SeteCondicionLaboralRespeto'=>$this->SeteCondicionLaboralRespeto,
        'SeteCondicionLaboralReconocimiento'=>$this->SeteCondicionLaboralReconocimiento,
        'SeteCondicionLaboralRiesgo'=>$this->SeteCondicionLaboralRiesgo,
        'SeteCondicionLaboralCambio'=>$this->SeteCondicionLaboralCambio,
        'SeteCondicionLaboralBonificacion'=>$this->SeteCondicionLaboralBonificacion,
        'SeteCondicionLaboralTransporte'=>$this->SeteCondicionLaboralTransporte,
        'SeteCondicionLaboralCapacitacion'=>$this->SeteCondicionLaboralCapacitacion,
        'idSeteCondicionLaboral'=>$this->idSeteCondicionLaboral);
        return json_encode($myarray);
     }
 }

?>