<?php

namespace Clasesphp;

class Distributivocursoasignatura
{
    private $distributivocursoasignaturaid;
    private $fkcursosperiodoacademicod;
    private $fkdistributivosId;
    private $fkasignaturasId;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of distributivocursoasignaturaid
     */
    public function getDistributivocursoasignaturaid()
    {
        return $this->distributivocursoasignaturaid;
    }

    /**
     * Set the value of distributivocursoasignaturaid
     *
     * @return  self
     */
    public function setDistributivocursoasignaturaid($distributivocursoasignaturaid)
    {
        $this->distributivocursoasignaturaid = $distributivocursoasignaturaid;

        return $this;
    }

    /**
     * Get the value of fkcursosperiodoacademicod
     */
    public function getFkcursosperiodoacademicod()
    {
        return $this->fkcursosperiodoacademicod;
    }

    /**
     * Set the value of fkcursosperiodoacademicod
     *
     * @return  self
     */
    public function setFkcursosperiodoacademicod($fkcursosperiodoacademicod)
    {
        $this->fkcursosperiodoacademicod = $fkcursosperiodoacademicod;

        return $this;
    }

    /**
     * Get the value of fkdistributivosId
     */
    public function getFkdistributivosId()
    {
        return $this->fkdistributivosId;
    }

    /**
     * Set the value of fkdistributivosId
     *
     * @return  self
     */
    public function setFkdistributivosId($fkdistributivosId)
    {
        $this->fkdistributivosId = $fkdistributivosId;

        return $this;
    }

    /**
     * Get the value of fkasignaturasId
     */
    public function getFkasignaturasId()
    {
        return $this->fkasignaturasId;
    }

    /**
     * Set the value of fkasignaturasId
     *
     * @return  self
     */
    public function setFkasignaturasId($fkasignaturasId)
    {
        $this->fkasignaturasId = $fkasignaturasId;

        return $this;
    }
}
