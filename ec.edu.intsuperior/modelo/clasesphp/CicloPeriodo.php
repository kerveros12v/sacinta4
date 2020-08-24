<?php

namespace Clasesphp;

class CicloPeriodo
{
    private $idcicloperiodo;
    private $cicloperiodocodigo;
    private $ciclo;
    private $cicloperiodoOculto;
    private $cicloperiodoAccion;
    private $cicloperiodofecha;
    private $cicloperiodouser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idcicloperiodo
     */
    public function getIdcicloperiodo()
    {
        return $this->idcicloperiodo;
    }

    /**
     * Set the value of idcicloperiodo
     *
     * @return  self
     */
    public function setIdcicloperiodo($idcicloperiodo)
    {
        $this->idcicloperiodo = $idcicloperiodo;

        return $this;
    }

    /**
     * Get the value of cicloperiodocodigo
     */
    public function getCicloperiodocodigo()
    {
        return $this->cicloperiodocodigo;
    }

    /**
     * Set the value of cicloperiodocodigo
     *
     * @return  self
     */
    public function setCicloperiodocodigo($cicloperiodocodigo)
    {
        $this->cicloperiodocodigo = $cicloperiodocodigo;

        return $this;
    }

    /**
     * Get the value of ciclo
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }

    /**
     * Set the value of ciclo
     *
     * @return  self
     */
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;

        return $this;
    }

    /**
     * Get the value of cicloperiodoOculto
     */
    public function getCicloperiodoOculto()
    {
        return $this->cicloperiodoOculto;
    }

    /**
     * Set the value of cicloperiodoOculto
     *
     * @return  self
     */
    public function setCicloperiodoOculto($cicloperiodoOculto)
    {
        $this->cicloperiodoOculto = $cicloperiodoOculto;

        return $this;
    }

    /**
     * Get the value of cicloperiodoAccion
     */
    public function getCicloperiodoAccion()
    {
        return $this->cicloperiodoAccion;
    }

    /**
     * Set the value of cicloperiodoAccion
     *
     * @return  self
     */
    public function setCicloperiodoAccion($cicloperiodoAccion)
    {
        $this->cicloperiodoAccion = $cicloperiodoAccion;

        return $this;
    }

    /**
     * Get the value of cicloperiodofecha
     */
    public function getCicloperiodofecha()
    {
        return $this->cicloperiodofecha;
    }

    /**
     * Set the value of cicloperiodofecha
     *
     * @return  self
     */
    public function setCicloperiodofecha($cicloperiodofecha)
    {
        $this->cicloperiodofecha = $cicloperiodofecha;

        return $this;
    }

    /**
     * Get the value of cicloperiodouser
     */
    public function getCicloperiodouser()
    {
        return $this->cicloperiodouser;
    }

    /**
     * Set the value of cicloperiodouser
     *
     * @return  self
     */
    public function setCicloperiodouser($cicloperiodouser)
    {
        $this->cicloperiodouser = $cicloperiodouser;

        return $this;
    }
}
