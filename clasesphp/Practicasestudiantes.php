<?php

namespace Clasesphp;

class Practicasestudiantes
{
    private $practicasEstudiantesId;
    private $estudiantesNumeroIdentificacion;
    private $fkPracticasPreProfecionalesId;
    private $fkhaRealizadoPracticasPreprofesionalesid;
    private $nombreDeLaActividad;
    private $objetivoDeLaActividad;
    private $periodoAcademicoPeriodoacademicoId;
    private $empresasEmpresasId;
    private $representanteLega;
    private $practicasestudiantesOculto;
    private $practicasestudiantesAccion;
    private $practicasestudiantesfecha;
    private $practicasestudiantesuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of practicasEstudiantesId
     */
    public function getPracticasEstudiantesId()
    {
        return $this->practicasEstudiantesId;
    }

    /**
     * Set the value of practicasEstudiantesId
     *
     * @return  self
     */
    public function setPracticasEstudiantesId($practicasEstudiantesId)
    {
        $this->practicasEstudiantesId = $practicasEstudiantesId;

        return $this;
    }

    /**
     * Get the value of estudiantesNumeroIdentificacion
     */
    public function getEstudiantesNumeroIdentificacion()
    {
        return $this->estudiantesNumeroIdentificacion;
    }

    /**
     * Set the value of estudiantesNumeroIdentificacion
     *
     * @return  self
     */
    public function setEstudiantesNumeroIdentificacion($estudiantesNumeroIdentificacion)
    {
        $this->estudiantesNumeroIdentificacion = $estudiantesNumeroIdentificacion;

        return $this;
    }

    /**
     * Get the value of fkPracticasPreProfecionalesId
     */
    public function getFkPracticasPreProfecionalesId()
    {
        return $this->fkPracticasPreProfecionalesId;
    }

    /**
     * Set the value of fkPracticasPreProfecionalesId
     *
     * @return  self
     */
    public function setFkPracticasPreProfecionalesId($fkPracticasPreProfecionalesId)
    {
        $this->fkPracticasPreProfecionalesId = $fkPracticasPreProfecionalesId;

        return $this;
    }

    /**
     * Get the value of fkhaRealizadoPracticasPreprofesionalesid
     */
    public function getFkhaRealizadoPracticasPreprofesionalesid()
    {
        return $this->fkhaRealizadoPracticasPreprofesionalesid;
    }

    /**
     * Set the value of fkhaRealizadoPracticasPreprofesionalesid
     *
     * @return  self
     */
    public function setFkhaRealizadoPracticasPreprofesionalesid($fkhaRealizadoPracticasPreprofesionalesid)
    {
        $this->fkhaRealizadoPracticasPreprofesionalesid = $fkhaRealizadoPracticasPreprofesionalesid;

        return $this;
    }

    /**
     * Get the value of nombreDeLaActividad
     */
    public function getNombreDeLaActividad()
    {
        return $this->nombreDeLaActividad;
    }

    /**
     * Set the value of nombreDeLaActividad
     *
     * @return  self
     */
    public function setNombreDeLaActividad($nombreDeLaActividad)
    {
        $this->nombreDeLaActividad = $nombreDeLaActividad;

        return $this;
    }

    /**
     * Get the value of objetivoDeLaActividad
     */
    public function getObjetivoDeLaActividad()
    {
        return $this->objetivoDeLaActividad;
    }

    /**
     * Set the value of objetivoDeLaActividad
     *
     * @return  self
     */
    public function setObjetivoDeLaActividad($objetivoDeLaActividad)
    {
        $this->objetivoDeLaActividad = $objetivoDeLaActividad;

        return $this;
    }

    /**
     * Get the value of periodoAcademicoPeriodoacademicoId
     */
    public function getPeriodoAcademicoPeriodoacademicoId()
    {
        return $this->periodoAcademicoPeriodoacademicoId;
    }

    /**
     * Set the value of periodoAcademicoPeriodoacademicoId
     *
     * @return  self
     */
    public function setPeriodoAcademicoPeriodoacademicoId($periodoAcademicoPeriodoacademicoId)
    {
        $this->periodoAcademicoPeriodoacademicoId = $periodoAcademicoPeriodoacademicoId;

        return $this;
    }

    /**
     * Get the value of empresasEmpresasId
     */
    public function getEmpresasEmpresasId()
    {
        return $this->empresasEmpresasId;
    }

    /**
     * Set the value of empresasEmpresasId
     *
     * @return  self
     */
    public function setEmpresasEmpresasId($empresasEmpresasId)
    {
        $this->empresasEmpresasId = $empresasEmpresasId;

        return $this;
    }

    /**
     * Get the value of representanteLega
     */
    public function getRepresentanteLega()
    {
        return $this->representanteLega;
    }

    /**
     * Set the value of representanteLega
     *
     * @return  self
     */
    public function setRepresentanteLega($representanteLega)
    {
        $this->representanteLega = $representanteLega;

        return $this;
    }

    /**
     * Get the value of practicasestudiantesOculto
     */
    public function getPracticasestudiantesOculto()
    {
        return $this->practicasestudiantesOculto;
    }

    /**
     * Set the value of practicasestudiantesOculto
     *
     * @return  self
     */
    public function setPracticasestudiantesOculto($practicasestudiantesOculto)
    {
        $this->practicasestudiantesOculto = $practicasestudiantesOculto;

        return $this;
    }

    /**
     * Get the value of practicasestudiantesAccion
     */
    public function getPracticasestudiantesAccion()
    {
        return $this->practicasestudiantesAccion;
    }

    /**
     * Set the value of practicasestudiantesAccion
     *
     * @return  self
     */
    public function setPracticasestudiantesAccion($practicasestudiantesAccion)
    {
        $this->practicasestudiantesAccion = $practicasestudiantesAccion;

        return $this;
    }

    /**
     * Get the value of practicasestudiantesfecha
     */
    public function getPracticasestudiantesfecha()
    {
        return $this->practicasestudiantesfecha;
    }

    /**
     * Set the value of practicasestudiantesfecha
     *
     * @return  self
     */
    public function setPracticasestudiantesfecha($practicasestudiantesfecha)
    {
        $this->practicasestudiantesfecha = $practicasestudiantesfecha;

        return $this;
    }

    /**
     * Get the value of practicasestudiantesuser
     */
    public function getPracticasestudiantesuser()
    {
        return $this->practicasestudiantesuser;
    }

    /**
     * Set the value of practicasestudiantesuser
     *
     * @return  self
     */
    public function setPracticasestudiantesuser($practicasestudiantesuser)
    {
        $this->practicasestudiantesuser = $practicasestudiantesuser;

        return $this;
    }
}
