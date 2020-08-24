<?php

namespace Clasesphp;

class Practicaspreprofecionales
{
    private $practicasPreProfecionalesId;
    private $nroHorasPracticasPreprofesionalesPorPeriodo;
    private $entornoInstitucionalPracticasProfesionalesid;
    private $fksectorEconomicoid;
    private $practicaspreprofecionalesOculto;
    private $practicaspreprofecionalesAccion;
    private $practicaspreprofecionalesfecha;
    private $practicaspreprofecionalesuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of practicasPreProfecionalesId
     */
    public function getPracticasPreProfecionalesId()
    {
        return $this->practicasPreProfecionalesId;
    }

    /**
     * Set the value of practicasPreProfecionalesId
     *
     * @return  self
     */
    public function setPracticasPreProfecionalesId($practicasPreProfecionalesId)
    {
        $this->practicasPreProfecionalesId = $practicasPreProfecionalesId;

        return $this;
    }

    /**
     * Get the value of nroHorasPracticasPreprofesionalesPorPeriodo
     */
    public function getNroHorasPracticasPreprofesionalesPorPeriodo()
    {
        return $this->nroHorasPracticasPreprofesionalesPorPeriodo;
    }

    /**
     * Set the value of nroHorasPracticasPreprofesionalesPorPeriodo
     *
     * @return  self
     */
    public function setNroHorasPracticasPreprofesionalesPorPeriodo($nroHorasPracticasPreprofesionalesPorPeriodo)
    {
        $this->nroHorasPracticasPreprofesionalesPorPeriodo = $nroHorasPracticasPreprofesionalesPorPeriodo;

        return $this;
    }

    /**
     * Get the value of entornoInstitucionalPracticasProfesionalesid
     */
    public function getEntornoInstitucionalPracticasProfesionalesid()
    {
        return $this->entornoInstitucionalPracticasProfesionalesid;
    }

    /**
     * Set the value of entornoInstitucionalPracticasProfesionalesid
     *
     * @return  self
     */
    public function setEntornoInstitucionalPracticasProfesionalesid($entornoInstitucionalPracticasProfesionalesid)
    {
        $this->entornoInstitucionalPracticasProfesionalesid = $entornoInstitucionalPracticasProfesionalesid;

        return $this;
    }

    /**
     * Get the value of fksectorEconomicoid
     */
    public function getFksectorEconomicoid()
    {
        return $this->fksectorEconomicoid;
    }

    /**
     * Set the value of fksectorEconomicoid
     *
     * @return  self
     */
    public function setFksectorEconomicoid($fksectorEconomicoid)
    {
        $this->fksectorEconomicoid = $fksectorEconomicoid;

        return $this;
    }

    /**
     * Get the value of practicaspreprofecionalesOculto
     */
    public function getPracticaspreprofecionalesOculto()
    {
        return $this->practicaspreprofecionalesOculto;
    }

    /**
     * Set the value of practicaspreprofecionalesOculto
     *
     * @return  self
     */
    public function setPracticaspreprofecionalesOculto($practicaspreprofecionalesOculto)
    {
        $this->practicaspreprofecionalesOculto = $practicaspreprofecionalesOculto;

        return $this;
    }

    /**
     * Get the value of practicaspreprofecionalesAccion
     */
    public function getPracticaspreprofecionalesAccion()
    {
        return $this->practicaspreprofecionalesAccion;
    }

    /**
     * Set the value of practicaspreprofecionalesAccion
     *
     * @return  self
     */
    public function setPracticaspreprofecionalesAccion($practicaspreprofecionalesAccion)
    {
        $this->practicaspreprofecionalesAccion = $practicaspreprofecionalesAccion;

        return $this;
    }

    /**
     * Get the value of practicaspreprofecionalesfecha
     */
    public function getPracticaspreprofecionalesfecha()
    {
        return $this->practicaspreprofecionalesfecha;
    }

    /**
     * Set the value of practicaspreprofecionalesfecha
     *
     * @return  self
     */
    public function setPracticaspreprofecionalesfecha($practicaspreprofecionalesfecha)
    {
        $this->practicaspreprofecionalesfecha = $practicaspreprofecionalesfecha;

        return $this;
    }

    /**
     * Get the value of practicaspreprofecionalesuser
     */
    public function getPracticaspreprofecionalesuser()
    {
        return $this->practicaspreprofecionalesuser;
    }

    /**
     * Set the value of practicaspreprofecionalesuser
     *
     * @return  self
     */
    public function setPracticaspreprofecionalesuser($practicaspreprofecionalesuser)
    {
        $this->practicaspreprofecionalesuser = $practicaspreprofecionalesuser;

        return $this;
    }
}
