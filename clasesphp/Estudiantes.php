<?php

namespace Clasesphp;

class Estudiantes
{
	private $fktipodocumentoId;
	private $numeroIdentificacion;
	private $primerApellido;
	private $segundoApellido;
	private $primerNombre;
	private $segundoNombre;
	private $fksexoId;
	private $fkGeneroId;
	private $fkEstadoCivilId;
	private $fkPuebloNacionalidadId;
	private $fkTipoSangreId;
	private $fechaNacimiento;
	private $fkCantonNacimientoId;
	private $correoElectronico;
	private $numeroCelular;
	private $numeroComvencional;
	private $usuarioEstudiantes;
	private $passwordEstudiantes;
	private $categoriaMigratoriaId;
	private $idiomas;
	private $accesodepartamentoCodigo;
	private $estudiantesimg;
	private $estudiantesOculto;
	private $estudiantesAccion;
	private $estudiantesfecha;
	private $estudiantesuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of fktipodocumentoId
	 */
	public function getFktipodocumentoId()
	{
		return $this->fktipodocumentoId;
	}

	/**
	 * Set the value of fktipodocumentoId
	 *
	 * @return  self
	 */
	public function setFktipodocumentoId($fktipodocumentoId)
	{
		$this->fktipodocumentoId = $fktipodocumentoId;

		return $this;
	}

	/**
	 * Get the value of numeroIdentificacion
	 */
	public function getNumeroIdentificacion()
	{
		return $this->numeroIdentificacion;
	}

	/**
	 * Set the value of numeroIdentificacion
	 *
	 * @return  self
	 */
	public function setNumeroIdentificacion($numeroIdentificacion)
	{
		$this->numeroIdentificacion = $numeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of primerApellido
	 */
	public function getPrimerApellido()
	{
		return $this->primerApellido;
	}

	/**
	 * Set the value of primerApellido
	 *
	 * @return  self
	 */
	public function setPrimerApellido($primerApellido)
	{
		$this->primerApellido = $primerApellido;

		return $this;
	}

	/**
	 * Get the value of segundoApellido
	 */
	public function getSegundoApellido()
	{
		return $this->segundoApellido;
	}

	/**
	 * Set the value of segundoApellido
	 *
	 * @return  self
	 */
	public function setSegundoApellido($segundoApellido)
	{
		$this->segundoApellido = $segundoApellido;

		return $this;
	}

	/**
	 * Get the value of primerNombre
	 */
	public function getPrimerNombre()
	{
		return $this->primerNombre;
	}

	/**
	 * Set the value of primerNombre
	 *
	 * @return  self
	 */
	public function setPrimerNombre($primerNombre)
	{
		$this->primerNombre = $primerNombre;

		return $this;
	}

	/**
	 * Get the value of segundoNombre
	 */
	public function getSegundoNombre()
	{
		return $this->segundoNombre;
	}

	/**
	 * Set the value of segundoNombre
	 *
	 * @return  self
	 */
	public function setSegundoNombre($segundoNombre)
	{
		$this->segundoNombre = $segundoNombre;

		return $this;
	}

	/**
	 * Get the value of fksexoId
	 */
	public function getFksexoId()
	{
		return $this->fksexoId;
	}

	/**
	 * Set the value of fksexoId
	 *
	 * @return  self
	 */
	public function setFksexoId($fksexoId)
	{
		$this->fksexoId = $fksexoId;

		return $this;
	}

	/**
	 * Get the value of fkGeneroId
	 */
	public function getFkGeneroId()
	{
		return $this->fkGeneroId;
	}

	/**
	 * Set the value of fkGeneroId
	 *
	 * @return  self
	 */
	public function setFkGeneroId($fkGeneroId)
	{
		$this->fkGeneroId = $fkGeneroId;

		return $this;
	}

	/**
	 * Get the value of fkEstadoCivilId
	 */
	public function getFkEstadoCivilId()
	{
		return $this->fkEstadoCivilId;
	}

	/**
	 * Set the value of fkEstadoCivilId
	 *
	 * @return  self
	 */
	public function setFkEstadoCivilId($fkEstadoCivilId)
	{
		$this->fkEstadoCivilId = $fkEstadoCivilId;

		return $this;
	}

	/**
	 * Get the value of fkPuebloNacionalidadId
	 */
	public function getFkPuebloNacionalidadId()
	{
		return $this->fkPuebloNacionalidadId;
	}

	/**
	 * Set the value of fkPuebloNacionalidadId
	 *
	 * @return  self
	 */
	public function setFkPuebloNacionalidadId($fkPuebloNacionalidadId)
	{
		$this->fkPuebloNacionalidadId = $fkPuebloNacionalidadId;

		return $this;
	}

	/**
	 * Get the value of fkTipoSangreId
	 */
	public function getFkTipoSangreId()
	{
		return $this->fkTipoSangreId;
	}

	/**
	 * Set the value of fkTipoSangreId
	 *
	 * @return  self
	 */
	public function setFkTipoSangreId($fkTipoSangreId)
	{
		$this->fkTipoSangreId = $fkTipoSangreId;

		return $this;
	}

	/**
	 * Get the value of fechaNacimiento
	 */
	public function getFechaNacimiento()
	{
		return $this->fechaNacimiento;
	}

	/**
	 * Set the value of fechaNacimiento
	 *
	 * @return  self
	 */
	public function setFechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento = $fechaNacimiento;

		return $this;
	}

