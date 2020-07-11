<?php
namespace Clasesphp;

class SetecAspirante{
private $numeroidentificacionsetec;
private $primerApellidosetec;
private $segundoApellidosetec;
private $primerNombresetec;
private $segundoNombresetec;
private $fechanacimiento;
private $fkgenerosetec;
private $fkformacionArtesano;
private $instruccionRegistroCivil;
private $fkprovinciasetec;
private $fkcantonsetec;
private $parroquiasetec;
private $direccionsetec;
private $correoelectronicoSetec;
private $telefonosetec;
private $celularsetec;
private $fkdiscapacidadsetec;
private $fktipodiscapacidad;
private $fksocioempleo;
private $accesodepartamento_idaccesodepartamento;
private $setecaspiranteOculto;
private $setecaspiranteAccion;
private $setecaspirantefecha;
private $setecaspiranteuser;
private $setecaspiinstriccionseleccionada;
public function __construct(){}
public  function set_numeroidentificacionsetec($numeroidentificacionsetec){$this->numeroidentificacionsetec=$numeroidentificacionsetec;}
public  function set_primerApellidosetec($primerApellidosetec){$this->primerApellidosetec=$primerApellidosetec;}
public  function set_segundoApellidosetec($segundoApellidosetec){$this->segundoApellidosetec=$segundoApellidosetec;}
public  function set_primerNombresetec($primerNombresetec){$this->primerNombresetec=$primerNombresetec;}
public  function set_segundoNombresetec($segundoNombresetec){$this->segundoNombresetec=$segundoNombresetec;}
public  function set_fechanacimiento($fechanacimiento){$this->fechanacimiento=$fechanacimiento;}
public  function set_fkgenerosetec($fkgenerosetec){$this->fkgenerosetec=$fkgenerosetec;}
public  function set_fkformacionArtesano($fkformacionArtesano){$this->fkformacionArtesano=$fkformacionArtesano;}
public  function set_instruccionRegistroCivil($instruccionRegistroCivil){$this->instruccionRegistroCivil=$instruccionRegistroCivil;}
public  function set_fkprovinciasetec($fkprovinciasetec){$this->fkprovinciasetec=$fkprovinciasetec;}
public  function set_fkcantonsetec($fkcantonsetec){$this->fkcantonsetec=$fkcantonsetec;}
public  function set_parroquiasetec($parroquiasetec){$this->parroquiasetec=$parroquiasetec;}
public  function set_direccionsetec($direccionsetec){$this->direccionsetec=$direccionsetec;}
public  function set_correoelectronicoSetec($correoelectronicoSetec){$this->correoelectronicoSetec=$correoelectronicoSetec;}
public  function set_telefonosetec($telefonosetec){$this->telefonosetec=$telefonosetec;}
public  function set_celularsetec($celularsetec){$this->celularsetec=$celularsetec;}
public  function set_fkdiscapacidadsetec($fkdiscapacidadsetec){$this->fkdiscapacidadsetec=$fkdiscapacidadsetec;}
public  function set_fktipodiscapacidad($fktipodiscapacidad){$this->fktipodiscapacidad=$fktipodiscapacidad;}
public  function set_fksocioempleo($fksocioempleo){$this->fksocioempleo=$fksocioempleo;}
public  function set_accesodepartamento_idaccesodepartamento($accesodepartamento_idaccesodepartamento){$this->accesodepartamento_idaccesodepartamento=$accesodepartamento_idaccesodepartamento;}
public  function set_setecaspiranteOculto($setecaspiranteOculto){$this->setecaspiranteOculto=$setecaspiranteOculto;}
public  function set_setecaspiranteAccion($setecaspiranteAccion){$this->setecaspiranteAccion=$setecaspiranteAccion;}
public  function set_setecaspirantefecha($setecaspirantefecha){$this->setecaspirantefecha=$setecaspirantefecha;}
public  function set_setecaspiranteuser($setecaspiranteuser){$this->setecaspiranteuser=$setecaspiranteuser;}
public function set_setecaspiinstriccionseleccionada($setecaspiinstriccionseleccionada){$this->setecaspiinstriccionseleccionada=$setecaspiinstriccionseleccionada;}

public  function get_numeroidentificacionsetec(){return $this->numeroidentificacionsetec;}
public  function get_primerApellidosetec(){return $this->primerApellidosetec;}
public  function get_segundoApellidosetec(){return $this->segundoApellidosetec;}
public  function get_primerNombresetec(){return $this->primerNombresetec;}
public  function get_segundoNombresetec(){return $this->segundoNombresetec;}
public  function get_fechanacimiento(){return $this->fechanacimiento;}
public  function get_fkgenerosetec(){return $this->fkgenerosetec;}
public  function get_fkformacionArtesano(){return $this->fkformacionArtesano;}
public  function get_instruccionRegistroCivil(){return $this->instruccionRegistroCivil;}
public  function get_fkprovinciasetec(){return $this->fkprovinciasetec;}
public  function get_fkcantonsetec(){return $this->fkcantonsetec;}
public  function get_parroquiasetec(){return $this->parroquiasetec;}
public  function get_direccionsetec(){return $this->direccionsetec;}
public  function get_correoelectronicoSetec(){return $this->correoelectronicoSetec;}
public  function get_telefonosetec(){return $this->telefonosetec;}
public  function get_celularsetec(){return $this->celularsetec;}
public  function get_fkdiscapacidadsetec(){return $this->fkdiscapacidadsetec;}
public  function get_fktipodiscapacidad(){return $this->fktipodiscapacidad;}
public  function get_fksocioempleo(){return $this->fksocioempleo;}
public  function get_accesodepartamento_idaccesodepartamento(){return $this->accesodepartamento_idaccesodepartamento;}
public  function get_setecaspiranteOculto(){return $this->setecaspiranteOculto;}
public  function get_setecaspiranteAccion(){return $this->setecaspiranteAccion;}
public  function get_setecaspirantefecha(){return $this->setecaspirantefecha;}
public  function get_setecaspiranteuser(){return $this->setecaspiranteuser;}
public function get_setecaspiinstriccionseleccionada(){return $this->setecaspiinstriccionseleccionada;}
public function formatoJSON(){
    $myarray=array('numeroidentificacionsetec'=>$this->numeroidentificacionsetec,
    'primerApellidosetec'=>$this->primerApellidosetec,
    'segundoApellidosetec'=>$this->segundoApellidosetec,
    'primerNombresetec'=>$this->primerNombresetec,
    'segundoNombresetec'=>$this->segundoNombresetec,
    'fechanacimiento'=>$this->fechanacimiento,
    'fkgenerosetec'=>$this->fkgenerosetec,
    'fkformacionArtesano'=>$this->fkformacionArtesano,
    'instruccionRegistroCivil'=>$this->instruccionRegistroCivil,
    'setecaspiinstriccionseleccionada'=>$this->setecaspiinstriccionseleccionada,
    'fkprovinciasetec'=>$this->fkprovinciasetec,
    'fkcantonsetec'=>$this->fkcantonsetec,
    'parroquiasetec'=>$this->parroquiasetec,
    'direccionsetec'=>$this->direccionsetec,
    'correoelectronicoSetec'=>$this->correoelectronicoSetec,
    'telefonosetec'=>$this->telefonosetec,
    'celularsetec'=>$this->celularsetec,
    'fkdiscapacidadsetec'=>$this->fkdiscapacidadsetec,
    'fktipodiscapacidad'=>$this->fktipodiscapacidad,
    'fksocioempleo'=>$this->fksocioempleo,
    'accesodepartamento_idaccesodepartamento'=>$this->accesodepartamento_idaccesodepartamento,
    'setecaspiranteOculto'=>$this->setecaspiranteOculto,
    'setecaspiranteAccion'=>$this->setecaspiranteAccion,
    'setecaspirantefecha'=>$this->setecaspirantefecha,
    'setecaspiranteuser'=>$this->setecaspiranteuser);
    return json_encode($myarray);
}
public function formatoArray(){
    $myarray=array('numeroidentificacionsetec'=>$this->numeroidentificacionsetec,
    'primerApellidosetec'=>$this->primerApellidosetec,
    'segundoApellidosetec'=>$this->segundoApellidosetec,
    'primerNombresetec'=>$this->primerNombresetec,
    'segundoNombresetec'=>$this->segundoNombresetec,
    'fechanacimiento'=>$this->fechanacimiento,
    'fkgenerosetec'=>$this->fkgenerosetec,
    'fkformacionArtesano'=>$this->fkformacionArtesano,
    'instruccionRegistroCivil'=>$this->instruccionRegistroCivil,
    'setecaspiinstriccionseleccionada'=>$this->setecaspiinstriccionseleccionada,
    'fkprovinciasetec'=>$this->fkprovinciasetec,
    'fkcantonsetec'=>$this->fkcantonsetec,
    'parroquiasetec'=>$this->parroquiasetec,
    'direccionsetec'=>$this->direccionsetec,
    'correoelectronicoSetec'=>$this->correoelectronicoSetec,
    'telefonosetec'=>$this->telefonosetec,
    'celularsetec'=>$this->celularsetec,
    'fkdiscapacidadsetec'=>$this->fkdiscapacidadsetec,
    'fktipodiscapacidad'=>$this->fktipodiscapacidad,
    'fksocioempleo'=>$this->fksocioempleo,
    'accesodepartamento_idaccesodepartamento'=>$this->accesodepartamento_idaccesodepartamento,
    'setecaspiranteOculto'=>$this->setecaspiranteOculto,
    'setecaspiranteAccion'=>$this->setecaspiranteAccion,
    'setecaspirantefecha'=>$this->setecaspirantefecha,
    'setecaspiranteuser'=>$this->setecaspiranteuser);
    return $myarray;
}
}
?>