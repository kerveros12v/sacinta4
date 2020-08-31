<?php

namespace Clasesphp;

class AccesoDepartamentos
{
    private $idaccesodepartamento;
    private $accesodepartamentocodigo;
    private $departamentos_iddepartamentos;
    private $tipousuario_idtipousuario;
    private $accesodepartamentoAccion;
    private $accesodepartamentoOculto;
    private $accesodepartamentoFecha;
    private $accesodepartamentoUser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }


    /**
     * Get the value of idaccesodepartamento
     */
    public function getIdaccesodepartamento()
    {
        return $this->idaccesodepartamento;
    }

    /**
     * Set the value of idaccesodepartamento
     *
     * @return  self
     */
    public function setIdaccesodepartamento($idaccesodepartamento)
    {
        $this->idaccesodepartamento = $idaccesodepartamento;

        return $this;
    }

    /**
     * Get the value of accesodepartamentocodigo
     */
    public function getAccesodepartamentocodigo()
    {
        return $this->accesodepartamentocodigo;
    }

    /**
     * Set the value of accesodepartamentocodigo
     *
     * @return  self
     */
    public function setAccesodepartamentocodigo($accesodepartamentocodigo)
    {
        $this->accesodepartamentocodigo = $accesodepartamentocodigo;

        return $this;
    }

    /**
     * Get the value of departamentos_iddepartamentos
     */
    public function getDepartamentos_iddepartamentos()
    {
        return $this->departamentos_iddepartamentos;
    }

    /**
     * Set the value of departamentos_iddepartamentos
     *
     * @return  self
     */
    public function setDepartamentos_iddepartamentos($departamentos_iddepartamentos)
    {
        $this->departamentos_iddepartamentos = $departamentos_iddepartamentos;

        return $this;
    }

    /**
     * Get the value of tipousuario_idtipousuario
     */
    public function getTipousuario_idtipousuario()
    {
        return $this->tipousuario_idtipousuario;
    }

    /**
     * Set the value of tipousuario_idtipousuario
     *
     * @return  self
     */
    public function setTipousuario_idtipousuario($tipousuario_idtipousuario)
    {
        $this->tipousuario_idtipousuario = $tipousuario_idtipousuario;

        return $this;
    }

    /**
     * Get the value of accesodepartamentoAccion
     */
    public function getAccesodepartamentoAccion()
    {
        return $this->accesodepartamentoAccion;
    }

    /**
     * Set the value of accesodepartamentoAccion
     *
     * @return  self
     */
    public function setAccesodepartamentoAccion($accesodepartamentoAccion)
    {
        $this->accesodepartamentoAccion = $accesodepartamentoAccion;

        return $this;
    }

    /**
     * Get the value of accesodepartamentoOculto
     */
    public function getAccesodepartamentoOculto()
    {
        return $this->accesodepartamentoOculto;
    }

    /**
     * Set the value of accesodepartamentoOculto
     *
     * @return  self
     */
    public function setAccesodepartamentoOculto($accesodepartamentoOculto)
    {
        $this->accesodepartamentoOculto = $accesodepartamentoOculto;

        return $this;
    }

    /**
     * Get the value of accesodepartamentoFecha
     */
    public function getAccesodepartamentoFecha()
    {
        return $this->accesodepartamentoFecha;
    }

    /**
     * Set the value of accesodepartamentoFecha
     *
     * @return  self
     */
    public function setAccesodepartamentoFecha($accesodepartamentoFecha)
    {
        $this->accesodepartamentoFecha = $accesodepartamentoFecha;

        return $this;
    }

    /**
     * Get the value of accesodepartamentoUser
     */
    public function getAccesodepartamentoUser()
    {
        return $this->accesodepartamentoUser;
    }

    /**
     * Set the value of accesodepartamentoUser
     *
     * @return  self
     */
    public function setAccesodepartamentoUser($accesodepartamentoUser)
    {
        $this->accesodepartamentoUser = $accesodepartamentoUser;

        return $this;
    }
}
