<?php

namespace Clasesphp;

class Nummatriculas
{
    private $idnummatricula;
    private $nummatriculacodigo;
    private $nummatricula;
    private $nummatriculasOculto;
    private $nummatriculasAccion;
    private $nummatriculasfecha;
    private $nummatriculasuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idnummatricula
     */
    public function getIdnummatricula()
    {
        return $this->idnummatricula;
    }

    /**
     * Set the value of idnummatricula
     *
     * @return  self
     */
    public function setIdnummatricula($idnummatricula)
    {
        $this->idnummatricula = $idnummatricula;

        return $this;
    }

    /**
     * Get the value of nummatriculacodigo
     */
    public function getNummatriculacodigo()
    {
        return $this->nummatriculacodigo;
    }

    /**
     * Set the value of nummatriculacodigo
     *
     * @return  self
     */
    public function setNummatriculacodigo($nummatriculacodigo)
    {
        $this->nummatriculacodigo = $nummatriculacodigo;

        return $this;
    }

    /**
     * Get the value of nummatricula
     */
    public function getNummatricula()
    {
        return $this->nummatricula;
    }

    /**
     * Set the value of nummatricula
     *
     * @return  self
     */
    public function setNummatricula($nummatricula)
    {
        $this->nummatricula = $nummatricula;

        return $this;
    }

    /**
     * Get the value of nummatriculasOculto
     */
    public function getNummatriculasOculto()
    {
        return $this->nummatriculasOculto;
    }

    /**
     * Set the value of nummatriculasOculto
     *
     * @return  self
     */
    public function setNummatriculasOculto($nummatriculasOculto)
    {
        $this->nummatriculasOculto = $nummatriculasOculto;

        return $this;
    }

    /**
     * Get the value of nummatriculasAccion
     */
    public function getNummatriculasAccion()
    {
        return $this->nummatriculasAccion;
    }

    /**
     * Set the value of nummatriculasAccion
     *
     * @return  self
     */
    public function setNummatriculasAccion($nummatriculasAccion)
    {
        $this->nummatriculasAccion = $nummatriculasAccion;

        return $this;
    }

    /**
     * Get the value of nummatriculasfecha
     */
    public function getNummatriculasfecha()
    {
        return $this->nummatriculasfecha;
    }

    /**
     * Set the value of nummatriculasfecha
     *
     * @return  self
     */
    public function setNummatriculasfecha($nummatriculasfecha)
    {
        $this->nummatriculasfecha = $nummatriculasfecha;

        return $this;
    }

    /**
     * Get the value of nummatriculasuser
     */
    public function getNummatriculasuser()
    {
        return $this->nummatriculasuser;
    }

    /**
     * Set the value of nummatriculasuser
     *
     * @return  self
     */
    public function setNummatriculasuser($nummatriculasuser)
    {
        $this->nummatriculasuser = $nummatriculasuser;

        return $this;
    }
}
