<?php
namespace Clasesphp;

class Parroquia{
    private $idparroquias;
private $parroquiascodigo;
private $parroquia;
private $parroquiasCanton;
private $parroquiaOculto;
private $parroquiaAccion;
private $parroquiafecha;
private $parroquiasUsuario;

public function _construct(){}
public function set_idparroquias($idparroquias)
{
    $this->idparroquias=$idparroquias;
}
public function get_idparroquias()
{
    return $this->idparroquias;
}
public function set_parroquiascodigo($parroquiascodigo){$this->parroquiascodigo=$parroquiascodigo;}
public function get_parroquiascodigo(){return $this->parroquiascodigo;}
public function set_parroquia($parroquia){$this->parroquia=$parroquia;}
public function get_parroquia(){return $this->parroquia;}
public function set_parroquiasCanton($parroquiasCanton){$this->parroquiasCanton=$parroquiasCanton;}
public function get_parroquiasCanton(){return $this->parroquiasCanton;}
public function set_parroquiaOculto($parroquiaOculto){$this->parroquiaOculto=$parroquiaOculto;}
public function get_parroquiaOculto(){return $this->parroquiaOculto;}
public function set_parroquiaAccion($parroquiaAccion){$this->parroquiaAccion=$parroquiaAccion;}
public function get_parroquiaAccion(){return $this->parroquiaAccion;}
public function set_parroquiafecha($parroquiafecha){$this->parroquiafecha=$parroquiafecha;}
public function get_parroquiafecha(){return $this->parroquiafecha;}
public function set_parroquiasUsuario($parroquiasUsuario){$this->parroquiasUsuario=$parroquiasUsuario;}
public function get_parroquiasUsuario(){return $this->parroquiasUsuario;}
public function __toString()
{

    return $this->parroquiascodigo;
}
public function formatoJSON(){
    $myarray=array(
        'idparroquias'=>$this->idparroquias,
        'parroquiascodigo'=>$this->parroquiascodigo,
        'parroquia'=>$this->parroquia,
        'parroquiasCanton'=>$this->parroquiasCanton,
        'parroquiaOculto'=>$this->parroquiaOculto,
        'parroquiaAccion'=>$this->parroquiaAccion,
        'parroquiafecha'=>$this->parroquiafecha,
        'parroquiasUsuario'=>$this->parroquiasUsuario);
        return json_encode($myarray);
}
public function formatoArray(){
     $myarray=array(
     'idparroquias'=>$this->idparroquias,
     'parroquiascodigo'=>$this->parroquiascodigo,
     'parroquia'=>$this->parroquia,
     'parroquiasCanton'=>$this->parroquiasCanton,
     'parroquiaOculto'=>$this->parroquiaOculto,
     'parroquiaAccion'=>$this->parroquiaAccion,
     'parroquiafecha'=>$this->parroquiafecha,
     'parroquiasUsuario'=>$this->parroquiasUsuario);
     return $myarray;
}
}
?>