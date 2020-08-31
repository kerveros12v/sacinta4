<?php

namespace Clasesphp;

class SetecPerfil
{
    private $idsetecperfil;
    private $setecperfilnombre;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idsetecperfil
     */
    public function getIdsetecperfil()
    {
        return $this->idsetecperfil;
    }

    /**
     * Set the value of idsetecperfil
     *
     * @return  self
     */
    public function setIdsetecperfil($idsetecperfil)
    {
        $this->idsetecperfil = $idsetecperfil;

        return $this;
    }

    /**
     * Get the value of setecperfilnombre
     */
    public function getSetecperfilnombre()
    {
        return $this->setecperfilnombre;
    }

    /**
     * Set the value of setecperfilnombre
     *
     * @return  self
     */
    public function setSetecperfilnombre($setecperfilnombre)
    {
        $this->setecperfilnombre = $setecperfilnombre;

        return $this;
    }
}
