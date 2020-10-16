<?php

namespace Clasesphp;

class SetecExperienciaLaboral
{
    private $idsetecExperienciaLaboral;
    private $fknumidentificacion;
    private $experiencianombreEmpresa;
    private $tiempodetrabajo;
    private $setecactividadRealizada;
    private $splOculto;
    private $splAccion;
    private $splfecha;
    private $spluser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idsetecExperienciaLaboral
     */
    public function getIdsetecExperienciaLaboral()
    {
        return $this->idsetecExperienciaLaboral;
    }

    /**
     * Set the value of idsetecExperienciaLaboral
     *
     * @return  self
     */
    public function setIdsetecExperienciaLaboral($idsetecExperienciaLaboral)
    {
        $this->idsetecExperienciaLaboral = $idsetecExperienciaLaboral;

        return $this;
    }

    /**
     * Get the value of fknumidentificacion
     */
    public function getFknumidentificacion()
    {
        return $this->fknumidentificacion;
    }

    /**
     * Set the value of fknumidentificacion
     *
     * @return  self
     */
    public function setFknumidentificacion($fknumidentificacion)
    {
        $this->fknumidentificacion = $fknumidentificacion;

        return $this;
    }

    /**
     * Get the value of experiencianombreEmpresa
     */
    public function getExperiencianombreEmpresa()
    {
        return $this->experiencianombreEmpresa;
    }

    /**
     * Set the value of experiencianombreEmpresa
     *
     * @return  self
     */
    public function setExperiencianombreEmpresa($experiencianombreEmpresa)
    {
        $this->experiencianombreEmpresa = $experiencianombreEmpresa;

        return $this;
    }

    /**
     * Get the value of tiempodetrabajo
     */
    public function getTiempodetrabajo()
    {
        return $this->tiempodetrabajo;
    }

    /**
     * Set the value of tiempodetrabajo
     *
     * @return  self
     */
    public function setTiempodetrabajo($tiempodetrabajo)
    {
        $this->tiempodetrabajo = $tiempodetrabajo;

        return $this;
    }

    /**
     * Get the value of setecactividadRealizada
     */
    public function getSetecactividadRealizada()
    {
        return $this->setecactividadRealizada;
    }

    /**
     * Set the value of setecactividadRealizada
     *
     * @return  self
     */
    public function setSetecactividadRealizada($setecactividadRealizada)
    {
        $this->setecactividadRealizada = $setecactividadRealizada;

        return $this;
    }

    /**
     * Get the value of splOculto
     */
    public function getSplOculto()
    {
        return $this->splOculto;
    }

    /**
     * Set the value of splOculto
     *
     * @return  self
     */
    public function setSplOculto($splOculto)
    {
        $this->splOculto = $splOculto;

        return $this;
    }

    /**
     * Get the value of splAccion
     */
    public function getSplAccion()
    {
        return $this->splAccion;
    }

    /**
     * Set the value of splAccion
     *
     * @return  self
     */
    public function setSplAccion($splAccion)
    {
        $this->splAccion = $splAccion;

        return $this;
    }

    /**
     * Get the value of splfecha
     */
    public function getSplfecha()
    {
        return $this->splfecha;
    }

    /**
     * Set the value of splfecha
     *
     * @return  self
     */
    public function setSplfecha($splfecha)
    {
        $this->splfecha = $splfecha;

        return $this;
    }

    /**
     * Get the value of spluser
     */
    public function getSpluser()
    {
        return $this->spluser;
    }

    /**
     * Set the value of spluser
     *
     * @return  self
     */
    public function setSpluser($spluser)
    {
        $this->spluser = $spluser;

        return $this;
    }
    public function formatoJSON()
    {
        $myarray = array(
            'idsetecExperienciaLaboral' => $this->idsetecExperienciaLaboral,
            'fknumidentificacion' => $this->fknumidentificacion,
            'experiencianombreEmpresa' => $this->experiencianombreEmpresa,
            'tiempodetrabajo' => $this->tiempodetrabajo,
            'setecactividadRealizada' => $this->setecactividadRealizada,
            'splOculto' => $this->splOculto,
            'splAccion' => $this->splAccion,
            'splfecha' => $this->splfecha,
            'spluser' => $this->spluser
        );
        return json_encode($myarray);
    }
    public function formatoArray()
    {
        $myarray = array(
            'idsetecExperienciaLaboral' => $this->idsetecExperienciaLaboral,
            'fknumidentificacion' => $this->fknumidentificacion,
            'experiencianombreEmpresa' => $this->experiencianombreEmpresa,
            'tiempodetrabajo' => $this->tiempodetrabajo,
            'setecactividadRealizada' => $this->setecactividadRealizada,
            'splOculto' => $this->splOculto,
            'splAccion' => $this->splAccion,
            'splfecha' => $this->splfecha,
            'spluser' => $this->spluser
        );
        return ($myarray);
    }
}
