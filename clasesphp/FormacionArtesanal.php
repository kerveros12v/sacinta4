<?php
namespace Clasesphp;

class FormacionArtesanal{
    private $idformacionArtesano;
    private $formacionartesanocodigo;
    private $formacionartesanoOculto;
    private $formacionartesanoAccion;
    private $formacionArtesanal;
    private $formacionartesanofecha;
    private $formacionartesanouser;

    public function get_IdformacionArtesano() {
       return  $this->idformacionArtesano;
    }

    public function set_IdformacionArtesano($idformacionArtesano) {
        $this->idformacionArtesano = $idformacionArtesano;
    }

    public function get_Formacionartesanocodigo() {
       return  $this->formacionartesanocodigo;
    }

    public function set_Formacionartesanocodigo($formacionartesanocodigo) {
        $this->formacionartesanocodigo = $formacionartesanocodigo;
    }

    public function get_FormacionartesanoOculto() {
       return  $this->formacionartesanoOculto;
    }

    public function set_FormacionartesanoOculto($formacionartesanoOculto) {
        $this->formacionartesanoOculto = $formacionartesanoOculto;
    }

    public function get_FormacionartesanoAccion() {
       return  $this->formacionartesanoAccion;
    }

    public function set_FormacionartesanoAccion($formacionartesanoAccion) {
        $this->formacionartesanoAccion = $formacionartesanoAccion;
    }

    public function get_FormacionArtesanal() {
       return  $this->formacionArtesanal;
    }

    public function set_FormacionArtesanal($formacionArtesanal) {
        $this->formacionArtesanal = $formacionArtesanal;
    }

    public function get_Formacionartesanofecha() {
       return  $this->formacionartesanofecha;
    }

    public function set_Formacionartesanofecha($formacionartesanofecha) {
        $this->formacionartesanofecha = $formacionartesanofecha;
    }

    public function get_Formacionartesanouser() {
       return $this->formacionartesanouser;
    }

    public function set_Formacionartesanouser($formacionartesanouser) {
        $this->formacionartesanouser = $formacionartesanouser;
    }
    public function formatoJSON(){
        $myarray=array(
            'idformacionArtesano'=>$this->idformacionArtesano,
            'formacionartesanocodigo'=>$this->formacionartesanocodigo,
            'formacionartesanoOculto'=>$this->formacionartesanoOculto,
            'formacionartesanoAccion'=>$this->formacionartesanoAccion,
            'formacionArtesanal'=>$this->formacionArtesanal,
            'formacionartesanofecha'=>$this->formacionartesanofecha,
            'formacionartesanouser'=>$this->formacionartesanouser
        );
        return json_encode($myarray);
    }
    public function formatoArray(){
        $myarray=array(
            'idformacionArtesano'=>$this->idformacionArtesano,
            'formacionartesanocodigo'=>$this->formacionartesanocodigo,
            'formacionartesanoOculto'=>$this->formacionartesanoOculto,
            'formacionartesanoAccion'=>$this->formacionartesanoAccion,
            'formacionArtesanal'=>$this->formacionArtesanal,
            'formacionartesanofecha'=>$this->formacionartesanofecha,
            'formacionartesanouser'=>$this->formacionartesanouser
        );
        return $myarray;
    }
}

?>