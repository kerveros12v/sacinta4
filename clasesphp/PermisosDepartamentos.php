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
  /**
   * Class constructor.
   */
  public function __construct()
  {
  }
  /**
   * Get the value of iddepartamentos
   */
  public function getIddepartamentos()
  {
    return $this->iddepartamentos;
  }

  /**
   * Set the value of iddepartamentos
   *
   * @return  self
   */
  public function setIddepartamentos($iddepartamentos)
  {
    $this->iddepartamentos = $iddepartamentos;

    return $this;
  }

  /**
   * Get the value of departamento
   */
  public function getDepartamento()
  {
    return $this->departamento;
  }

  /**
   * Set the value of departamento
   *
   * @return  self
   */
  public function setDepartamento($departamento)
  {
    $this->departamento = $departamento;

    return $this;
  }

  /**
   * Get the value of departamentosSubdivision
   */
  public function getDepartamentosSubdivision()
  {
    return $this->departamentosSubdivision;
  }

  /**
   * Set the value of departamentosSubdivision
   *
   * @return  self
   */
  public function setDepartamentosSubdivision($departamentosSubdivision)
  {
    $this->departamentosSubdivision = $departamentosSubdivision;

    return $this;
  }

  /**
   * Get the value of url
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * Set the value of url
   *
   * @return  self
   */
  public function setUrl($url)
  {
    $this->url = $url;

    return $this;
  }

  /**
   * Get the value of departamentosOculto
   */
  public function getDepartamentosOculto()
  {
    return $this->departamentosOculto;
  }

  /**
   * Set the value of departamentosOculto
   *
   * @return  self
   */
  public function setDepartamentosOculto($departamentosOculto)
  {
    $this->departamentosOculto = $departamentosOculto;

    return $this;
  }

  /**
   * Get the value of departamentosAccion
   */
  public function getDepartamentosAccion()
  {
    return $this->departamentosAccion;
  }

  /**
   * Set the value of departamentosAccion
   *
   * @return  self
   */
  public function setDepartamentosAccion($departamentosAccion)
  {
    $this->departamentosAccion = $departamentosAccion;

    return $this;
  }

  /**
   * Get the value of departamentosfecha
   */
  public function getDepartamentosfecha()
  {
    return $this->departamentosfecha;
  }

  /**
   * Set the value of departamentosfecha
   *
   * @return  self
   */
  public function setDepartamentosfecha($departamentosfecha)
  {
    $this->departamentosfecha = $departamentosfecha;

    return $this;
  }

  /**
   * Get the value of departamentosuser
   */
  public function getDepartamentosuser()
  {
    return $this->departamentosuser;
  }

  /**
   * Set the value of departamentosuser
   *
   * @return  self
   */
  public function setDepartamentosuser($departamentosuser)
  {
    $this->departamentosuser = $departamentosuser;

    return $this;
  }

  /**
   * Get the value of departamentosparametro
   */
  public function getDepartamentosparametro()
  {
    return $this->departamentosparametro;
  }

  /**
   * Set the value of departamentosparametro
   *
   * @return  self
   */
  public function setDepartamentosparametro($departamentosparametro)
  {
    $this->departamentosparametro = $departamentosparametro;

    return $this;
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

  public function __toString()
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
