<?php

namespace Clasesphp;

class SetecEstadoOcupacional
{
    private $setecEstadoOcupacionalId;
    private $setecestadoocupacionalcodigo;
    private $estadoOcupacional;
    private $seoOculto;
    private $seoAccion;
    private $seofecha;
    private $seouser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of setecEstadoOcupacionalId
     */
    public function getSetecEstadoOcupacionalId()
    {
        return $this->setecEstadoOcupacionalId;
    }

    /**
     * Set the value of setecEstadoOcupacionalId
     *
     * @return  self
     */
    public function setSetecEstadoOcupacionalId($setecEstadoOcupacionalId)
    {
        $this->setecEstadoOcupacionalId = $setecEstadoOcupacionalId;

        return $this;
    }

    /**
     * Get the value of setecestadoocupacionalcodigo
     */
    public function getSetecestadoocupacionalcodigo()
    {
        return $this->setecestadoocupacionalcodigo;
    }

    /**
     * Set the value of setecestadoocupacionalcodigo
     *
     * @return  self
     */
    public function setSetecestadoocupacionalcodigo($setecestadoocupacionalcodigo)
    {
        $this->setecestadoocupacionalcodigo = $setecestadoocupacionalcodigo;

        return $this;
    }

    /**
     * Get the value of estadoOcupacional
     */
    public function getEstadoOcupacional()
    {
        return $this->estadoOcupacional;
    }

    /**
     * Set the value of estadoOcupacional
     *
     * @return  self
     */
    public function setEstadoOcupacional($estadoOcupacional)
    {
        $this->estadoOcupacional = $estadoOcupacional;

        return $this;
    }

    /**
     * Get the value of seoOculto
     */
    public function getSeoOculto()
    {
        return $this->seoOculto;
    }

    /**
     * Set the value of seoOculto
     *
     * @return  self
     */
    public function setSeoOculto($seoOculto)
    {
        $this->seoOculto = $seoOculto;

        return $this;
    }

    /**
     * Get the value of seoAccion
     */
    public function getSeoAccion()
    {
        return $this->seoAccion;
    }

    /**
     * Set the value of seoAccion
     *
     * @return  self
     */
    public function setSeoAccion($seoAccion)
    {
        $this->seoAccion = $seoAccion;

        return $this;
    }

    /**
     * Get the value of seofecha
     */
    public function getSeofecha()
    {
        return $this->seofecha;
    }

    /**
     * Set the value of seofecha
     *
     * @return  self
     */
    public function setSeofecha($seofecha)
    {
        $this->seofecha = $seofecha;

        return $this;
    }

    /**
     * Get the value of seouser
     */
    public function getSeouser()
    {
        return $this->seouser;
    }

    /**
     * Set the value of seouser
     *
     * @return  self
     */
    public function setSeouser($seouser)
    {
        $this->seouser = $seouser;

        return $this;
    }
}
