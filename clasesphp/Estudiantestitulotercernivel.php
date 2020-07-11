<?php
namespace Clasesphp;

	class Estudiantestitulotercernivel
{
	private $estudiantestitulotercernivelOculto;
	private $estudiantestitulotercernivelAccion;
	private $estudiantestitulotercernivelfecha;
	private $estudiantestitulotercerniveluser;
	private $estudiantesTituloTercerNivelid;
	private $estudiantes_numeroIdentificacion;
	private $tituloTercerNivel_tituloTercerNivelId;

		public function _construct(){}
		public function set_estudiantesTituloTercerNivelid($estudiantesTituloTercerNivelid){$this->estudiantesTituloTercerNivelid=$estudiantesTituloTercerNivelid;}
		public function set_estudiantes_numeroIdentificacion($estudiantes_numeroIdentificacion){$this->estudiantes_numeroIdentificacion=$estudiantes_numeroIdentificacion;}
		public function set_tituloTercerNivel_tituloTercerNivelId($tituloTercerNivel_tituloTercerNivelId){$this->tituloTercerNivel_tituloTercerNivelId=$tituloTercerNivel_tituloTercerNivelId;}

		public function set_estudiantestitulotercerniveluser($estudiantestitulotercerniveluser){$this->estudiantestitulotercerniveluser=$estudiantestitulotercerniveluser;}
		public function set_estudiantestitulotercernivelfecha($estudiantestitulotercernivelfecha){$this->estudiantestitulotercernivelfecha=$estudiantestitulotercernivelfecha;}
		public function set_estudiantestitulotercernivelAccion($estudiantestitulotercernivelAccion){$this->estudiantestitulotercernivelAccion=$estudiantestitulotercernivelAccion;}
		public function set_estudiantestitulotercernivelOculto($estudiantestitulotercernivelOculto){$this->estudiantestitulotercernivelOculto=$estudiantestitulotercernivelOculto;}
		public function get_estudiantesTituloTercerNivelid(){return $this->estudiantesTituloTercerNivelid;}
		public function get_estudiantes_numeroIdentificacion(){return $this->estudiantes_numeroIdentificacion;}
		public function get_tituloTercerNivel_tituloTercerNivelId(){return $this->tituloTercerNivel_tituloTercerNivelId;}

		public function get_estudiantestitulotercernivelfecha(){return $this->estudiantestitulotercernivelfecha;}
		public function get_estudiantestitulotercernivelAccion(){return $this->estudiantestitulotercernivelAccion;}
		public function get_estudiantestitulotercerniveluser(){return $this->estudiantestitulotercerniveluser;}
		public function get_estudiantestitulotercernivelOculto(){return $this->estudiantestitulotercernivelOculto;}

		public function toString()
		{
			return ("Id: {".$this->estudiantesTituloTercerNivelid."}Estudiante :{".$this->estudiantes_numeroIdentificacion."} Titulo: {".$this->tituloTercerNivel_tituloTercerNivelId."}");
		}
	}
?>