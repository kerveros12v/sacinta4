<?php

namespace Clasesphp;

class Nivelacademico
{
    private $nivelacademicocodigo, $nivelacademicoOculto, $nivelacademicoAccion, $nivelacademicofecha, $nivelacademicouser;
    private $nivelAcademicoQueCursaId;
    private $nivelAcademicoQueCursa;
    public function _construct()
    {
    }
    public function set_nivelAcademicoQueCursaQueCursaId($nivelAcademicoQueCursaId)
    {
        $this->nivelAcademicoQueCursaId = $nivelAcademicoQueCursaId;
    }
    public function get_nivelAcademicoQueCursaId()
    {
        return $this->nivelAcademicoQueCursaId;
    }
    public function set_nivelAcademicoQueCursa($nivelAcademicoQueCursa)
    {
        $this->nivelAcademicoQueCursa = $nivelAcademicoQueCursa;
    }
    public function get_nivelAcademicoQueCursa()
    {
        return $this->nivelAcademicoQueCursa;
    }

    public function set_nivelacademicocodigo($nivelacademicocodigo)
    {
        $this->nivelacademicocodigo = $nivelacademicocodigo;
    }
    public function get_nivelacademicocodigo()
    {
        return $this->nivelacademicocodigo;
    }
    public function set_nivelacademicoOculto($nivelacademicoOculto)
    {
        $this->nivelacademicoOculto = $nivelacademicoOculto;
    }
    public function get_nivelacademicoOculto()
    {
        return $this->nivelacademicoOculto;
    }
    public function set_nivelacademicoAccion($nivelacademicoAccion)
    {
        $this->nivelacademicoAccion = $nivelacademicoAccion;
    }
    public function get_nivelacademicoAccion()
    {
        return $this->nivelacademicoAccion;
    }
    public function set_nivelacademicofecha($nivelacademicofecha)
    {
        $this->nivelacademicofecha = $nivelacademicofecha;
    }
    public function get_nivelacademicofecha()
    {
        return $this->nivelacademicofecha;
    }
    public function set_nivelacademicouser($nivelacademicouser)
    {
        $this->nivelacademicouser = $nivelacademicouser;
    }
    public function get_nivelacademicouser()
    {
        return $this->nivelacademicouser;
    }
}
