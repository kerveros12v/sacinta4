<?php

namespace Clasesphp;

class Obraspublicaciones
{
    private $obrasPublicacionescId;
    private $fkpubRevistasCienInIndexadasId;
    private $fknumPubRevistasCientifIndexadasId;
    private $docentesNumeroIdentificacion;
    private $obraspublicacionesOculto;
    private $obraspublicacionesAccion;
    private $obraspublicacionesfecha;
    private $obraspublicacionesuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of obrasPublicacionescId
     */
    public function getObrasPublicacionescId()
    {
        return $this->obrasPublicacionescId;
    }

    /**
     * Set the value of obrasPublicacionescId
     *
     * @return  self
     */
    public function setObrasPublicacionescId($obrasPublicacionescId)
    {
        $this->obrasPublicacionescId = $obrasPublicacionescId;

        return $this;
    }

    /**
     * Get the value of fkpubRevistasCienInIndexadasId
     */
    public function getFkpubRevistasCienInIndexadasId()
    {
        return $this->fkpubRevistasCienInIndexadasId;
    }

    /**
     * Set the value of fkpubRevistasCienInIndexadasId
     *
     * @return  self
     */
    public function setFkpubRevistasCienInIndexadasId($fkpubRevistasCienInIndexadasId)
    {
        $this->fkpubRevistasCienInIndexadasId = $fkpubRevistasCienInIndexadasId;

        return $this;
    }

    /**
     * Get the value of fknumPubRevistasCientifIndexadasId
     */
    public function getFknumPubRevistasCientifIndexadasId()
    {
        return $this->fknumPubRevistasCientifIndexadasId;
    }

    /**
     * Set the value of fknumPubRevistasCientifIndexadasId
     *
     * @return  self
     */
    public function setFknumPubRevistasCientifIndexadasId($fknumPubRevistasCientifIndexadasId)
    {
        $this->fknumPubRevistasCientifIndexadasId = $fknumPubRevistasCientifIndexadasId;

        return $this;
    }

    /**
     * Get the value of docentesNumeroIdentificacion
     */
    public function getDocentesNumeroIdentificacion()
    {
        return $this->docentesNumeroIdentificacion;
    }

    /**
     * Set the value of docentesNumeroIdentificacion
     *
     * @return  self
     */
    public function setDocentesNumeroIdentificacion($docentesNumeroIdentificacion)
    {
        $this->docentesNumeroIdentificacion = $docentesNumeroIdentificacion;

        return $this;
    }

    /**
     * Get the value of obraspublicacionesOculto
     */
    public function getObraspublicacionesOculto()
    {
        return $this->obraspublicacionesOculto;
    }

    /**
     * Set the value of obraspublicacionesOculto
     *
     * @return  self
     */
    public function setObraspublicacionesOculto($obraspublicacionesOculto)
    {
        $this->obraspublicacionesOculto = $obraspublicacionesOculto;

        return $this;
    }

    /**
     * Get the value of obraspublicacionesAccion
     */
    public function getObraspublicacionesAccion()
    {
        return $this->obraspublicacionesAccion;
    }

    /**
     * Set the value of obraspublicacionesAccion
     *
     * @return  self
     */
    public function setObraspublicacionesAccion($obraspublicacionesAccion)
    {
        $this->obraspublicacionesAccion = $obraspublicacionesAccion;

        return $this;
    }

    /**
     * Get the value of obraspublicacionesfecha
     */
    public function getObraspublicacionesfecha()
    {
        return $this->obraspublicacionesfecha;
    }

    /**
     * Set the value of obraspublicacionesfecha
     *
     * @return  self
     */
    public function setObraspublicacionesfecha($obraspublicacionesfecha)
    {
        $this->obraspublicacionesfecha = $obraspublicacionesfecha;

        return $this;
    }

    /**
     * Get the value of obraspublicacionesuser
     */
    public function getObraspublicacionesuser()
    {
        return $this->obraspublicacionesuser;
    }

    /**
     * Set the value of obraspublicacionesuser
     *
     * @return  self
     */
    public function setObraspublicacionesuser($obraspublicacionesuser)
    {
        $this->obraspublicacionesuser = $obraspublicacionesuser;

        return $this;
    }
}
