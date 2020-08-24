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
    public function setCodDepartamento($codDepartamento)
    {
        $this->codDepartamento = $codDepartamento;
    }
    public function getCodDepartamento()
    {
        return $this->codDepartamento;
    }
    public function setTusuario($tusuario)
    {
        $this->tusuario = $tusuario;
    }
    public function getTusuario()
    {
        return $this->tusuario;
    }
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta1 = $etiqueta;
    }
    public function getEtiqueta()
    {
        return $this->etiqueta1;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setDepartamentosSubdivision($departamentosSubdivision)
    {
        $this->departamentosSubdivision = $departamentosSubdivision;
    }
    public function getDepartamentosSubdivision()
    {
        return $this->departamentosSubdivision;
    }
    public function __toString()
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
