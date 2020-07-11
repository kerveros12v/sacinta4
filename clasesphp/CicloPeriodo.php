<?php

namespace Clasesphp;

class CicloPeriodo
{

    private $idcicloperiodo;
    private $cicloperiodocodigo;
    private $ciclo;
    private $cicloperiodoOculto;
    private $cicloperiodoAccion;
    private $cicloperiodofecha;
    private $cicloperiodouser;
    public function _construct()
    {
    }
    public function set_idcicloperiodo($idcicloperiodo)
    {
        $this->idcicloperiodo = $idcicloperiodo;
    }
    public function set_cicloperiodocodigo($cicloperiodocodigo)
    {
        $this->cicloperiodocodigo = $cicloperiodocodigo;
    }
    public function set_ciclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }
    public function set_cicloperiodoOculto($cicloperiodoOculto)
    {
        $this->cicloperiodoOculto = $cicloperiodoOculto;
    }
    public function set_cicloperiodoAccion($cicloperiodoAccion)
    {
        $this->cicloperiodoAccion = $cicloperiodoAccion;
    }
    public function set_cicloperiodofecha($cicloperiodofecha)
    {
        $this->cicloperiodofecha = $cicloperiodofecha;
    }
    public function set_cicloperiodouser($cicloperiodouser)
    {
        $this->cicloperiodouser = $cicloperiodouser;
    }

    public function get_idcicloperiodo()
    {
        return $this->idcicloperiodo;
    }
    public function get_cicloperiodocodigo()
    {
        return $this->cicloperiodocodigo;
    }
    public function get_ciclo()
    {
        return $this->ciclo;
    }
    public function get_cicloperiodoOculto()
    {
        return $this->cicloperiodoOculto;
    }
    public function get_cicloperiodoAccion()
    {
        return $this->cicloperiodoAccion;
    }
    public function get_cicloperiodofecha()
    {
        return $this->cicloperiodofecha;
    }
    public function get_cicloperiodouser()
    {
        return $this->cicloperiodouser;
    }
    public function __toString()
    {
        return "idcicloperiodo:{" . $this->idcicloperiodo
            . "} cicloperiodocodigo:{" . $this->cicloperiodocodigo
            . "} ciclo:{" . $this->ciclo
            . "} cicloperiodoOculto:{" . $this->cicloperiodoOculto
            . "} cicloperiodoAccion:{" . $this->cicloperiodoAccion
            . "} cicloperiodofecha:{" . $this->cicloperiodofecha
            . "} cicloperiodouser:{" . $this->cicloperiodouser . "}";
    }
}
