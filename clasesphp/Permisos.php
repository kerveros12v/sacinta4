<?php

namespace Clasesphp;

class Permisos
{
    private $codigo;
    private $etiqueta1;
    private $url;
    private $tusuario;
    private $codDepartamento;
    private $departamentosSubdivision;

    public function __construct()
    {
    }
    public function set_codDepartamento($codDepartamento)
    {
        $this->codDepartamento = $codDepartamento;
    }
    public function get_codDepartamento()
    {
        return $this->codDepartamento;
    }
    public function set_tusuario($tusuario)
    {
        $this->tusuario = $tusuario;
    }
    public function get_tusuario()
    {
        return $this->tusuario;
    }
    public function set_etiqueta($etiqueta)
    {
        $this->etiqueta1 = $etiqueta;
    }
    public function get_etiqueta()
    {
        return $this->etiqueta1;
    }
    public function set_url($url)
    {
        $this->url = $url;
    }
    public function get_url()
    {
        return $this->url;
    }
    public function set_codigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function get_codigo()
    {
        return $this->codigo;
    }
    public function set_departamentosSubdivision($departamentosSubdivision)
    {
        $this->departamentosSubdivision = $departamentosSubdivision;
    }
    public function get_departamentosSubdivision()
    {
        return $this->departamentosSubdivision;
    }
    public function _toString()
    {
        return  "codigo: {" . $this->codigo
            . "} etiqueta1: {" . $this->etiqueta1
            . "} url: {" . $this->url
            . "} tusuario: {" . $this->tusuario
            . "} codDepartamento: {" . $this->codDepartamento
            . "} departamentosSubdivision: {" . $this->departamentosSubdivision
            . "}";
    }
}
