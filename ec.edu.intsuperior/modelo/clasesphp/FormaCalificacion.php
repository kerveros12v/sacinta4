<?php

namespace Clasesphp;

class FormaCalificacion
{
    private $idformaCalificacion;
    private $formaCalificacionTema;
    private $formaCalificacionhorasdocente;
    private $formaCalificacionhorasestudiante;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idformaCalificacion
     */
    public function getIdformaCalificacion()
    {
        return $this->idformaCalificacion;
    }

    /**
     * Set the value of idformaCalificacion
     *
     * @return  self
     */
    public function setIdformaCalificacion($idformaCalificacion)
    {
        $this->idformaCalificacion = $idformaCalificacion;

        return $this;
    }

    /**
     * Get the value of formaCalificacionTema
     */
    public function getFormaCalificacionTema()
    {
        return $this->formaCalificacionTema;
    }

    /**
     * Set the value of formaCalificacionTema
     *
     * @return  self
     */
    public function setFormaCalificacionTema($formaCalificacionTema)
    {
        $this->formaCalificacionTema = $formaCalificacionTema;

        return $this;
    }

    /**
     * Get the value of formaCalificacionhorasdocente
     */
    public function getFormaCalificacionhorasdocente()
    {
        return $this->formaCalificacionhorasdocente;
    }

    /**
     * Set the value of formaCalificacionhorasdocente
     *
     * @return  self
     */
    public function setFormaCalificacionhorasdocente($formaCalificacionhorasdocente)
    {
        $this->formaCalificacionhorasdocente = $formaCalificacionhorasdocente;

        return $this;
    }

    /**
     * Get the value of formaCalificacionhorasestudiante
     */
    public function getFormaCalificacionhorasestudiante()
    {
        return $this->formaCalificacionhorasestudiante;
    }

    /**
     * Set the value of formaCalificacionhorasestudiante
     *
     * @return  self
     */
    public function setFormaCalificacionhorasestudiante($formaCalificacionhorasestudiante)
    {
        $this->formaCalificacionhorasestudiante = $formaCalificacionhorasestudiante;

        return $this;
    }
}
