<?php

namespace Clasesphp;

class SetecTipoOcupacion
{
    private $idsetecTipoOcupacion, $tipoOcupacion;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    public function formatoJSON()
    {
        $myarray = array(
            'idsetecTipoOcupacion' => $this->idsetecTipoOcupacion,
            'tipoOcupacion' => $this->tipoOcupacion
        );
        return json_encode($myarray);
    }

    /**
     * Get the value of idsetecTipoOcupacion
     */
    public function getIdsetecTipoOcupacion()
    {
        return $this->idsetecTipoOcupacion;
    }

    /**
     * Set the value of idsetecTipoOcupacion
     *
     * @return  self
     */
    public function setIdsetecTipoOcupacion($idsetecTipoOcupacion)
    {
        $this->idsetecTipoOcupacion = $idsetecTipoOcupacion;

        return $this;
    }

    /**
     * Get the value of tipoOcupacion
     */
    public function getTipoOcupacion()
    {
        return $this->tipoOcupacion;
    }

    /**
     * Set the value of tipoOcupacion
     *
     * @return  self
     */
    public function setTipoOcupacion($tipoOcupacion)
    {
        $this->tipoOcupacion = $tipoOcupacion;

        return $this;
    }
}
