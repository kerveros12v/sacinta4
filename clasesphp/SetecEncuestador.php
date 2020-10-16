<?php

namespace Clasesphp;

class SetecEncuestador
{

    private $idnumIdentificacion;
    private $nombre;
    private $etniasEtniaId;
    private $setecencuestadorperfil;
    private $setecencuestadorOculto;
    private $setecencuestadorAccion;
    private $setecencuestadorfecha;
    private $setecencuestadoruser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idnumIdentificacion
     */
    public function getIdnumIdentificacion()
    {
        return $this->idnumIdentificacion;
    }

    /**
     * Set the value of idnumIdentificacion
     *
     * @return  self
     */
    public function setIdnumIdentificacion($idnumIdentificacion)
    {
        $this->idnumIdentificacion = $idnumIdentificacion;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of etniasEtniaId
     */
    public function getEtniasEtniaId()
    {
        return $this->etniasEtniaId;
    }

    /**
     * Set the value of etniasEtniaId
     *
     * @return  self
     */
    public function setEtniasEtniaId($etniasEtniaId)
    {
        $this->etniasEtniaId = $etniasEtniaId;

        return $this;
    }

    /**
     * Get the value of setecencuestadorperfil
     */
    public function getSetecencuestadorperfil()
    {
        return $this->setecencuestadorperfil;
    }

    /**
     * Set the value of setecencuestadorperfil
     *
     * @return  self
     */
    public function setSetecencuestadorperfil($setecencuestadorperfil)
    {
        $this->setecencuestadorperfil = $setecencuestadorperfil;

        return $this;
    }

    /**
     * Get the value of setecencuestadorOculto
     */
    public function getSetecencuestadorOculto()
    {
        return $this->setecencuestadorOculto;
    }

    /**
     * Set the value of setecencuestadorOculto
     *
     * @return  self
     */
    public function setSetecencuestadorOculto($setecencuestadorOculto)
    {
        $this->setecencuestadorOculto = $setecencuestadorOculto;

        return $this;
    }

    /**
     * Get the value of setecencuestadorAccion
     */
    public function getSetecencuestadorAccion()
    {
        return $this->setecencuestadorAccion;
    }

    /**
     * Set the value of setecencuestadorAccion
     *
     * @return  self
     */
    public function setSetecencuestadorAccion($setecencuestadorAccion)
    {
        $this->setecencuestadorAccion = $setecencuestadorAccion;

        return $this;
    }

    /**
     * Get the value of setecencuestadorfecha
     */
    public function getSetecencuestadorfecha()
    {
        return $this->setecencuestadorfecha;
    }

    /**
     * Set the value of setecencuestadorfecha
     *
     * @return  self
     */
    public function setSetecencuestadorfecha($setecencuestadorfecha)
    {
        $this->setecencuestadorfecha = $setecencuestadorfecha;

        return $this;
    }

    /**
     * Get the value of setecencuestadoruser
     */
    public function getSetecencuestadoruser()
    {
        return $this->setecencuestadoruser;
    }

    /**
     * Set the value of setecencuestadoruser
     *
     * @return  self
     */
    public function setSetecencuestadoruser($setecencuestadoruser)
    {
        $this->setecencuestadoruser = $setecencuestadoruser;

        return $this;
    }
    public function formatoJSON()
    {
        $myarray = array(
            'idnumIdentificacion' => $this->idnumIdentificacion,
            'nombre' => $this->nombre,
            'etnias_etniaId' => $this->etniasEtniaId,
            'setecencuestadorperfil' => $this->setecencuestadorperfil,
            'setecencuestadorOculto' => $this->setecencuestadorOculto,
            'setecencuestadorAccion' => $this->setecencuestadorAccion,
            'setecencuestadorfecha' => $this->setecencuestadorfecha,
            'setecencuestadoruser' => $this->setecencuestadoruser
        );
        return json_encode($myarray);
    }
    public function formatoArray()
    {
        $myarray = array(
            'idnumIdentificacion' => $this->idnumIdentificacion,
            'nombre' => $this->nombre,
            'etnias_etniaId' => $this->etniasEtniaId,
            'setecencuestadorperfil' => $this->setecencuestadorperfil,
            'setecencuestadorOculto' => $this->setecencuestadorOculto,
            'setecencuestadorAccion' => $this->setecencuestadorAccion,
            'setecencuestadorfecha' => $this->setecencuestadorfecha,
            'setecencuestadoruser' => $this->setecencuestadoruser
        );
        return $myarray;
    }
}
