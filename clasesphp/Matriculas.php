<?php
namespace Clasesphp;

class Matriculas{
	private $ingresoTotalHogar, $fkNivelFormacionMadre, $fkNivelFormacionPadre, $cantidadMiembrosHogar,
	 $matriculasOculto, $matriculasAccion, $matriculasfecha, $matriculasuser;
	private $matriculasId;
	private $codigoMatricula;
	private $fechaMatricula;
	private $montoCreditoEducativo;
	private $fechainicioCarrera;
	private $haPerdidoLaGratuidad_HaPerdidoLaGratuidadId;
	private $recibePensionDiferenciada_recibePensionDiferenciadaId;
	private $nivelAcademico_NivelAcademicoQueCursaId;
	private $bonodesarrollo_bonoDesarrolloId;
	private $estudianteocupacion_estudianteOcupacionId;
	private $carreras_carrerasId;
	private $jornadasAcademicas;
	private $haRepetidoAlMenosUnaMateria;
	private $ingresosestudiante_ingresosestudianteId;
	private $periodoAcademico;
	private $tipoMatricula;
	private $paralelo_paraleloId;
	private $estudiantes_numeroIdentificacion;
	private $montoAyudaEconomica;
	private $niveldeFormaciondelPadre;
	private $niveldeFormaciondelaMadre;
	private $totaldeIngresosenelHogar;
	private $numerodeMiembrosensuHogar;
	public function set_matriculasId($matriculasId){$this->matriculasId=$matriculasId;}
	public function set_codigoMatricula($codigoMatricula){$this->codigoMatricula=$codigoMatricula;}
	public function set_fkNivelFormacionMadre($fkNivelFormacionMadre){$this->fkNivelFormacionMadre=$fkNivelFormacionMadre;}
	public function set_fkNivelFormacionPadre($fkNivelFormacionPadre){$this->fkNivelFormacionPadre=$fkNivelFormacionPadre;}
	public function set_cantidadMiembrosHogar($cantidadMiembrosHogar){$this->cantidadMiembrosHogar=$cantidadMiembrosHogar;}
	public function set_matriculasOculto($matriculasOculto){$this->matriculasOculto=$matriculasOculto;}
	public function set_matriculasAccion($matriculasAccion){$this->matriculasAccion=$matriculasAccion;}
	public function set_matriculasfecha($matriculasfecha){$this->matriculasfecha=$matriculasfecha;}
	public function set_matriculasuser($matriculasuser){$this->matriculasuser=$matriculasuser;}
	public function set_ingresoTotalHogar($ingresoTotalHogar){$this->ingresoTotalHogar=$ingresoTotalHogar;}
	public function set_montoAyudaEconomica($montoAyudaEconomica){$this->montoAyudaEconomica=$montoAyudaEconomica;}
	public function set_fechaMatricula($fechaMatricula){$this->fechaMatricula=$fechaMatricula;}
	public function set_montoCreditoEducativo($montoCreditoEducativo){$this->montoCreditoEducativo=$montoCreditoEducativo;}
	public function set_fechainicioCarrera($fechainicioCarrera){$this->fechainicioCarrera=$fechainicioCarrera;}
	public function set_haPerdidoLaGratuidad_HaPerdidoLaGratuidadId($haPerdidoLaGratuidad_HaPerdidoLaGratuidadId){$this->haPerdidoLaGratuidad_HaPerdidoLaGratuidadId=$haPerdidoLaGratuidad_HaPerdidoLaGratuidadId;}
	public function set_recibePensionDiferenciada_recibePensionDiferenciadaId($recibePensionDiferenciada_recibePensionDiferenciadaId){$this->recibePensionDiferenciada_recibePensionDiferenciadaId=$recibePensionDiferenciada_recibePensionDiferenciadaId;}
	public function set_nivelAcademico_NivelAcademicoQueCursaId($nivelAcademico_NivelAcademicoQueCursaId){$this->nivelAcademico_NivelAcademicoQueCursaId=$nivelAcademico_NivelAcademicoQueCursaId;}
	public function set_bonodesarrollo_bonoDesarrolloId($bonodesarrollo_bonoDesarrolloId){$this->bonodesarrollo_bonoDesarrolloId=$bonodesarrollo_bonoDesarrolloId;}
	public function set_estudianteocupacion_estudianteOcupacionId($estudianteocupacion_estudianteOcupacionId){$this->estudianteocupacion_estudianteOcupacionId=$estudianteocupacion_estudianteOcupacionId;}
	public function set_carreras_carrerasId($carreras_carrerasId){$this->carreras_carrerasId=$carreras_carrerasId;}
	public function set_jornadasAcademicas($jornadasAcademicas){$this->jornadasAcademicas=$jornadasAcademicas;}
	public function set_haRepetidoAlMenosUnaMateria($haRepetidoAlMenosUnaMateria){$this->haRepetidoAlMenosUnaMateria=$haRepetidoAlMenosUnaMateria;}
	public function set_ingresosestudiante($ingresosestudiante_ingresosestudianteId){$this->ingresosestudiante_ingresosestudianteId=$ingresosestudiante_ingresosestudianteId;}
	public function set_periodoAcademico($periodoAcademico){$this->periodoAcademico=$periodoAcademico;}
	public function set_tipoMatricula($tipoMatricula){$this->tipoMatricula=$tipoMatricula;}
	public function set_paralelo_paraleloId($paralelo_paraleloId){$this->paralelo_paraleloId=$paralelo_paraleloId;}
	public function set_estudiantes_numeroIdentificacion($estudiantes_numeroIdentificacion){$this->estudiantes_numeroIdentificacion=$estudiantes_numeroIdentificacion;}
	public function set_totaldeIngresosenelHogar($totaldeIngresosenelHogar_){$this->totaldeIngresosenelHogar=$totaldeIngresosenelHogar_;}
	public function set_numerodeMiembrosensuHogar($numerodeMiembrosensuHogar_){$this->numerodeMiembrosensuHogar=$numerodeMiembrosensuHogar_;}
	public function get_ingresoTotalHogar(){return $this->ingresoTotalHogar ;}
	public function get_matriculasId(){return $this->matriculasId ;}
	public function get_matriculasuser(){return $this->matriculasuser ;}
	public function get_matriculasfecha(){return $this->matriculasfecha ;}
	public function get_fkNivelFormacionMadre(){return $this->fkNivelFormacionMadre ;}
	public function get_fkNivelFormacionPadre(){return $this->fkNivelFormacionPadre ;}
	public function get_cantidadMiembrosHogar(){return $this->cantidadMiembrosHogar ;}
	public function get_matriculasOculto(){return $this->matriculasOculto ;}
	public function get_matriculasAccion(){return $this->matriculasAccion ;}
	public function get_totaldeIngresosenelHogar(){return $this->totaldeIngresosenelHogar ;}
	public function get_numerodeMiembrosensuHogar(){return $this->numerodeMiembrosensuHogar ;}
	public function get_montoAyudaEconomica(){return $this->montoAyudaEconomica;}
	public function get_codigoMatricula(){return $this->codigoMatricula;}
	public function get_fechaMatricula(){return $this->fechaMatricula;}
	public function get_montoCreditoEducativo(){return $this->montoCreditoEducativo;}
	public function get_fechainicioCarrera(){return $this->fechainicioCarrera;}
	public function get_haPerdidoLaGratuidad(){return $this->haPerdidoLaGratuidad_HaPerdidoLaGratuidadId;}
	public function get_recibePensionDiferenciada(){return $this->recibePensionDiferenciada_recibePensionDiferenciadaId;}
	public function get_nivelAcademico_NivelAcademicoQueCursaId(){return $this->nivelAcademico_NivelAcademicoQueCursaId;}
	public function get_bonodesarrollo_bonoDesarrolloId(){return $this->bonodesarrollo_bonoDesarrolloId;}
	public function get_estudianteocupacion_estudianteOcupacionId(){return $this->estudianteocupacion_estudianteOcupacionId;}
	public function get_carreras_carrerasId(){return $this->carreras_carrerasId;}
	public function get_jornadasAcademicas(){return $this->jornadasAcademicas;}
	public function get_haRepetidoAlMenosUnaMateri(){return $this->haRepetidoAlMenosUnaMateria;}
	public function get_ingresosestudiante(){return $this->ingresosestudiante_ingresosestudianteId;}
	public function get_periodoAcademic(){return $this->periodoAcademico;}
	public function get_tipoMatricula_(){return $this->tipoMatricula;}
	public function get_paralelo_paraleloId(){return $this->paralelo_paraleloId;}
	public function get_estudiantes_numeroIdentificacion(){return $this->estudiantes_numeroIdentificacion;}
		public function _construct(){}

