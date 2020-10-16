<?php

namespace Clasesphp;

class SetecOcupacion
{

    private $setecOcupacionId;
    private $fkaspirantesetec;
    private $fktipoOcupacion;
    private $setecocupacionAsignada;
    private $fkestadoOcupacional;
    private $horasTrabajadasxSemana;
    private $fkareadepartamento;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of setecOcupacionId
     */
    public function getSetecOcupacionId()
    {
        return $this->setecOcupacionId;
    }

    /**
     * Set the value of setecOcupacionId
     *
     * @return  self
     */
    public function setSetecOcupacionId($setecOcupacionId)
    {
        $this->setecOcupacionId = $setecOcupacionId;

        return $this;
    }

    /**
     * Get the value of fkaspirantesetec
     */
    public function getFkaspirantesetec()
    {
        return $this->fkaspirantesetec;
    }

    /**
     * Set the value of fkaspirantesetec
     *
     * @return  self
     */
    public function setFkaspirantesetec($fkaspirantesetec)
    {
        $this->fkaspirantesetec = $fkaspirantesetec;

        return $this;
    }

    /**
     * Get the value of fktipoOcupacion
     */
    public function getFktipoOcupacion()
    {
        return $this->fktipoOcupacion;
    }

    /**
     * Set the value of fktipoOcupacion
     *
     * @return  self
     */
    public function setFktipoOcupacion($fktipoOcupacion)
    {
        $this->fktipoOcupacion = $fktipoOcupacion;

        return $this;
    }

    /**
     * Get the value of setecocupacionAsignada
     */
    public function getSetecocupacionAsignada()
    {
        return $this->setecocupacionAsignada;
    }

    /**
     * Set the value of setecocupacionAsignada
     *
     * @return  self
     */
    public function setSetecocupacionAsignada($setecocupacionAsignada)
    {
        $this->setecocupacionAsignada = $setecocupacionAsignada;

        return $this;
    }

    /**
     * Get the value of fkestadoOcupacional
     */
    public function getFkestadoOcupacional()
    {
        return $this->fkestadoOcupacional;
    }

    /**
     * Set the value of fkestadoOcupacional
     *
     * @return  self
     */
    public function setFkestadoOcupacional($fkestadoOcupacional)
    {
        $this->fkestadoOcupacional = $fkestadoOcupacional;

        return $this;
    }

    /**
     * Get the value of horasTrabajadasxSemana
     */
    public function getHorasTrabajadasxSemana()
    {
        return $this->horasTrabajadasxSemana;
    }

    /**
     * Set the value of horasTrabajadasxSemana
     *
     * @return  self
     */
    public function setHorasTrabajadasxSemana($horasTrabajadasxSemana)
    {
        $this->horasTrabajadasxSemana = $horasTrabajadasxSemana;

        return $this;
    }

    /**
     * Get the value of fkareadepartamento
     */
    public function getFkareadepartamento()
    {
        return $this->fkareadepartamento;
    }

    /**
     * Set the value of fkareadepartamento
     *
     * @return  self
     */
    public function setFkareadepartamento($fkareadepartamento)
    {
        $this->fkareadepartamento = $fkareadepartamento;

        return $this;
    }

    public function formatoJSON()
    {
        $myarray = array(
            'setecOcupacionId' => $this->setecOcupacionId,
            'fkaspirantesetec' => $this->fkaspirantesetec,
            'fktipoOcupacion' => $this->fktipoOcupacion,
            'setecocupacionAsignada' => $this->setecocupacionAsignada,
            'fkestadoOcupacional' => $this->fkestadoOcupacional,
            'horasTrabajadasxSemana' => $this->horasTrabajadasxSemana,
            'fkareadepartamento' => $this->fkareadepartamento
        );
        return json_encode($myarray);
    }
    public function formatoArray()
    {
        $myarray = array(
            'setecOcupacionId' => $this->setecOcupacionId,
            'fkaspirantesetec' => $this->fkaspirantesetec,
            'fktipoOcupacion' => $this->fktipoOcupacion,
            'setecocupacionAsignada' => $this->setecocupacionAsignada,
            'fkestadoOcupacional' => $this->fkestadoOcupacional,
            'horasTrabajadasxSemana' => $this->horasTrabajadasxSemana,
            'fkareadepartamento' => $this->fkareadepartamento
        );
        return ($myarray);
    }
}
