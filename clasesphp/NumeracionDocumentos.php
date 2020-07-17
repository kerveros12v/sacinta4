<?php
namespace Clasesphp;
	class NumeracionDocumentos{

		private $numeracionDocumentosId, $nombreDocumento, $numeracionSiguiente, $numeraciondocumentosOculto, $numeraciondocumentosAccion, $numeraciondocumentosfecha, $numeraciondocumentosuser;
		public function _construct(){}
		public function set_numeracionDocumentosId($numeracionDocumentosId){$this->numeracionDocumentosId=$numeracionDocumentosId;}
		public function get_numeracionDocumentosId(){return $this->numeracionDocumentosId;}

		public function set_nombreDocumento($nombreDocumento){$this->nombreDocumento=$nombreDocumento;}
		public function get_nombreDocumento(){return $this->nombreDocumento;}
		public function set_numeracionSiguiente($numeracionSiguiente){$this->numeracionSiguiente=$numeracionSiguiente;}
		public function get_numeracionSiguiente(){return $this->numeracionSiguiente;}
		public function set_numeraciondocumentosOculto($numeraciondocumentosOculto){$this->numeraciondocumentosOculto=$numeraciondocumentosOculto;}
		public function get_numeraciondocumentosOculto(){return $this->numeraciondocumentosOculto;}


		public function set_numeraciondocumentosAccion($numeraciondocumentosAccion){$this->numeraciondocumentosAccion=$numeraciondocumentosAccion;}
		public function get_numeraciondocumentosAccion(){return $this->numeraciondocumentosAccion;}
		public function set_numeraciondocumentosfecha($numeraciondocumentosfecha){$this->numeraciondocumentosfecha=$numeraciondocumentosfecha;}
		public function get_numeraciondocumentosfecha(){return $this->numeraciondocumentosfecha;}
		public function set_numeraciondocumentosuser($numeraciondocumentosuser){$this->numeraciondocumentosuser=$numeraciondocumentosuser;}
		public function get_numeraciondocumentosuser(){return $this->numeraciondocumentosuser;}
	}
?>