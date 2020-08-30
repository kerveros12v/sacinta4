<?php

namespace Clasesphp;

class TipoUsuario
{
    private $idtipousuario;
    private $tipousuariocodigo;
    private $tipousuario;
    private $tipousuariopemisos;
    private $tipousuarioOculto;
    private $tipousuarioAccion;
    private $tipousuariofecha;
    private $tipousuariouser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idtipousuario
     */
    public function getIdtipousuario()
    {
        return $this->idtipousuario;
    }

    /**
     * Set the value of idtipousuario
     *
     * @return  self
     */
    public function setIdtipousuario($idtipousuario)
    {
        $this->idtipousuario = $idtipousuario;

        return $this;
    }

    /**
     * Get the value of tipousuariocodigo
     */
    public function getTipousuariocodigo()
    {
        return $this->tipousuariocodigo;
    }

    /**
     * Set the value of tipousuariocodigo
     *
     * @return  self
     */
    public function setTipousuariocodigo($tipousuariocodigo)
    {
        $this->tipousuariocodigo = $tipousuariocodigo;

        return $this;
    }

    /**
     * Get the value of tipousuario
     */
    public function getTipousuario()
    {
        return $this->tipousuario;
    }

    /**
     * Set the value of tipousuario
     *
     * @return  self
     */
    public function setTipousuario($tipousuario)
    {
        $this->tipousuario = $tipousuario;

        return $this;
    }

    /**
     * Get the value of tipousuariopemisos
     */
    public function getTipousuariopemisos()
    {
        return $this->tipousuariopemisos;
    }

    /**
     * Set the value of tipousuariopemisos
     *
     * @return  self
     */
    public function setTipousuariopemisos($tipousuariopemisos)
    {
        $this->tipousuariopemisos = $tipousuariopemisos;

        return $this;
    }

    /**
     * Get the value of tipousuarioOculto
     */
    public function getTipousuarioOculto()
    {
        return $this->tipousuarioOculto;
    }

    /**
     * Set the value of tipousuarioOculto
     *
     * @return  self
     */
    public function setTipousuarioOculto($tipousuarioOculto)
    {
        $this->tipousuarioOculto = $tipousuarioOculto;

        return $this;
    }

    /**
     * Get the value of tipousuarioAccion
     */
    public function getTipousuarioAccion()
    {
        return $this->tipousuarioAccion;
    }

    /**
     * Set the value of tipousuarioAccion
     *
     * @return  self
     */
    public function setTipousuarioAccion($tipousuarioAccion)
    {
        $this->tipousuarioAccion = $tipousuarioAccion;

        return $this;
    }

    /**
     * Get the value of tipousuariofecha
     */
    public function getTipousuariofecha()
    {
        return $this->tipousuariofecha;
    }

    /**
     * Set the value of tipousuariofecha
     *
     * @return  self
     */
    public function setTipousuariofecha($tipousuariofecha)
    {
        $this->tipousuariofecha = $tipousuariofecha;

        return $this;
    }

    /**
     * Get the value of tipousuariouser
     */
    public function getTipousuariouser()
    {
        return $this->tipousuariouser;
    }

    /**
     * Set the value of tipousuariouser
     *
     * @return  self
     */
    public function setTipousuariouser($tipousuariouser)
    {
        $this->tipousuariouser = $tipousuariouser;

        return $this;
    }
}
