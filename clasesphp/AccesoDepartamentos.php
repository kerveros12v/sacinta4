<?php

namespace Clasesphp;

class AccesoDepartamentos
{
    private $accesodepartamentoAccion, $accesodepartamentoOculto, $accesodepartamentoFecha, $accesodepartamentoUser;
    private $idaccesodepartamento, $accesodepartamentocodigo, $departamentos_iddepartamentos, $tipousuario_idtipousuario;
    public function __construct()
    {
    }
    public function set_idaccesodepartamento($idaccesodepartamento)
    {
        $this->idaccesodepartamento = $idaccesodepartamento;
    }
    public function set_accesodepartamentoAccion($accesodepartamentoAccion)
    {
        $this->accesodepartamentoAccion = $accesodepartamentoAccion;
    }
    public function set_accesodepartamentocodigo($accesodepartamentocodigo)
    {
        $this->accesodepartamentocodigo = $accesodepartamentocodigo;
    }
    public function set_departamentos_iddepartamentos($departamentos_iddepartamentos)
    {
        $this->departamentos_iddepartamentos = $departamentos_iddepartamentos;
    }
    public function set_tipousuario_idtipousuario($tipousuario_idtipousuario)
    {
        $this->tipousuario_idtipousuario = $tipousuario_idtipousuario;
    }
    public function set_accesodepartamentoOculto($accesodepartamentoOculto)
    {
        $this->accesodepartamentoOculto = $accesodepartamentoOculto;
    }
    public function set_accesodepartamentoFecha($accesodepartamentoFecha)
    {
        $this->accesodepartamentoFecha = $accesodepartamentoFecha;
    }
    public function set_accesodepartamentoUser($accesodepartamentoUser)
    {
        $this->accesodepartamentoUser = $accesodepartamentoUser;
    }
    public function get_idaccesodepartamento()
    {
        return $this->idaccesodepartamento;
    }
    public function get_accesodepartamentoAccion()
    {
        return $this->accesodepartamentoAccion;
    }
    public function get_accesodepartamentocodigo()
    {
        return $this->accesodepartamentocodigo;
    }
    public function get_departamentos_iddepartamentos()
    {
        return $this->departamentos_iddepartamentos;
    }
    public function get_tipousuario_idtipousuario()
    {
        return $this->tipousuario_idtipousuario;
    }
    public function get_accesodepartamentoOculto()
    {
        return $this->accesodepartamentoOculto;
    }
    public function get_accesodepartamentoFecha()
    {
        return $this->accesodepartamentoFecha;
    }
    public function get_accesodepartamentoUser()
    {
        return $this->accesodepartamentoUser;
    }
}
