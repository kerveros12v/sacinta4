<?php

namespace Clasesphp;

class Setecestadoscertificacion
{
    private $idsec;
    private $seccodigo;
    private $secdetalle;
    private $secOculto;
    private $secAccion;
    private $secFecha;
    private $secUser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idsec
     */
    public function getIdsec()
    {
        return $this->idsec;
    }

    /**
     * Set the value of idsec
     *
     * @return  self
     */
    public function setIdsec($idsec)
    {
        $this->idsec = $idsec;

        return $this;
    }

    /**
     * Get the value of seccodigo
     */
    public function getSeccodigo()
    {
        return $this->seccodigo;
    }

    /**
     * Set the value of seccodigo
     *
     * @return  self
     */
    public function setSeccodigo($seccodigo)
    {
        $this->seccodigo = $seccodigo;

        return $this;
    }

    /**
     * Get the value of secdetalle
     */
    public function getSecdetalle()
    {
        return $this->secdetalle;
    }

    /**
     * Set the value of secdetalle
     *
     * @return  self
     */
    public function setSecdetalle($secdetalle)
    {
        $this->secdetalle = $secdetalle;

        return $this;
    }

    /**
     * Get the value of secOculto
     */
    public function getSecOculto()
    {
        return $this->secOculto;
    }

    /**
     * Set the value of secOculto
     *
     * @return  self
     */
    public function setSecOculto($secOculto)
    {
        $this->secOculto = $secOculto;

        return $this;
    }

    /**
     * Get the value of secAccion
     */
    public function getSecAccion()
    {
        return $this->secAccion;
    }

    /**
     * Set the value of secAccion
     *
     * @return  self
     */
    public function setSecAccion($secAccion)
    {
        $this->secAccion = $secAccion;

        return $this;
    }

    /**
     * Get the value of secFecha
     */
    public function getSecFecha()
    {
        return $this->secFecha;
    }

    /**
     * Set the value of secFecha
     *
     * @return  self
     */
    public function setSecFecha($secFecha)
    {
        $this->secFecha = $secFecha;

        return $this;
    }

    /**
     * Get the value of secUser
     */
    public function getSecUser()
    {
        return $this->secUser;
    }

    /**
     * Set the value of secUser
     *
     * @return  self
     */
    public function setSecUser($secUser)
    {
        $this->secUser = $secUser;

        return $this;
    }
}