	/**
	 * Get the value of fkCantonNacimientoId
	 */
	public function getFkCantonNacimientoId()
	{
		return $this->fkCantonNacimientoId;
	}

	/**
	 * Set the value of fkCantonNacimientoId
	 *
	 * @return  self
	 */
	public function setFkCantonNacimientoId($fkCantonNacimientoId)
	{
		$this->fkCantonNacimientoId = $fkCantonNacimientoId;

		return $this;
	}

	/**
	 * Get the value of correoElectronico
	 */
	public function getCorreoElectronico()
	{
		return $this->correoElectronico;
	}

	/**
	 * Set the value of correoElectronico
	 *
	 * @return  self
	 */
	public function setCorreoElectronico($correoElectronico)
	{
		$this->correoElectronico = $correoElectronico;

		return $this;
	}

	/**
	 * Get the value of numeroCelular
	 */
	public function getNumeroCelular()
	{
		return $this->numeroCelular;
	}

	/**
	 * Set the value of numeroCelular
	 *
	 * @return  self
	 */
	public function setNumeroCelular($numeroCelular)
	{
		$this->numeroCelular = $numeroCelular;

		return $this;
	}

	/**
	 * Get the value of numeroComvencional
	 */
	public function getNumeroComvencional()
	{
		return $this->numeroComvencional;
	}

	/**
	 * Set the value of numeroComvencional
	 *
	 * @return  self
	 */
	public function setNumeroComvencional($numeroComvencional)
	{
		$this->numeroComvencional = $numeroComvencional;

		return $this;
	}

	/**
	 * Get the value of usuarioEstudiantes
	 */
	public function getUsuarioEstudiantes()
	{
		return $this->usuarioEstudiantes;
	}

	/**
	 * Set the value of usuarioEstudiantes
	 *
	 * @return  self
	 */
	public function setUsuarioEstudiantes($usuarioEstudiantes)
	{
		$this->usuarioEstudiantes = $usuarioEstudiantes;

		return $this;
	}

	/**
	 * Get the value of passwordEstudiantes
	 */
	public function getPasswordEstudiantes()
	{
		return $this->passwordEstudiantes;
	}

	/**
	 * Set the value of passwordEstudiantes
	 *
	 * @return  self
	 */
	public function setPasswordEstudiantes($passwordEstudiantes)
	{
		$this->passwordEstudiantes = $passwordEstudiantes;

		return $this;
	}

	/**
	 * Get the value of categoriaMigratoriaId
	 */
	public function getCategoriaMigratoriaId()
	{
		return $this->categoriaMigratoriaId;
	}

	/**
	 * Set the value of categoriaMigratoriaId
	 *
	 * @return  self
	 */
	public function setCategoriaMigratoriaId($categoriaMigratoriaId)
	{
		$this->categoriaMigratoriaId = $categoriaMigratoriaId;

		return $this;
	}

	/**
	 * Get the value of idiomas
	 */
	public function getIdiomas()
	{
		return $this->idiomas;
	}

	/**
	 * Set the value of idiomas
	 *
	 * @return  self
	 */
	public function setIdiomas($idiomas)
	{
		$this->idiomas = $idiomas;

		return $this;
	}

