<?php

namespace Clasesphp;

class SetecPerfil
{
    private $setecperfilcodigo;
    private $setecperfilOculto;
    private $setecperfilAccion;
    private $setecperfilfecha;
    private $setecperfiluser;
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

    /**
     * Get the value of setecperfilcodigo
     */
    public function getSetecperfilcodigo()
    {
        return $this->setecperfilcodigo;
    }

    /**
     * Set the value of setecperfilcodigo
     *
     * @return  self
     */
    public function setSetecperfilcodigo($setecperfilcodigo)
    {
        $this->setecperfilcodigo = $setecperfilcodigo;

        return $this;
    }

    /**
     * Get the value of setecperfilOculto
     */
    public function getSetecperfilOculto()
    {
        return $this->setecperfilOculto;
    }

    /**
     * Set the value of setecperfilOculto
     *
     * @return  self
     */
    public function setSetecperfilOculto($setecperfilOculto)
    {
        $this->setecperfilOculto = $setecperfilOculto;

        return $this;
    }

    /**
     * Get the value of setecperfilAccion
     */
    public function getSetecperfilAccion()
    {
        return $this->setecperfilAccion;
    }

    /**
     * Set the value of setecperfilAccion
     *
     * @return  self
     */
    public function setSetecperfilAccion($setecperfilAccion)
    {
        $this->setecperfilAccion = $setecperfilAccion;

        return $this;
    }

    /**
     * Get the value of setecperfilfecha
     */
    public function getSetecperfilfecha()
    {
        return $this->setecperfilfecha;
    }

    /**
     * Set the value of setecperfilfecha
     *
     * @return  self
     */
    public function setSetecperfilfecha($setecperfilfecha)
    {
        $this->setecperfilfecha = $setecperfilfecha;

        return $this;
    }

    /**
     * Get the value of setecperfiluser
     */
    public function getSetecperfiluser()
    {
        return $this->setecperfiluser;
    }

    /**
     * Set the value of setecperfiluser
     *
     * @return  self
     */
    public function setSetecperfiluser($setecperfiluser)
    {
        $this->setecperfiluser = $setecperfiluser;

        return $this;
    }
    public function formatoJSON()
    {
        $myarray = array(
            'idsetecperfil' => $this->idsetecperfil,
            'setecperfilnombre' => $this->setecperfilnombre
        );
        return json_encode($myarray);
    }
    public function formatoArray()
    {
        $myarray = array(
            'idsetecperfil' => $this->idsetecperfil,
            'setecperfilnombre' => $this->setecperfilnombre
        );
        return ($myarray);
    }
}
