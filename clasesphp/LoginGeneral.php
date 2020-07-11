<?php
namespace Clasesphp;

class LoginGeneral{
    private $idlogingeneral, $idcuenta, $logincorreo, $LoginGeneranumIndentificacion;
    public function __construct(){}
    public function set_idlogingeneral($idlogingeneral){$this->idlogingeneral=$idlogingeneral;}
    public function set_idcuenta($idcuenta){$this->idcuenta=$idcuenta;}
    public function set_logincorreo($logincorreo){$this->logincorreo=$logincorreo;}
    public function set_LoginGeneranumIndentificacion($LoginGeneranumIndentificacion){$this->LoginGeneranumIndentificacion=$LoginGeneranumIndentificacion;}
    public function get_idlogingeneral(){$this->idlogingeneral;}
    public function get_idcuenta(){$this->idcuenta;}
    public function get_logincorreo(){$this->logincorreo;}
    public function get_LoginGeneranumIndentificacion(){$this->LoginGeneranumIndentificacion;}
    public function formatoJSON(){
        $myarray=array(
            'idlogingeneral'=>$this->idlogingeneral,
            'idcuenta'=>$this->idcuenta,
            'logincorreo'=>$this->logincorreo,
            'LoginGeneranumIndentificacion'=>$this->LoginGeneranumIndentificacion
        );
        return json_encode($myarray);
    }
}
?>