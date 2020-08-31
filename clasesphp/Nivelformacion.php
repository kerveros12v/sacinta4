<?php

namespace Clasesphp;

class Nivelformacion
{
    private $nivelFormacionId;
    private $codigonivelFormacion;
    private $nivelFormacion;
    private $nivelInstruccion;
    private $nivelformacionOculto;
    private $nivelformacionAccion;
    private $nivelformacionfecha;
    private $nivelformacionuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of nivelFormacionId
     */
    public function getNivelFormacionId()
    {
        return $this->nivelFormacionId;
    }

    /**
     * Set the value of nivelFormacionId
     *
     * @return  self
     */
    public function setNivelFormacionId($nivelFormacionId)
    {
        $this->nivelFormacionId = $nivelFormacionId;

        return $this;
    }

    /**
     * Get the value of codigonivelFormacion
     */
    public function getCodigonivelFormacion()
    {
        return $this->codigonivelFormacion;
    }

    /**
     * Set the value of codigonivelFormacion
     *
     * @return  self
     */
    public function setCodigonivelFormacion($codigonivelFormacion)
    {
        $this->codigonivelFormacion = $codigonivelFormacion;

        return $this;
    }

    /**
     * Get the value of nivelFormacion
     */
    public function getNivelFormacion()
    {
        return $this->nivelFormacion;
    }

    /**
     * Set the value of nivelFormacion
     *
     * @return  self
     */
    public function setNivelFormacion($nivelFormacion)
    {
        $this->nivelFormacion = $nivelFormacion;

        return $this;
    }

    /**
     * Get the value of nivelInstruccion
     */
    public function getNivelInstruccion()
    {
        return $this->nivelInstruccion;
    }

    /**
     * Set the value of nivelInstruccion
     *
     * @return  self
     */
    public function setNivelInstruccion($nivelInstruccion)
    {
        $this->nivelInstruccion = $nivelInstruccion;

        return $this;
    }

    /**
     * Get the value of nivelformacionOculto
     */
    public function getNivelformacionOculto()
    {
        return $this->nivelformacionOculto;
    }

    /**
     * Set the value of nivelformacionOculto
     *
     * @return  self
     */
    public function setNivelformacionOculto($nivelformacionOculto)
    {
        $this->nivelformacionOculto = $nivelformacionOculto;

        return $this;
    }

    /**
     * Get the value of nivelformacionAccion
     */
    public function getNivelformacionAccion()
    {
        return $this->nivelformacionAccion;
    }

    /**
     * Set the value of nivelformacionAccion
     *
     * @return  self
     */
    public function setNivelformacionAccion($nivelformacionAccion)
    {
        $this->nivelformacionAccion = $nivelformacionAccion;

        return $this;
    }

    /**
     * Get the value of nivelformacionfecha
     */
    public function getNivelformacionfecha()
    {
        return $this->nivelformacionfecha;
    }

    /**
     * Set the value of nivelformacionfecha
     *
     * @return  self
     */
    public function setNivelformacionfecha($nivelformacionfecha)
    {
        $this->nivelformacionfecha = $nivelformacionfecha;

        return $this;
    }

    /**
     * Get the value of nivelformacionuser
     */
    public function getNivelformacionuser()
    {
        return $this->nivelformacionuser;
    }

    /**
     * Set the value of nivelformacionuser
     *
     * @return  self
     */
    public function setNivelformacionuser($nivelformacionuser)
    {
        $this->nivelformacionuser = $nivelformacionuser;

        return $this;
    }
}
