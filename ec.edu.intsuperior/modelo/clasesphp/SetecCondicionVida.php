<?php
namespace Clasesphp;

class SetecCondicionVida{
    private $SetecCondiciondeVidaCedula;
    private $SetecCondiciondeVidaFecha;
    private $Setecjefehogar;
    private $Setecseguromedico;
    private $SetecAsistenciaInstitucion;
    private $Setecvivienda;
    private $SetecLuz;
    private $SetecAgua;
    private $SetecInternet;
    private $idSetecCondiciondeVida;
    private $Setecnumhijos;
    private $Setechijomayor;
    private $SetecMienbrosHogar;
    public function get_Setechijomayor() {
        return $this->Setechijomayor;
    }

    public function set_Setechijomayor($Setechijomayor) {
        $this->Setechijomayor = $Setechijomayor;
    }
    public function get_SetecCondiciondeVidaCedula() {
        return $this->SetecCondiciondeVidaCedula;
    }

    public function set_SetecCondiciondeVidaCedula($setecCondiciondeVidaCedula) {
        $this->SetecCondiciondeVidaCedula = $setecCondiciondeVidaCedula;
    }

    public function get_SetecCondiciondeVidaFecha() {
        return $this->SetecCondiciondeVidaFecha;
    }

    public function set_SetecCondiciondeVidaFecha($setecCondiciondeVidaFecha) {
        $this->SetecCondiciondeVidaFecha = $setecCondiciondeVidaFecha;
    }

    public function get_Setecjefehogar() {
        return $this->Setecjefehogar;
    }

    public function set_Setecjefehogar($setecjefehogar) {
        $this->Setecjefehogar = $setecjefehogar;
    }

    public function get_Setecseguromedico() {
        return $this->Setecseguromedico;
    }

    public function set_Setecseguromedico($setecseguromedico) {
        $this->Setecseguromedico = $setecseguromedico;
    }

    public function get_SetecAsistenciaInstitucion() {
        return $this->SetecAsistenciaInstitucion;
    }

    public function set_SetecAsistenciaInstitucion($setecAsistenciaInstitucion) {
        $this->SetecAsistenciaInstitucion = $setecAsistenciaInstitucion;
    }

    public function get_Setecvivienda() {
        return $this->Setecvivienda;
    }

    public function set_Setecvivienda($setecvivienda) {
        $this->Setecvivienda = $setecvivienda;
    }

    public function get_SetecLuz() {
        return $this->SetecLuz;
    }

    public function set_SetecLuz($setecLuz) {
        $this->SetecLuz = $setecLuz;
    }

    public function get_SetecAgua() {
        return $this->SetecAgua;
    }

    public function set_SetecAgua($setecAgua) {
        $this->SetecAgua = $setecAgua;
    }

    public function get_SetecInternet() {
        return $this->SetecInternet;
    }

    public function set_SetecInternet($setecInternet) {
        $this->SetecInternet = $setecInternet;
    }

    public function get_IdSetecCondiciondeVida() {
        return $this->idSetecCondiciondeVida;
    }

    public function set_IdSetecCondiciondeVida($idSetecCondiciondeVida) {
        $this->idSetecCondiciondeVida = $idSetecCondiciondeVida;
    }

    public function get_Setecnumhijos() {
        return $this->Setecnumhijos;
    }

    public function set_Setecnumhijos($setecnumhijos) {
        $this->Setecnumhijos = $setecnumhijos;
    }

    public function get_SetecMienbrosHogar() {
        return $this->SetecMienbrosHogar;
    }

    public function set_SetecMienbrosHogar($setecMienbrosHogar) {
        $this->SetecMienbrosHogar = $setecMienbrosHogar;
    }
    public function formatoArray(){
        $myarray=array('SetecCondiciondeVidaCedula'=>$this->SetecCondiciondeVidaCedula,
        'SetecCondiciondeVidaFecha'=>$this->SetecCondiciondeVidaFecha,
        'Setecjefehogar'=>$this->Setecjefehogar,
        'Setecseguromedico'=>$this->Setecseguromedico,
        'SetecAsistenciaInstitucion'=>$this->SetecAsistenciaInstitucion,
        'Setecvivienda'=>$this->Setecvivienda,
        'SetecLuz'=>$this->SetecLuz,
        'SetecAgua'=>$this->SetecAgua,
        'SetecInternet'=>$this->SetecInternet,
        'idSetecCondiciondeVida'=>$this->idSetecCondiciondeVida,
        'Setecnumhijos'=>$this->Setecnumhijos,
        'SetecMienbrosHogar'=>$this->SetecMienbrosHogar);
        return $myarray;
    }
    public function formatoJSON(){
        $myarray=array('SetecCondiciondeVidaCedula'=>$this->SetecCondiciondeVidaCedula,
        'SetecCondiciondeVidaFecha'=>$this->SetecCondiciondeVidaFecha,
        'Setecjefehogar'=>$this->Setecjefehogar,
        'Setecseguromedico'=>$this->Setecseguromedico,
        'SetecAsistenciaInstitucion'=>$this->SetecAsistenciaInstitucion,
        'Setecvivienda'=>$this->Setecvivienda,
        'SetecLuz'=>$this->SetecLuz,
        'SetecAgua'=>$this->SetecAgua,
        'SetecInternet'=>$this->SetecInternet,
        'idSetecCondiciondeVida'=>$this->idSetecCondiciondeVida,
        'Setecnumhijos'=>$this->Setecnumhijos,
        'SetecMienbrosHogar'=>$this->SetecMienbrosHogar);
        return json_encode($myarray);
    }
}
?>