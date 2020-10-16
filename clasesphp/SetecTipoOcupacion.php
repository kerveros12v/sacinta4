<?php

namespace Clasesphp;

class SetecTipoOcupacion
{
    private $setectipoocupacioncodigo;
    private $setectipoocupacionoculto;
    private $setectipoocupacionaccion;
    private $setectipoocupacionfecha;
    private $setectipoocupacionuser;
    private $idsetecTipoOcupacion;
    private $tipoOcupacion;
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

    /**
     * Get the value of setectipoocupacioncodigo
     */
    public function getSetectipoocupacioncodigo()
    {
        return $this->setectipoocupacioncodigo;
    }

    /**
     * Set the value of setectipoocupacioncodigo
     *
     * @return  self
     */
    public function setSetectipoocupacioncodigo($setectipoocupacioncodigo)
    {
        $this->setectipoocupacioncodigo = $setectipoocupacioncodigo;

        return $this;
    }

    /**
     * Get the value of setectipoocupacionoculto
     */
    public function getSetectipoocupacionoculto()
    {
        return $this->setectipoocupacionoculto;
    }

    /**
     * Set the value of setectipoocupacionoculto
     *
     * @return  self
     */
    public function setSetectipoocupacionoculto($setectipoocupacionoculto)
    {
        $this->setectipoocupacionoculto = $setectipoocupacionoculto;

        return $this;
    }

    /**
     * Get the value of setectipoocupacionaccion
     */
    public function getSetectipoocupacionaccion()
    {
        return $this->setectipoocupacionaccion;
    }

    /**
     * Set the value of setectipoocupacionaccion
     *
     * @return  self
     */
    public function setSetectipoocupacionaccion($setectipoocupacionaccion)
    {
        $this->setectipoocupacionaccion = $setectipoocupacionaccion;

        return $this;
    }

    /**
     * Get the value of setectipoocupacionfecha
     */
    public function getSetectipoocupacionfecha()
    {
        return $this->setectipoocupacionfecha;
    }

    /**
     * Set the value of setectipoocupacionfecha
     *
     * @return  self
     */
    public function setSetectipoocupacionfecha($setectipoocupacionfecha)
    {
        $this->setectipoocupacionfecha = $setectipoocupacionfecha;

        return $this;
    }

    /**
     * Get the value of setectipoocupacionuser
     */
    public function getSetectipoocupacionuser()
    {
        return $this->setectipoocupacionuser;
    }

    /**
     * Set the value of setectipoocupacionuser
     *
     * @return  self
     */
    public function setSetectipoocupacionuser($setectipoocupacionuser)
    {
        $this->setectipoocupacionuser = $setectipoocupacionuser;

        return $this;
    }
}
