<?php
namespace Clasesphp;

	class HorarioDocentes {
		private $idHorarioDocentes;
		private $distributivos_distributivosId;
		private $horas_idHoras;
		private $dias_idDias;
		public function _construct(){}
		public function set_idHorarioDocentes($idHorarioDocentes){$this->idHorarioDocentes=$idHorarioDocentes;}
		public function set_distributivos_distributivosId($distributivos_distributivosId){$this->distributivos_distributivosId=$distributivos_distributivosId;}
		public function set_horas_idHoras($horas_idHoras){$this->horas_idHoras=$horas_idHoras;}
		public function set_dias_idDias($dias_idDias){$this->dias_idDias=$dias_idDias;}
		public function get_idHorarioDocentes(){return $this->idHorarioDocentes;}
		public function get_distributivos_distributivosId(){return $this->distributivos_distributivosId;}
		public function get_horas_idHoras(){return $this->horas_idHoras;}
		public function get_dias_idDias(){return $this->dias_idDias;}
	}
?>