	/**
	 * Get the value of accesodepartamentoCodigo
	 */
	public function getAccesodepartamentoCodigo()
	{
		return $this->accesodepartamentoCodigo;
	}

	/**
	 * Set the value of accesodepartamentoCodigo
	 *
	 * @return  self
	 */
	public function setAccesodepartamentoCodigo($accesodepartamentoCodigo)
	{
		$this->accesodepartamentoCodigo = $accesodepartamentoCodigo;

		return $this;
	}

	/**
	 * Get the value of estudiantesimg
	 */
	public function getEstudiantesimg()
	{
		return $this->estudiantesimg;
	}

	/**
	 * Set the value of estudiantesimg
	 *
	 * @return  self
	 */
	public function setEstudiantesimg($estudiantesimg)
	{
		$this->estudiantesimg = $estudiantesimg;

		return $this;
	}

	/**
	 * Get the value of estudiantesOculto
	 */
	public function getEstudiantesOculto()
	{
		return $this->estudiantesOculto;
	}

	/**
	 * Set the value of estudiantesOculto
	 *
	 * @return  self
	 */
	public function setEstudiantesOculto($estudiantesOculto)
	{
		$this->estudiantesOculto = $estudiantesOculto;

		return $this;
	}

	/**
	 * Get the value of estudiantesAccion
	 */
	public function getEstudiantesAccion()
	{
		return $this->estudiantesAccion;
	}

	/**
	 * Set the value of estudiantesAccion
	 *
	 * @return  self
	 */
	public function setEstudiantesAccion($estudiantesAccion)
	{
		$this->estudiantesAccion = $estudiantesAccion;

		return $this;
	}

	/**
	 * Get the value of estudiantesfecha
	 */
	public function getEstudiantesfecha()
	{
		return $this->estudiantesfecha;
	}

	/**
	 * Set the value of estudiantesfecha
	 *
	 * @return  self
	 */
	public function setEstudiantesfecha($estudiantesfecha)
	{
		$this->estudiantesfecha = $estudiantesfecha;

		return $this;
	}

	/**
	 * Get the value of estudiantesuser
	 */
	public function getEstudiantesuser()
	{
		return $this->estudiantesuser;
	}

	/**
	 * Set the value of estudiantesuser
	 *
	 * @return  self
	 */
	public function setEstudiantesuser($estudiantesuser)
	{
		$this->estudiantesuser = $estudiantesuser;

		return $this;
	}
	public function __toString()
	{
		return "fktipodocumentoId{" . $this->fktipodocumentoId . "}numeroIdentificacion{" .
			$this->numeroIdentificacion . "}primerApellido{" .
			$this->primerApellido . "}segundoApellido{" .
			$this->segundoApellido . "}primerNombre{" .
			$this->primerNombre . "}segundoNombre{" .
			$this->segundoNombre . "}fksexoId{" .
			$this->fksexoId . "}fkGeneroId{" .
			$this->fkGeneroId . "}fkEstadoCivilId{" .
			$this->fkEstadoCivilId . "}fkPuebloNacionalidadId{" .
			$this->fkPuebloNacionalidadId . "}fkTipoSangreId{" .
			$this->fkTipoSangreId . "}fechaNacimiento{" .
			$this->fechaNacimiento . "}fkCantonNacimientoId{" .
			$this->fkCantonNacimientoId . "}correoElectronico{" .
			$this->correoElectronico . "}numeroCelular{" .
			$this->numeroCelular . "}numeroComvencional{" .
			$this->numeroComvencional . "}usuarioEstudiantes{" .
			$this->usuarioEstudiantes . "}passwordEstudiantes{" .
			$this->passwordEstudiantes . "}categoriaMigratoriaId{" .
			$this->categoriaMigratoriaId . "}idiomas{" .
			$this->idiomas . "}accesodepartamentoCodigo{" .
			$this->accesodepartamentoCodigo . "}estudiantesimg{" .
			$this->estudiantesimg . "}estudiantesOculto{" .
			$this->estudiantesOculto . "}estudiantesAccion{" .
			$this->estudiantesAccion . "}estudiantesfecha{" .
			$this->estudiantesuser . "}";
		$this->estudiantesfecha . "}{" .
			$this->estudiantesuser . "}";
	}
}
