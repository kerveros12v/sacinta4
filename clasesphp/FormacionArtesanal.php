<?php

namespace Clasesphp;

class FormacionArtesanal
{
    private $idformacionArtesano;
    private $formacionartesanocodigo;
    private $formacionArtesanal;
    private $formacionartesanoOculto;
    private $formacionartesanoAccion;
    private $formacionartesanofecha;
    private $formacionartesanouser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idformacionArtesano
     */
    public function getIdformacionArtesano()
    {
        return $this->idformacionArtesano;
    }

    /**
     * Set the value of idformacionArtesano
     *
     * @return  self
     */
    public function setIdformacionArtesano($idformacionArtesano)
    {
        $this->idformacionArtesano = $idformacionArtesano;

        return $this;
    }

    /**
     * Get the value of formacionartesanocodigo
     */
    public function getFormacionartesanocodigo()
    {
        return $this->formacionartesanocodigo;
    }

    /**
     * Set the value of formacionartesanocodigo
     *
     * @return  self
     */
    public function setFormacionartesanocodigo($formacionartesanocodigo)
    {
        $this->formacionartesanocodigo = $formacionartesanocodigo;

        return $this;
    }

    /**
     * Get the value of formacionArtesanal
     */
    public function getFormacionArtesanal()
    {
        return $this->formacionArtesanal;
    }

    /**
     * Set the value of formacionArtesanal
     *
     * @return  self
     */
    public function setFormacionArtesanal($formacionArtesanal)
    {
        $this->formacionArtesanal = $formacionArtesanal;

        return $this;
    }

    /**
     * Get the value of formacionartesanoOculto
     */
    public function getFormacionartesanoOculto()
    {
        return $this->formacionartesanoOculto;
    }

    /**
     * Set the value of formacionartesanoOculto
     *
     * @return  self
     */
    public function setFormacionartesanoOculto($formacionartesanoOculto)
    {
        $this->formacionartesanoOculto = $formacionartesanoOculto;

        return $this;
    }

    /**
     * Get the value of formacionartesanoAccion
     */
    public function getFormacionartesanoAccion()
    {
        return $this->formacionartesanoAccion;
    }

    /**
     * Set the value of formacionartesanoAccion
     *
     * @return  self
     */
    public function setFormacionartesanoAccion($formacionartesanoAccion)
    {
        $this->formacionartesanoAccion = $formacionartesanoAccion;

        return $this;
    }

    /**
     * Get the value of formacionartesanofecha
     */
    public function getFormacionartesanofecha()
    {
        return $this->formacionartesanofecha;
    }

    /**
     * Set the value of formacionartesanofecha
     *
     * @return  self
     */
    public function setFormacionartesanofecha($formacionartesanofecha)
    {
        $this->formacionartesanofecha = $formacionartesanofecha;

        return $this;
    }

    /**
     * Get the value of formacionartesanouser
     */
    public function getFormacionartesanouser()
    {
        return $this->formacionartesanouser;
    }

    /**
     * Set the value of formacionartesanouser
     *
     * @return  self
     */
    public function setFormacionartesanouser($formacionartesanouser)
    {
        $this->formacionartesanouser = $formacionartesanouser;

        return $this;
    }
}
