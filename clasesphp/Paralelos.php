<?php

namespace Clasesphp;

class Paralelos
{
    private $paraleloId;
    private $paralelocodigo;
    private $paralelo;
    private $paraleloOculto;
    private $paraleloAccion;
    private $paralelofecha;
    private $paralelouser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of paraleloId
     */
    public function getParaleloId()
    {
        return $this->paraleloId;
    }

    /**
     * Set the value of paraleloId
     *
     * @return  self
     */
    public function setParaleloId($paraleloId)
    {
        $this->paraleloId = $paraleloId;

        return $this;
    }

    /**
     * Get the value of paralelocodigo
     */
    public function getParalelocodigo()
    {
        return $this->paralelocodigo;
    }

    /**
     * Set the value of paralelocodigo
     *
     * @return  self
     */
    public function setParalelocodigo($paralelocodigo)
    {
        $this->paralelocodigo = $paralelocodigo;

        return $this;
    }

    /**
     * Get the value of paralelo
     */
    public function getParalelo()
    {
        return $this->paralelo;
    }

    /**
     * Set the value of paralelo
     *
     * @return  self
     */
    public function setParalelo($paralelo)
    {
        $this->paralelo = $paralelo;

        return $this;
    }

    /**
     * Get the value of paraleloOculto
     */
    public function getParaleloOculto()
    {
        return $this->paraleloOculto;
    }

    /**
     * Set the value of paraleloOculto
     *
     * @return  self
     */
    public function setParaleloOculto($paraleloOculto)
    {
        $this->paraleloOculto = $paraleloOculto;

        return $this;
    }

    /**
     * Get the value of paraleloAccion
     */
    public function getParaleloAccion()
    {
        return $this->paraleloAccion;
    }

    /**
     * Set the value of paraleloAccion
     *
     * @return  self
     */
    public function setParaleloAccion($paraleloAccion)
    {
        $this->paraleloAccion = $paraleloAccion;

        return $this;
    }

    /**
     * Get the value of paralelofecha
     */
    public function getParalelofecha()
    {
        return $this->paralelofecha;
    }

    /**
     * Set the value of paralelofecha
     *
     * @return  self
     */
    public function setParalelofecha($paralelofecha)
    {
        $this->paralelofecha = $paralelofecha;

        return $this;
    }

    /**
     * Get the value of paralelouser
     */
    public function getParalelouser()
    {
        return $this->paralelouser;
    }

    /**
     * Set the value of paralelouser
     *
     * @return  self
     */
    public function setParalelouser($paralelouser)
    {
        $this->paralelouser = $paralelouser;

        return $this;
    }
}
