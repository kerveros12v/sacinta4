<?php

namespace Clasesphp;

class PermisosDepartamentos
{
  private $iddepartamentos;
  private $departamento;
  private $departamentosSubdivision;
  private $url;
  private $departamentosOculto;
  private $departamentosAccion;
  private $departamentosfecha;
  private $departamentosuser;
  private $departamentosparametro;
  public function __construct()
  {
  }
  public function set_iddepartamentos($iddepartamentos)
  {
    $this->iddepartamentos = $iddepartamentos;
  }
  public function set_departamento($departamento)
  {
    $this->departamento = $departamento;
  }
  public function set_departamentosSubdivision($departamentosSubdivision)
  {
    $this->departamentosSubdivision = $departamentosSubdivision;
  }
  public function set_url($url)
  {
    $this->url = $url;
  }
  public function set_departamentosOculto($departamentosOculto)
  {
    $this->departamentosOculto = $departamentosOculto;
  }
  public function set_departamentosAccion($departamentosAccion)
  {
    $this->departamentosAccion = $departamentosAccion;
  }
  public function set_departamentosfecha($departamentosfecha)
  {
    $this->departamentosfecha = $departamentosfecha;
  }
  public function set_departamentosuser($departamentosuser)
  {
    $this->departamentosuser = $departamentosuser;
  }
  public function set_departamentosparametro($departamentosparametro)
  {
    $this->departamentosparametro = $departamentosparametro;
  }
  public function get_departamentosparametro()
  {
    return $this->departamentosparametro;
  }

  public function get_iddepartamentos()
  {
    return $this->iddepartamentos;
  }
  public function get_departamento()
  {
    return $this->departamento;
  }
  public function get_departamentosSubdivision()
  {
    return $this->departamentosSubdivision;
  }
  public function get_url()
  {
    return $this->url;
  }
  public function get_departamentosOculto()
  {
    return $this->departamentosOculto;
  }
  public function get_departamentosAccion()
  {
    return $this->departamentosAccion;
  }
  public function get_departamentosfecha()
  {
    return $this->departamentosfecha;
  }
  public function get_departamentosuser()
  {
    return $this->departamentosuser;
  }
  public function formatoArray()
  {
    return array(
      'iddepartamentos' => $this->iddepartamentos,
      'departamento' => $this->departamento,
      'departamentosSubdivision' => $this->departamentosSubdivision,
      'url' => $this->url,
      'departamentosOculto' => $this->departamentosOculto,
      'departamentosAccion' => $this->departamentosAccion,
      'departamentosfecha' => $this->departamentosfecha,
      'departamentosuser' => $this->departamentosuser
    );
  }

  public function _toString()
  {
    return 'iddepartamentos{' . $this->iddepartamentos
      . '}departamento{' . $this->departamento
      . '}departamentosSubdivision{' . $this->departamentosSubdivision
      . '}url{' . $this->url
      . '}departamentosOculto{' . $this->departamentosOculto
      . '}departamentosAccion{' . $this->departamentosAccion
      . '}departamentosfecha{' . $this->departamentosfecha
      . '}departamentosuser{' . $this->departamentosuser
      . '}departamentosparametro{' . $this->departamentosparametro . '}';
  }
}
