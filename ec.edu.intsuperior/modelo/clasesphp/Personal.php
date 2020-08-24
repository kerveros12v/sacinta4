<?php

namespace Clasesphp;

class Personal
{
    private $periodoacademicoId;
    private $codigoPeriodo;
    private $periodoAcademico;
    private $cicloperiodoIdcicloperiodo;
    private $fechaInicio;
    private $duracionPeriodoAcademico;
    private $anioPeriodoAcademico;
    private $actual;
    private $periodoacademicoOculto;
    private $periodoacademicoAccion;
    private $periodoacademicofecha;
    private $periodoacademicouser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of periodoacademicoId
     */
    public function getPeriodoacademicoId()
    {
        return $this->periodoacademicoId;
    }

    /**
     * Set the value of periodoacademicoId
     *
     * @return  self
     */
    public function setPeriodoacademicoId($periodoacademicoId)
    {
        $this->periodoacademicoId = $periodoacademicoId;

        return $this;
    }

    /**
     * Get the value of codigoPeriodo
     */
    public function getCodigoPeriodo()
    {
        return $this->codigoPeriodo;
    }

    /**
     * Set the value of codigoPeriodo
     *
     * @return  self
     */
    public function setCodigoPeriodo($codigoPeriodo)
    {
        $this->codigoPeriodo = $codigoPeriodo;

        return $this;
    }

    /**
     * Get the value of periodoAcademico
     */
    public function getPeriodoAcademico()
    {
        return $this->periodoAcademico;
    }

    /**
     * Set the value of periodoAcademico
     *
     * @return  self
     */
    public function setPeriodoAcademico($periodoAcademico)
    {
        $this->periodoAcademico = $periodoAcademico;

        return $this;
    }

    /**
     * Get the value of cicloperiodoIdcicloperiodo
     */
    public function getCicloperiodoIdcicloperiodo()
    {
        return $this->cicloperiodoIdcicloperiodo;
    }

    /**
     * Set the value of cicloperiodoIdcicloperiodo
     *
     * @return  self
     */
    public function setCicloperiodoIdcicloperiodo($cicloperiodoIdcicloperiodo)
    {
        $this->cicloperiodoIdcicloperiodo = $cicloperiodoIdcicloperiodo;

        return $this;
    }

    /**
     * Get the value of fechaInicio
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set the value of fechaInicio
     *
     * @return  self
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get the value of duracionPeriodoAcademico
     */
    public function getDuracionPeriodoAcademico()
    {
        return $this->duracionPeriodoAcademico;
    }

    /**
     * Set the value of duracionPeriodoAcademico
     *
     * @return  self
     */
    public function setDuracionPeriodoAcademico($duracionPeriodoAcademico)
    {
        $this->duracionPeriodoAcademico = $duracionPeriodoAcademico;

        return $this;
    }

    /**
     * Get the value of anioPeriodoAcademico
     */
    public function getAnioPeriodoAcademico()
    {
        return $this->anioPeriodoAcademico;
    }

    /**
     * Set the value of anioPeriodoAcademico
     *
     * @return  self
     */
    public function setAnioPeriodoAcademico($anioPeriodoAcademico)
    {
        $this->anioPeriodoAcademico = $anioPeriodoAcademico;

        return $this;
    }

    /**
     * Get the value of actual
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Set the value of actual
     *
     * @return  self
     */
    public function setActual($actual)
    {
        $this->actual = $actual;

        return $this;
    }

    /**
     * Get the value of periodoacademicoOculto
     */
    public function getPeriodoacademicoOculto()
    {
        return $this->periodoacademicoOculto;
    }

    /**
     * Set the value of periodoacademicoOculto
     *
     * @return  self
     */
    public function setPeriodoacademicoOculto($periodoacademicoOculto)
    {
        $this->periodoacademicoOculto = $periodoacademicoOculto;

        return $this;
    }

    /**
     * Get the value of periodoacademicoAccion
     */
    public function getPeriodoacademicoAccion()
    {
        return $this->periodoacademicoAccion;
    }

    /**
     * Set the value of periodoacademicoAccion
     *
     * @return  self
     */
    public function setPeriodoacademicoAccion($periodoacademicoAccion)
    {
        $this->periodoacademicoAccion = $periodoacademicoAccion;

        return $this;
    }

    /**
     * Get the value of periodoacademicofecha
     */
    public function getPeriodoacademicofecha()
    {
        return $this->periodoacademicofecha;
    }

    /**
     * Set the value of periodoacademicofecha
     *
     * @return  self
     */
    public function setPeriodoacademicofecha($periodoacademicofecha)
    {
        $this->periodoacademicofecha = $periodoacademicofecha;

        return $this;
    }

    /**
     * Get the value of periodoacademicouser
     */
    public function getPeriodoacademicouser()
    {
        return $this->periodoacademicouser;
    }

    /**
     * Set the value of periodoacademicouser
     *
     * @return  self
     */
    public function setPeriodoacademicouser($periodoacademicouser)
    {
        $this->periodoacademicouser = $periodoacademicouser;

        return $this;
    }
}
