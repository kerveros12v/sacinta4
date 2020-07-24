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
	private $fktEtniaId;
	private $fkPuebloNacionalidadId;
	private $fkTipoSangreId;
	private $fechaNacimiento;
	private $fkPaisNacionalidadId;
	private $fkProvinciaNacimientoId;
	private $fkCantonNacimientoId;
	private $correoElectronico;
	private $numeroCelular;
	private $numeroComvencional;
	private $usuarioEstudiantes;
	private $passwordEstudiantes;
	private $categoriaMigratoria_categoriaMigratoriaId;
	private $idiomas;
	private $accesodepartamento_codigo;
	private $estudiantesimg;
	private $estudiantesOculto;
	private $estudiantesAccion;
	private $estudiantesfecha;
	private $estudiantesuser;

	public function __construct()
	{
	}
	public function set_fktipodocumentoId($fktipodocumentoId)
	{
		$this->fktipodocumentoId = $fktipodocumentoId;
	}
	public function set_numeroIdentificacion($numeroIdentificacion)
	{
		$this->numeroIdentificacion = $numeroIdentificacion;
	}
	public function set_primerApellido($primerApellido)
	{
		$this->primerApellido = $primerApellido;
	}
	public function set_segundoApellido($segundoApellido)
	{
		$this->segundoApellido = $segundoApellido;
	}
	public function set_primerNombre($primerNombre)
	{
		$this->primerNombre = $primerNombre;
	}
	public function set_segundoNombre($segundoNombre)
	{
		$this->segundoNombre = $segundoNombre;
	}
	public function set_fksexoId($fksexoId)
	{
		$this->fksexoId = $fksexoId;
	}
	public function set_fkGeneroId($fkGeneroId)
	{
		$this->fkGeneroId = $fkGeneroId;
	}
	public function set_fkEstadoCivilId($fkEstadoCivilId)
	{
		$this->fkEstadoCivilId = $fkEstadoCivilId;
	}
	public function set_fktEtniaId($fktEtniaId)
	{
		$this->fktEtniaId = $fktEtniaId;
	}
	public function set_fkPuebloNacionalidadId($fkPuebloNacionalidadId)
	{
		$this->fkPuebloNacionalidadId = $fkPuebloNacionalidadId;
	}
	public function set_fkTipoSangreId($fkTipoSangreId)
	{
		$this->fkTipoSangreId = $fkTipoSangreId;
	}
	public function set_fechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento = $fechaNacimiento;
	}
	public function set_fkPaisNacionalidadId($fkPaisNacionalidadId)
	{
		$this->fkPaisNacionalidadId = $fkPaisNacionalidadId;
	}
	public function set_fkProvinciaNacimientoId($fkProvinciaNacimientoId)
	{
		$this->fkProvinciaNacimientoId = $fkProvinciaNacimientoId;
	}
	public function set_fkCantonNacimientoId($fkCantonNacimientoId)
	{
		$this->fkCantonNacimientoId = $fkCantonNacimientoId;
	}
	public function set_correoElectronico($correoElectronico)
	{
		$this->correoElectronico = $correoElectronico;
	}
	public function set_numeroCelular($numeroCelular)
	{
		$this->numeroCelular = $numeroCelular;
	}
	public function set_numeroComvencional($numeroComvencional)
	{
		$this->numeroComvencional = $numeroComvencional;
	}
	public function set_usuarioEstudiantes($usuarioEstudiantes)
	{
		$this->usuarioEstudiantes = $usuarioEstudiantes;
	}
	public function set_passwordEstudiantes($passwordEstudiantes)
	{
		$this->passwordEstudiantes = $passwordEstudiantes;
	}
	public function set_categoriaMigratoria_categoriaMigratoriaId($categoriaMigratoria_categoriaMigratoriaId)
	{
		$this->categoriaMigratoria_categoriaMigratoriaId = $categoriaMigratoria_categoriaMigratoriaId;
	}
	public function set_idiomas($idiomas)
	{
		$this->idiomas = $idiomas;
	}
	public function set_accesodepartamento_codigo($accesodepartamento_codigo)
	{
		$this->accesodepartamento_codigo = $accesodepartamento_codigo;
	}
	public function set_estudiantesimg($estudiantesimg)
	{
		$this->estudiantesimg = $estudiantesimg;
	}
	public function set_estudiantesOculto($estudiantesOculto)
	{
		$this->estudiantesOculto = $estudiantesOculto;
	}
	public function set_estudiantesAccion($estudiantesAccion)
	{
		$this->estudiantesAccion = $estudiantesAccion;
	}
	public function set_estudiantesfecha($estudiantesfecha)
	{
		$this->estudiantesfecha = $estudiantesfecha;
	}
	public function set_estudiantesuser($estudiantesuser)
	{
		$this->estudiantesuser = $estudiantesuser;
	}


	public function get_fktipodocumentoId()
	{
		return $this->fktipodocumentoId;
	}
	public function get_numeroIdentificacion()
	{
		return $this->numeroIdentificacion;
	}
	public function get_primerApellido()
	{
		return $this->primerApellido;
	}
	public function get_segundoApellido()
	{
		return $this->segundoApellido;
	}
	public function get_primerNombre()
	{
		return $this->primerNombre;
	}
	public function get_segundoNombre()
	{
		return $this->segundoNombre;
	}
	public function get_fksexoId()
	{
		return $this->fksexoId;
	}
	public function get_fkGeneroId()
	{
		return $this->fkGeneroId;
	}
	public function get_fkEstadoCivilId()
	{
		return $this->fkEstadoCivilId;
	}
	public function get_fktEtniaId()
	{
		return $this->fktEtniaId;
	}
	public function get_fkPuebloNacionalidadId()
	{
		return $this->fkPuebloNacionalidadId;
	}
	public function get_fkTipoSangreId()
	{
		return $this->fkTipoSangreId;
	}
	public function get_fechaNacimiento()
	{
		return $this->fechaNacimiento;
	}
	public function get_fkPaisNacionalidadId()
	{
		return $this->fkPaisNacionalidadId;
	}
	public function get_fkProvinciaNacimientoId()
	{
		return $this->fkProvinciaNacimientoId;
	}
	public function get_fkCantonNacimientoId()
	{
		return $this->fkCantonNacimientoId;
	}
	public function get_correoElectronico()
	{
		return $this->correoElectronico;
	}
	public function get_numeroCelular()
	{
		return $this->numeroCelular;
	}
	public function get_numeroComvencional()
	{
		return $this->numeroComvencional;
	}
	public function get_usuarioEstudiantes()
	{
		return $this->usuarioEstudiantes;
	}
	public function get_passwordEstudiantes()
	{
		return $this->passwordEstudiantes;
	}
	public function get_categoriaMigratoria_categoriaMigratoriaId()
	{
		return $this->categoriaMigratoria_categoriaMigratoriaId;
	}
	public function get_idiomas()
	{
		return $this->idiomas;
	}
	public function get_accesodepartamento_codigo()
	{
		return $this->accesodepartamento_codigo;
	}
	public function get_estudiantesimg()
	{
		return $this->estudiantesimg;
	}
	public function get_estudiantesOculto()
	{
		return $this->estudiantesOculto;
	}
	public function get_estudiantesAccion()
	{
		return $this->estudiantesAccion;
	}
	public function get_estudiantesfecha()
	{
		return $this->estudiantesfecha;
	}
	public function get_estudiantesuser()
	{
		return $this->estudiantesuser;
	}
	public function __toString()
	{
		return "fktipodocumentoId:{" . $this->fktipodocumentoId . "},numeroIdentificacion:{" . $this->numeroIdentificacion . "},primerApellido:{" . $this->primerApellido . "},segundoApellido:{" . $this->segundoApellido . "},primerNombre:{" . $this->primerNombre . "},segundoNombre:{" . $this->segundoNombre . "},fksexoId:{" . $this->fksexoId . "},fkGeneroId:{" . $this->fkGeneroId . "},fkEstadoCivilId:{" . $this->fkEstadoCivilId . "},fktEtniaId:{" . $this->fktEtniaId . "},fkPuebloNacionalidadId:{" . $this->fkPuebloNacionalidadId . "},fkTipoSangreId:{" . $this->fkTipoSangreId . "},fechaNacimiento:{" . $this->fechaNacimiento . "},fkPaisNacionalidadId:{" . $this->fkPaisNacionalidadId . "},fkProvinciaNacimientoId:{" . $this->fkProvinciaNacimientoId . "},fkCantonNacimientoId:{" . $this->fkCantonNacimientoId . "},correoElectronico:{" . $this->correoElectronico . "},numeroCelular:{" . $this->numeroCelular . "},numeroComvencional:{" . $this->numeroComvencional . "},usuarioEstudiantes:{" . $this->usuarioEstudiantes . "},passwordEstudiantes:{" . $this->passwordEstudiantes . "},categoriaMigratoria_categoriaMigratoriaId:{" . $this->categoriaMigratoria_categoriaMigratoriaId . "},idiomas:{" . $this->idiomas . "},accesodepartamento_codigo:{" . $this->accesodepartamento_codigo . "},estudiantesimg:{" . $this->estudiantesimg . "},estudiantesOculto:{" . $this->estudiantesOculto . "},estudiantesAccion:{" . $this->estudiantesAccion . "},estudiantesfecha:{" . $this->estudiantesfecha . "},estudiantesuser:{" . $this->estudiantesuser . "}";
	}
	public function formatoJSON()
	{
		$myarrayjson = array(
			'fktipodocumentoId' => $this->fktipodocumentoId,
			'numeroIdentificacion' => $this->numeroIdentificacion,
			'primerApellido' => $this->primerApellido,
			'segundoApellido' => $this->segundoApellido,
			'primerNombre' => $this->primerNombre,
			'segundoNombre' => $this->segundoNombre,
			'fksexoId' => $this->fksexoId,
			'fkGeneroId' => $this->fkGeneroId,
			'fkEstadoCivilId' => $this->fkEstadoCivilId,
			'fktEtniaId' => $this->fktEtniaId,
			'fkPuebloNacionalidadId' => $this->fkPuebloNacionalidadId,
			'fkTipoSangreId' => $this->fkTipoSangreId,
			'fechaNacimiento' => $this->fechaNacimiento,
			'fkPaisNacionalidadId' => $this->fkPaisNacionalidadId,
			'fkProvinciaNacimientoId' => $this->fkProvinciaNacimientoId,
			'fkCantonNacimientoId' => $this->fkCantonNacimientoId,
			'correoElectronico' => $this->correoElectronico,
			'numeroCelular' => $this->numeroCelular,
			'numeroComvencional' => $this->numeroComvencional,
			'usuarioEstudiantes' => $this->usuarioEstudiantes,
			'passwordEstudiantes' => $this->passwordEstudiantes,
			'categoriaMigratoria_categoriaMigratoriaId' => $this->categoriaMigratoria_categoriaMigratoriaId,
			'idiomas' => $this->idiomas,
			'accesodepartamento_codigo' => $this->accesodepartamento_codigo,
			'estudiantesimg' => $this->estudiantesimg,
			'estudiantesOculto' => $this->estudiantesOculto,
			'estudiantesAccion' => $this->estudiantesAccion,
			'estudiantesfecha' => $this->estudiantesfecha,
			'estudiantesuser' => $this->estudiantesuser
		);
		return json_encode($myarrayjson);
	}
}
/*

*/
