<?php

namespace Clasesphp;

class SocioEmpleo
{
    private $idsocioempleo;
    private $socioEmpleoregistro;
    private $socioempleoOculto;
    private $socioempleoAccion;
    private $socioempleofecha;
    private $socioempleouser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idsocioempleo
     */
    public function getIdsocioempleo()
    {
        return $this->idsocioempleo;
    }

    /**
     * Set the value of idsocioempleo
     *
     * @return  self
     */
    public function setIdsocioempleo($idsocioempleo)
    {
        $this->idsocioempleo = $idsocioempleo;

        return $this;
    }

    /**
     * Get the value of socioEmpleoregistro
     */
    public function getSocioEmpleoregistro()
    {
        return $this->socioEmpleoregistro;
    }

    /**
     * Set the value of socioEmpleoregistro
     *
     * @return  self
     */
    public function setSocioEmpleoregistro($socioEmpleoregistro)
    {
        $this->socioEmpleoregistro = $socioEmpleoregistro;

        return $this;
    }

    /**
     * Get the value of socioempleoOculto
     */
    public function getSocioempleoOculto()
    {
        return $this->socioempleoOculto;
    }

    /**
     * Set the value of socioempleoOculto
     *
     * @return  self
     */
    public function setSocioempleoOculto($socioempleoOculto)
    {
        $this->socioempleoOculto = $socioempleoOculto;

        return $this;
    }

    /**
     * Get the value of socioempleoAccion
     */
    public function getSocioempleoAccion()
    {
        return $this->socioempleoAccion;
    }

    /**
     * Set the value of socioempleoAccion
     *
     * @return  self
     */
    public function setSocioempleoAccion($socioempleoAccion)
    {
        $this->socioempleoAccion = $socioempleoAccion;

        return $this;
    }

    /**
     * Get the value of socioempleofecha
     */
    public function getSocioempleofecha()
    {
        return $this->socioempleofecha;
    }

    /**
     * Set the value of socioempleofecha
     *
     * @return  self
     */
    public function setSocioempleofecha($socioempleofecha)
    {
        $this->socioempleofecha = $socioempleofecha;

        return $this;
    }

    /**
     * Get the value of socioempleouser
     */
    public function getSocioempleouser()
    {
        return $this->socioempleouser;
    }

    /**
     * Set the value of socioempleouser
     *
     * @return  self
     */
    public function setSocioempleouser($socioempleouser)
    {
        $this->socioempleouser = $socioempleouser;

        return $this;
    }
    public function formatoJSON()
    {
        $myarray = array(
            'idsocioempleo' => $this->idsocioempleo,
            'socioEmpleoregistro' => $this->socioEmpleoregistro
        );
        return json_encode($myarray);
    }
    public function formatoArray()
    {
        $myarray = array(
            'idsocioempleo' => $this->idsocioempleo,
            'socioEmpleoregistro' => $this->socioEmpleoregistro
        );
        return $myarray;
    }
}
