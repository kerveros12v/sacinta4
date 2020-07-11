<?php
namespace Clasesphp;

class Notas {
private $codigoMatricula;
private $idBimestres;
private $distributivosId;
private $trabajosAcemicos;
private $actividadesIndividuales;
private $actividadesGrupales;
private $lecciones;
private $plataformaElerning;
private $nota1;
private $examen;
private $promedio;
private $categoria;
	public function set_codigoMatricula($codigoMatricula){$this->codigoMatricula=$codigoMatricula;}
	public function get_codigoMatricula(){return $this->codigoMatricula;}
		public function set_idBimestres($idBimestres){$this->idBimestres=$idBimestres;}
	public function get_idBimestres(){return $this->idBimestres;}
		public function set_distributivosId($distributivosId){$this->distributivosId=$distributivosId;}
	public function get_distributivosId(){return $this->distributivosId;}
		public function set_trabajosAcemicos($trabajosAcemicos){$this->trabajosAcemicos=$trabajosAcemicos;}
	public function get_trabajosAcemicos(){return $this->trabajosAcemicos;}
		public function set_actividadesIndividuales($actividadesIndividuales){$this->actividadesIndividuales=$actividadesIndividuales;}
	public function get_actividadesIndividuales(){return $this->actividadesIndividuales;}
		public function set_actividadesGrupales($actividadesGrupales){$this->actividadesGrupales=$actividadesGrupales;}
	public function get_actividadesGrupales(){return $this->actividadesGrupales;}
		public function set_lecciones($lecciones){$this->lecciones=$lecciones;}
	public function get_lecciones(){return $this->lecciones;}
		public function set_plataformaElerning($plataformaElerning){$this->plataformaElerning=$plataformaElerning;}
	public function get_plataformaElerning(){return $this->plataformaElerning;}
		public function set_nota1($nota1){$this->nota1=$nota1;}
	public function get_nota1(){return $this->nota1;}
		public function set_examen($examen){$this->examen=$examen;}
	public function get_examen(){return $this->examen;}
		public function set_promedio($promedio){$this->promedio=$promedio;}
	public function get_promedio(){return $this->promedio;}
		public function set_categoria($categoria){$this->categoria=$categoria;}
	public function get_categoria(){return $this->categoria;}
	public function _construct(){}
	}
?>
