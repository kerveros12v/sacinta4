<?php

namespace Clasesphp;

class SetecCondicionVida
{
    private $idSetecCondiciondeVida;
    private $setecCondiciondeVidaCedula;
    private $setecCondiciondeVidaFecha;
    private $setecjefehogar;
    private $setecseguromedico;
    private $setecnumhijos;
    private $setechijomayor;
    private $setecAsistenciaInstitucion;
    private $setecvivienda;
    private $setecMienbrosHogar;
    private $setecLuz;
    private $setecAgua;
    private $setecInternet;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idSetecCondiciondeVida
     */
    public function getIdSetecCondiciondeVida()
    {
        return $this->idSetecCondiciondeVida;
    }

    /**
     * Set the value of idSetecCondiciondeVida
     *
     * @return  self
     */
    public function setIdSetecCondiciondeVida($idSetecCondiciondeVida)
    {
        $this->idSetecCondiciondeVida = $idSetecCondiciondeVida;

        return $this;
    }

    /**
     * Get the value of setecCondiciondeVidaCedula
     */
    public function getSetecCondiciondeVidaCedula()
    {
        return $this->setecCondiciondeVidaCedula;
    }

    /**
     * Set the value of setecCondiciondeVidaCedula
     *
     * @return  self
     */
    public function setSetecCondiciondeVidaCedula($setecCondiciondeVidaCedula)
    {
        $this->setecCondiciondeVidaCedula = $setecCondiciondeVidaCedula;

        return $this;
    }

    /**
     * Get the value of setecCondiciondeVidaFecha
     */
    public function getSetecCondiciondeVidaFecha()
    {
        return $this->setecCondiciondeVidaFecha;
    }

    /**
     * Set the value of setecCondiciondeVidaFecha
     *
     * @return  self
     */
    public function setSetecCondiciondeVidaFecha($setecCondiciondeVidaFecha)
    {
        $this->setecCondiciondeVidaFecha = $setecCondiciondeVidaFecha;

        return $this;
    }

    /**
     * Get the value of setecjefehogar
     */
    public function getSetecjefehogar()
    {
        return $this->setecjefehogar;
    }

    /**
     * Set the value of setecjefehogar
     *
     * @return  self
     */
    public function setSetecjefehogar($setecjefehogar)
    {
        $this->setecjefehogar = $setecjefehogar;

        return $this;
    }

    /**
     * Get the value of setecseguromedico
     */
    public function getSetecseguromedico()
    {
        return $this->setecseguromedico;
    }

    /**
     * Set the value of setecseguromedico
     *
     * @return  self
     */
    public function setSetecseguromedico($setecseguromedico)
    {
        $this->setecseguromedico = $setecseguromedico;

        return $this;
    }

    /**
     * Get the value of setecnumhijos
     */
    public function getSetecnumhijos()
    {
        return $this->setecnumhijos;
    }

    /**
     * Set the value of setecnumhijos
     *
     * @return  self
     */
    public function setSetecnumhijos($setecnumhijos)
    {
        $this->setecnumhijos = $setecnumhijos;

        return $this;
    }

    /**
     * Get the value of setechijomayor
     */
    public function getSetechijomayor()
    {
        return $this->setechijomayor;
    }

    /**
     * Set the value of setechijomayor
     *
     * @return  self
     */
    public function setSetechijomayor($setechijomayor)
    {
        $this->setechijomayor = $setechijomayor;

        return $this;
    }

    /**
     * Get the value of setecAsistenciaInstitucion
     */
    public function getSetecAsistenciaInstitucion()
    {
        return $this->setecAsistenciaInstitucion;
    }

    /**
     * Set the value of setecAsistenciaInstitucion
     *
     * @return  self
     */
    public function setSetecAsistenciaInstitucion($setecAsistenciaInstitucion)
    {
        $this->setecAsistenciaInstitucion = $setecAsistenciaInstitucion;

        return $this;
    }

    /**
     * Get the value of setecvivienda
     */
    public function getSetecvivienda()
    {
        return $this->setecvivienda;
    }

    /**
     * Set the value of setecvivienda
     *
     * @return  self
     */
    public function setSetecvivienda($setecvivienda)
    {
        $this->setecvivienda = $setecvivienda;

        return $this;
    }

    /**
     * Get the value of setecMienbrosHogar
     */
    public function getSetecMienbrosHogar()
    {
        return $this->setecMienbrosHogar;
    }

    /**
     * Set the value of setecMienbrosHogar
     *
     * @return  self
     */
    public function setSetecMienbrosHogar($setecMienbrosHogar)
    {
        $this->setecMienbrosHogar = $setecMienbrosHogar;

        return $this;
    }

    /**
     * Get the value of setecLuz
     */
    public function getSetecLuz()
    {
        return $this->setecLuz;
    }

    /**
     * Set the value of setecLuz
     *
     * @return  self
     */
    public function setSetecLuz($setecLuz)
    {
        $this->setecLuz = $setecLuz;

        return $this;
    }

    /**
     * Get the value of setecAgua
     */
    public function getSetecAgua()
    {
        return $this->setecAgua;
    }

    /**
     * Set the value of setecAgua
     *
     * @return  self
     */
    public function setSetecAgua($setecAgua)
    {
        $this->setecAgua = $setecAgua;

        return $this;
    }

    /**
     * Get the value of setecInternet
     */
    public function getSetecInternet()
    {
        return $this->setecInternet;
    }

    /**
     * Set the value of setecInternet
     *
     * @return  self
     */
    public function setSetecInternet($setecInternet)
    {
        $this->setecInternet = $setecInternet;

        return $this;
    }
    public function formatoArray()
    {
        $myarray = array(
            'idSetecCondiciondeVida' => $this->idSetecCondiciondeVida,
            'setecCondiciondeVidaCedula' => $this->setecCondiciondeVidaCedula,
            'setecCondiciondeVidaFecha' => $this->setecCondiciondeVidaFecha,
            'setecjefehogar' => $this->setecjefehogar,
            'setecseguromedico' => $this->setecseguromedico,
            'setecnumhijos' => $this->setecnumhijos,
            'setechijomayor' => $this->setechijomayor,
            'setecAsistenciaInstitucion' => $this->setecAsistenciaInstitucion,
            'setecvivienda' => $this->setecvivienda,
            'setecMienbrosHogar' => $this->setecMienbrosHogar,
            'setecLuz' => $this->setecLuz,
            'setecAgua' => $this->setecAgua,
            'setecInternet' => $this->setecInternet
        );
        return $myarray;
    }
    public function formatoJSON()
    {
        $myarray = array(
            'idSetecCondiciondeVida' => $this->idSetecCondiciondeVida,
            'setecCondiciondeVidaCedula' => $this->setecCondiciondeVidaCedula,
            'setecCondiciondeVidaFecha' => $this->setecCondiciondeVidaFecha,
            'setecjefehogar' => $this->setecjefehogar,
            'setecseguromedico' => $this->setecseguromedico,
            'setecnumhijos' => $this->setecnumhijos,
            'setechijomayor' => $this->setechijomayor,
            'setecAsistenciaInstitucion' => $this->setecAsistenciaInstitucion,
            'setecvivienda' => $this->setecvivienda,
            'setecMienbrosHogar' => $this->setecMienbrosHogar,
            'setecLuz' => $this->setecLuz,
            'setecAgua' => $this->setecAgua,
            'setecInternet' => $this->setecInternet
        );
        return json_encode($myarray);
    }
}
