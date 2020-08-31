<?php

namespace Clasesphp;

class Mallacurricular
{
    private $idmallacurricular;
    private $iinstitutosId;
    private $ccarrerasId;
    private $nnivelAcademicoQueCursaId;
    private $pperiodoacademicoId;
    private $asignaturasnivel;
    private $asignaturasprevia;
    private $mallacurricularOculto;
    private $mallacurricularAccion;
    private $mallacurricularfecha;
    private $mallacurricularuser;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idmallacurricular
     */
    public function getIdmallacurricular()
    {
        return $this->idmallacurricular;
    }

    /**
     * Set the value of idmallacurricular
     *
     * @return  self
     */
    public function setIdmallacurricular($idmallacurricular)
    {
        $this->idmallacurricular = $idmallacurricular;

        return $this;
    }

    /**
     * Get the value of iinstitutosId
     */
    public function getIinstitutosId()
    {
        return $this->iinstitutosId;
    }

    /**
     * Set the value of iinstitutosId
     *
     * @return  self
     */
    public function setIinstitutosId($iinstitutosId)
    {
        $this->iinstitutosId = $iinstitutosId;

        return $this;
    }

    /**
     * Get the value of ccarrerasId
     */
    public function getCcarrerasId()
    {
        return $this->ccarrerasId;
    }

    /**
     * Set the value of ccarrerasId
     *
     * @return  self
     */
    public function setCcarrerasId($ccarrerasId)
    {
        $this->ccarrerasId = $ccarrerasId;

        return $this;
    }

    /**
     * Get the value of nnivelAcademicoQueCursaId
     */
    public function getNnivelAcademicoQueCursaId()
    {
        return $this->nnivelAcademicoQueCursaId;
    }

    /**
     * Set the value of nnivelAcademicoQueCursaId
     *
     * @return  self
     */
    public function setNnivelAcademicoQueCursaId($nnivelAcademicoQueCursaId)
    {
        $this->nnivelAcademicoQueCursaId = $nnivelAcademicoQueCursaId;

        return $this;
    }

    /**
     * Get the value of pperiodoacademicoId
     */
    public function getPperiodoacademicoId()
    {
        return $this->pperiodoacademicoId;
    }

    /**
     * Set the value of pperiodoacademicoId
     *
     * @return  self
     */
    public function setPperiodoacademicoId($pperiodoacademicoId)
    {
        $this->pperiodoacademicoId = $pperiodoacademicoId;

        return $this;
    }

    /**
     * Get the value of asignaturasnivel
     */
    public function getAsignaturasnivel()
    {
        return $this->asignaturasnivel;
    }

    /**
     * Set the value of asignaturasnivel
     *
     * @return  self
     */
    public function setAsignaturasnivel($asignaturasnivel)
    {
        $this->asignaturasnivel = $asignaturasnivel;

        return $this;
    }

    /**
     * Get the value of asignaturasprevia
     */
    public function getAsignaturasprevia()
    {
        return $this->asignaturasprevia;
    }

    /**
     * Set the value of asignaturasprevia
     *
     * @return  self
     */
    public function setAsignaturasprevia($asignaturasprevia)
    {
        $this->asignaturasprevia = $asignaturasprevia;

        return $this;
    }

    /**
     * Get the value of mallacurricularOculto
     */
    public function getMallacurricularOculto()
    {
        return $this->mallacurricularOculto;
    }

    /**
     * Set the value of mallacurricularOculto
     *
     * @return  self
     */
    public function setMallacurricularOculto($mallacurricularOculto)
    {
        $this->mallacurricularOculto = $mallacurricularOculto;

        return $this;
    }

    /**
     * Get the value of mallacurricularAccion
     */
    public function getMallacurricularAccion()
    {
        return $this->mallacurricularAccion;
    }

    /**
     * Set the value of mallacurricularAccion
     *
     * @return  self
     */
    public function setMallacurricularAccion($mallacurricularAccion)
    {
        $this->mallacurricularAccion = $mallacurricularAccion;

        return $this;
    }

    /**
     * Get the value of mallacurricularfecha
     */
    public function getMallacurricularfecha()
    {
        return $this->mallacurricularfecha;
    }

    /**
     * Set the value of mallacurricularfecha
     *
     * @return  self
     */
    public function setMallacurricularfecha($mallacurricularfecha)
    {
        $this->mallacurricularfecha = $mallacurricularfecha;

        return $this;
    }

    /**
     * Get the value of mallacurricularuser
     */
    public function getMallacurricularuser()
    {
        return $this->mallacurricularuser;
    }

    /**
     * Set the value of mallacurricularuser
     *
     * @return  self
     */
    public function setMallacurricularuser($mallacurricularuser)
    {
        $this->mallacurricularuser = $mallacurricularuser;

        return $this;
    }
}
