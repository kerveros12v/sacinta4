<?php

namespace Clasesphp;

class Setec
{

    private $idsetec;
    private $setecAspiranteNumeroidentificacionsetec;
    private $fksetecEncuestador;
    private $setecCertificacionIdsetecCertificacion;
    private $setecfkcondiciondevida;
    private $setecfkcondicionlaboral;
    private $fksecestadocertificacion;
    private $setecOculto;
    private $setecAccion;
    private $setecfecha;
    private $setecuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idsetec
     */
    public function getIdsetec()
    {
        return $this->idsetec;
    }

    /**
     * Set the value of idsetec
     *
     * @return  self
     */
    public function setIdsetec($idsetec)
    {
        $this->idsetec = $idsetec;

        return $this;
    }

    /**
     * Get the value of setecAspiranteNumeroidentificacionsetec
     */
    public function getSetecAspiranteNumeroidentificacionsetec()
    {
        return $this->setecAspiranteNumeroidentificacionsetec;
    }

    /**
     * Set the value of setecAspiranteNumeroidentificacionsetec
     *
     * @return  self
     */
    public function setSetecAspiranteNumeroidentificacionsetec($setecAspiranteNumeroidentificacionsetec)
    {
        $this->setecAspiranteNumeroidentificacionsetec = $setecAspiranteNumeroidentificacionsetec;

        return $this;
    }

    /**
     * Get the value of fksetecEncuestador
     */
    public function getFksetecEncuestador()
    {
        return $this->fksetecEncuestador;
    }

    /**
     * Set the value of fksetecEncuestador
     *
     * @return  self
     */
    public function setFksetecEncuestador($fksetecEncuestador)
    {
        $this->fksetecEncuestador = $fksetecEncuestador;

        return $this;
    }

    /**
     * Get the value of setecCertificacionIdsetecCertificacion
     */
    public function getSetecCertificacionIdsetecCertificacion()
    {
        return $this->setecCertificacionIdsetecCertificacion;
    }

    /**
     * Set the value of setecCertificacionIdsetecCertificacion
     *
     * @return  self
     */
    public function setSetecCertificacionIdsetecCertificacion($setecCertificacionIdsetecCertificacion)
    {
        $this->setecCertificacionIdsetecCertificacion = $setecCertificacionIdsetecCertificacion;

        return $this;
    }

    /**
     * Get the value of setecfkcondiciondevida
     */
    public function getSetecfkcondiciondevida()
    {
        return $this->setecfkcondiciondevida;
    }

    /**
     * Set the value of setecfkcondiciondevida
     *
     * @return  self
     */
    public function setSetecfkcondiciondevida($setecfkcondiciondevida)
    {
        $this->setecfkcondiciondevida = $setecfkcondiciondevida;

        return $this;
    }

    /**
     * Get the value of setecfkcondicionlaboral
     */
    public function getSetecfkcondicionlaboral()
    {
        return $this->setecfkcondicionlaboral;
    }

    /**
     * Set the value of setecfkcondicionlaboral
     *
     * @return  self
     */
    public function setSetecfkcondicionlaboral($setecfkcondicionlaboral)
    {
        $this->setecfkcondicionlaboral = $setecfkcondicionlaboral;

        return $this;
    }

    /**
     * Get the value of fksecestadocertificacion
     */
    public function getFksecestadocertificacion()
    {
        return $this->fksecestadocertificacion;
    }

    /**
     * Set the value of fksecestadocertificacion
     *
     * @return  self
     */
    public function setFksecestadocertificacion($fksecestadocertificacion)
    {
        $this->fksecestadocertificacion = $fksecestadocertificacion;

        return $this;
    }

    /**
     * Get the value of setecOculto
     */
    public function getSetecOculto()
    {
        return $this->setecOculto;
    }

    /**
     * Set the value of setecOculto
     *
     * @return  self
     */
    public function setSetecOculto($setecOculto)
    {
        $this->setecOculto = $setecOculto;

        return $this;
    }

    /**
     * Get the value of setecAccion
     */
    public function getSetecAccion()
    {
        return $this->setecAccion;
    }

    /**
     * Set the value of setecAccion
     *
     * @return  self
     */
    public function setSetecAccion($setecAccion)
    {
        $this->setecAccion = $setecAccion;

        return $this;
    }

    /**
     * Get the value of setecfecha
     */
    public function getSetecfecha()
    {
        return $this->setecfecha;
    }

    /**
     * Set the value of setecfecha
     *
     * @return  self
     */
    public function setSetecfecha($setecfecha)
    {
        $this->setecfecha = $setecfecha;

        return $this;
    }

    /**
     * Get the value of setecuser
     */
    public function getSetecuser()
    {
        return $this->setecuser;
    }

    /**
     * Set the value of setecuser
     *
     * @return  self
     */
    public function setSetecuser($setecuser)
    {
        $this->setecuser = $setecuser;

        return $this;
    }
    public function formatoJSON()
    {
        $myarray = array(
            'idsetec' => $this->idsetec,
            'setecAspiranteNumeroidentificacionsetec' => $this->setecAspiranteNumeroidentificacionsetec,
            'fksetecEncuestador' => $this->fksetecEncuestador,
            'setecCertificacionIdsetecCertificacion' => $this->setecCertificacionIdsetecCertificacion,
            'setecfkcondiciondevida' => $this->setecfkcondiciondevida,
            'setecfkcondicionlaboral' => $this->setecfkcondicionlaboral,
            'fksecestadocertificacion' => $this->fksecestadocertificacion,
            'setecOculto' => $this->setecOculto,
            'setecAccion' => $this->setecAccion,
            'setecfecha' => $this->setecfecha,
            'setecuser' => $this->setecuser
        );
        return json_encode($myarray);
    }
    public function formatoArray()
    {
        $myarray = array(
            'idsetec' => $this->idsetec,
            'setecAspiranteNumeroidentificacionsetec' => $this->setecAspiranteNumeroidentificacionsetec,
            'fksetecEncuestador' => $this->fksetecEncuestador,
            'setecCertificacionIdsetecCertificacion' => $this->setecCertificacionIdsetecCertificacion,
            'setecfkcondiciondevida' => $this->setecfkcondiciondevida,
            'setecfkcondicionlaboral' => $this->setecfkcondicionlaboral,
            'fksecestadocertificacion' => $this->fksecestadocertificacion,
            'setecOculto' => $this->setecOculto,
            'setecAccion' => $this->setecAccion,
            'setecfecha' => $this->setecfecha,
            'setecuser' => $this->setecuser
        );
        return $myarray;
    }
}
