<?php

namespace Clasesphp;

class LoginGeneral
{
    private $idlogingeneral;
    private $idcuenta;
    private $logincorreo;
    private $numIndentificacion;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of idlogingeneral
     */
    public function getIdlogingeneral()
    {
        return $this->idlogingeneral;
    }

    /**
     * Set the value of idlogingeneral
     *
     * @return  self
     */
    public function setIdlogingeneral($idlogingeneral)
    {
        $this->idlogingeneral = $idlogingeneral;

        return $this;
    }

    /**
     * Get the value of idcuenta
     */
    public function getIdcuenta()
    {
        return $this->idcuenta;
    }

    /**
     * Set the value of idcuenta
     *
     * @return  self
     */
    public function setIdcuenta($idcuenta)
    {
        $this->idcuenta = $idcuenta;

        return $this;
    }

    /**
     * Get the value of logincorreo
     */
    public function getLogincorreo()
    {
        return $this->logincorreo;
    }

    /**
     * Set the value of logincorreo
     *
     * @return  self
     */
    public function setLogincorreo($logincorreo)
    {
        $this->logincorreo = $logincorreo;

        return $this;
    }

    /**
     * Get the value of numIndentificacion
     */
    public function getNumIndentificacion()
    {
        return $this->numIndentificacion;
    }

    /**
     * Set the value of numIndentificacion
     *
     * @return  self
     */
    public function setNumIndentificacion($numIndentificacion)
    {
        $this->numIndentificacion = $numIndentificacion;

        return $this;
    }
}
