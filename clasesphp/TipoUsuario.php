<?php

namespace Clasesphp;

class TipoUsuario
{
    private $idtipousuario;
    private $tipousuariocodigo;
    private $tipousuario;
    private $tipousuarioOculto;
    private $tipousuarioAccion;
    private $tipousuariofecha;
    private $tipousuariouser;
    private $tipousuariopemisos;
    public function __construct()
    {
    }

    public function set_tipousuariopemisos($tipousuariopemisos)
    {
        $this->tipousuariopemisos = $tipousuariopemisos;
    }
    public function get_tipousuariopemisos()
    {
        return $this->tipousuariopemisos;
    }
    public function set_idtipousuario($idtipousuario)
    {
        $this->idtipousuario = $idtipousuario;
    }
    public function get_idtipousuario()
    {
        return $this->idtipousuario;
    }
    public function set_tipousuariocodigo($tipousuariocodigo)
    {
        $this->tipousuariocodigo = $tipousuariocodigo;
    }
    public function get_tipousuariocodigo()
    {
        return $this->tipousuariocodigo;
    }
    public function set_tipousuario($tipousuario)
    {
        $this->tipousuario = $tipousuario;
    }
    public function get_tipousuario()
    {
        return $this->tipousuario;
    }
    public function set_tipousuarioOculto($tipousuarioOculto)
    {
        $this->tipousuarioOculto = $tipousuarioOculto;
    }
    public function get_tipousuarioOculto()
    {
        return $this->tipousuarioOculto;
    }
    public function set_tipousuarioAccion($tipousuarioAccion)
    {
        $this->tipousuarioAccion = $tipousuarioAccion;
    }
    public function get_tipousuarioAccion()
    {
        return $this->tipousuarioAccion;
    }
    public function set_tipousuariofecha($tipousuariofecha)
    {
        $this->tipousuariofecha = $tipousuariofecha;
    }
    public function get_tipousuariofecha()
    {
        return $this->tipousuariofecha;
    }
    public function set_tipousuariouser($tipousuariouser)
    {
        $this->tipousuariouser = $tipousuariouser;
    }
    public function get_tipousuariouser()
    {
        return $this->tipousuariouser;
    }
    public function __toString()
    {
        return ":{" . $this->idtipousuario
            . "}:{" . $this->tipousuariocodigo
            . "}:{" . $this->tipousuario
            . "}:{" . $this->tipousuarioOculto
            . "}:{" . $this->tipousuarioAccion
            . "}:{" . $this->tipousuariofecha
            . "}:{" . $this->tipousuariouser."}";
    }
}
