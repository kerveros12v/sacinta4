<?php

namespace Clasesphp;

class Residenciaestudiantes
{
    private $residenciaEstudiantesId;
    private $fknumeroIdentificacion;
    private $direccionDomiciliariaResidencia;
    private $codigoPostal;
    private $fkperiodo;
    private $residenciaestudiantesOculto;
    private $residenciaestudiantesAccion;
    private $residenciaestudiantesfecha;
    private $residenciaestudiantesuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }


    /**
     * Get the value of residenciaEstudiantesId
     */
    public function getResidenciaEstudiantesId()
    {
        return $this->residenciaEstudiantesId;
    }

    /**
     * Set the value of residenciaEstudiantesId
     *
     * @return  self
     */
    public function setResidenciaEstudiantesId($residenciaEstudiantesId)
    {
        $this->residenciaEstudiantesId = $residenciaEstudiantesId;

        return $this;
    }

    /**
     * Get the value of fknumeroIdentificacion
     */
    public function getFknumeroIdentificacion()
    {
        return $this->fknumeroIdentificacion;
    }

    /**
     * Set the value of fknumeroIdentificacion
     *
     * @return  self
     */
    public function setFknumeroIdentificacion($fknumeroIdentificacion)
    {
        $this->fknumeroIdentificacion = $fknumeroIdentificacion;

        return $this;
    }

    /**
     * Get the value of direccionDomiciliariaResidencia
     */
    public function getDireccionDomiciliariaResidencia()
    {
        return $this->direccionDomiciliariaResidencia;
    }

    /**
     * Set the value of direccionDomiciliariaResidencia
     *
     * @return  self
     */
    public function setDireccionDomiciliariaResidencia($direccionDomiciliariaResidencia)
    {
        $this->direccionDomiciliariaResidencia = $direccionDomiciliariaResidencia;

        return $this;
    }

    /**
     * Get the value of codigoPostal
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set the value of codigoPostal
     *
     * @return  self
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get the value of fkperiodo
     */
    public function getFkperiodo()
    {
        return $this->fkperiodo;
    }

    /**
     * Set the value of fkperiodo
     *
     * @return  self
     */
    public function setFkperiodo($fkperiodo)
    {
        $this->fkperiodo = $fkperiodo;

        return $this;
    }

    /**
     * Get the value of residenciaestudiantesOculto
     */
    public function getResidenciaestudiantesOculto()
    {
        return $this->residenciaestudiantesOculto;
    }

    /**
     * Set the value of residenciaestudiantesOculto
     *
     * @return  self
     */
    public function setResidenciaestudiantesOculto($residenciaestudiantesOculto)
    {
        $this->residenciaestudiantesOculto = $residenciaestudiantesOculto;

        return $this;
    }

    /**
     * Get the value of residenciaestudiantesAccion
     */
    public function getResidenciaestudiantesAccion()
    {
        return $this->residenciaestudiantesAccion;
    }

    /**
     * Set the value of residenciaestudiantesAccion
     *
     * @return  self
     */
    public function setResidenciaestudiantesAccion($residenciaestudiantesAccion)
    {
        $this->residenciaestudiantesAccion = $residenciaestudiantesAccion;

        return $this;
    }

    /**
     * Get the value of residenciaestudiantesfecha
     */
    public function getResidenciaestudiantesfecha()
    {
        return $this->residenciaestudiantesfecha;
    }

    /**
     * Set the value of residenciaestudiantesfecha
     *
     * @return  self
     */
    public function setResidenciaestudiantesfecha($residenciaestudiantesfecha)
    {
        $this->residenciaestudiantesfecha = $residenciaestudiantesfecha;

        return $this;
    }

    /**
     * Get the value of residenciaestudiantesuser
     */
    public function getResidenciaestudiantesuser()
    {
        return $this->residenciaestudiantesuser;
    }

    /**
     * Set the value of residenciaestudiantesuser
     *
     * @return  self
     */
    public function setResidenciaestudiantesuser($residenciaestudiantesuser)
    {
        $this->residenciaestudiantesuser = $residenciaestudiantesuser;

        return $this;
    }
}
