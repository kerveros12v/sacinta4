<?php

namespace Clasesphp;

class Nivelacademico
{
    private $nivelAcademicoQueCursaId;
    private $nivelacademicocodigo;
    private $nivelAcademicoQueCursa;
    private $nivelacademicoOculto;
    private $nivelacademicoAccion;
    private $nivelacademicofecha;
    private $nivelacademicouser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of nivelAcademicoQueCursaId
     */
    public function getNivelAcademicoQueCursaId()
    {
        return $this->nivelAcademicoQueCursaId;
    }

    /**
     * Set the value of nivelAcademicoQueCursaId
     *
     * @return  self
     */
    public function setNivelAcademicoQueCursaId($nivelAcademicoQueCursaId)
    {
        $this->nivelAcademicoQueCursaId = $nivelAcademicoQueCursaId;

        return $this;
    }

    /**
     * Get the value of nivelacademicocodigo
     */
    public function getNivelacademicocodigo()
    {
        return $this->nivelacademicocodigo;
    }

    /**
     * Set the value of nivelacademicocodigo
     *
     * @return  self
     */
    public function setNivelacademicocodigo($nivelacademicocodigo)
    {
        $this->nivelacademicocodigo = $nivelacademicocodigo;

        return $this;
    }

    /**
     * Get the value of nivelAcademicoQueCursa
     */
    public function getNivelAcademicoQueCursa()
    {
        return $this->nivelAcademicoQueCursa;
    }

    /**
     * Set the value of nivelAcademicoQueCursa
     *
     * @return  self
     */
    public function setNivelAcademicoQueCursa($nivelAcademicoQueCursa)
    {
        $this->nivelAcademicoQueCursa = $nivelAcademicoQueCursa;

        return $this;
    }

    /**
     * Get the value of nivelacademicoOculto
     */
    public function getNivelacademicoOculto()
    {
        return $this->nivelacademicoOculto;
    }

    /**
     * Set the value of nivelacademicoOculto
     *
     * @return  self
     */
    public function setNivelacademicoOculto($nivelacademicoOculto)
    {
        $this->nivelacademicoOculto = $nivelacademicoOculto;

        return $this;
    }

    /**
     * Get the value of nivelacademicoAccion
     */
    public function getNivelacademicoAccion()
    {
        return $this->nivelacademicoAccion;
    }

    /**
     * Set the value of nivelacademicoAccion
     *
     * @return  self
     */
    public function setNivelacademicoAccion($nivelacademicoAccion)
    {
        $this->nivelacademicoAccion = $nivelacademicoAccion;

        return $this;
    }

    /**
     * Get the value of nivelacademicofecha
     */
    public function getNivelacademicofecha()
    {
        return $this->nivelacademicofecha;
    }

    /**
     * Set the value of nivelacademicofecha
     *
     * @return  self
     */
    public function setNivelacademicofecha($nivelacademicofecha)
    {
        $this->nivelacademicofecha = $nivelacademicofecha;

        return $this;
    }

    /**
     * Get the value of nivelacademicouser
     */
    public function getNivelacademicouser()
    {
        return $this->nivelacademicouser;
    }

    /**
     * Set the value of nivelacademicouser
     *
     * @return  self
     */
    public function setNivelacademicouser($nivelacademicouser)
    {
        $this->nivelacademicouser = $nivelacademicouser;

        return $this;
    }
}