		public function __toString(){
		return ("Codigo: {".$this->codigoMatricula."} Fecha Matricula: {".$this->fechaMatricula."} Monto Credito: {".
			$this->montoCreditoEducativo."} Fecha de inicio Carrera: {".$this->fechainicioCarrera."} Gratuidad: {".
				$this->haPerdidoLaGratuidad_HaPerdidoLaGratuidadId."} Pension: {".
					$this->recibePensionDiferenciada_recibePensionDiferenciadaId."} Nivel: {".
						$this->nivelAcademico_NivelAcademicoQueCursaId."} Bono: {".
							$this->bonodesarrollo_bonoDesarrolloId."} Ocupacion: {".$this->estudianteocupacion_estudianteOcupacionId.
								"} Carreras: {".$this->carreras_carrerasId."} Jornada: {".	$this->jornadasAcademicas.
									"} Repetido: {".$this->haRepetidoAlMenosUnaMateria."} Ingresos: {".
										$this->ingresosestudiante_ingresosestudianteId."} Periodo: {".$this->periodoAcademico.
											"} Tipo: {".$this->tipoMatricula."} Paralelo: {".$this->paralelo_paraleloId."} Estudiante: {".$this->estudiantes_numeroIdentificacion."} Monto Ayuda:{".$this->montoAyudaEconomica."} Nivel Foramacion Padre {".$this->niveldeFormaciondelPadre."} Nivel Foramacion Madre {".
												$this->niveldeFormaciondelaMadre."} total de Ingresos {".$this->totaldeIngresosenelHogar."} Numero de Miembros {".$this->numerodeMiembrosensuHogar);
		}
	}
?>