<?php
namespace Clasesphp;

	class NumeracionDocumentos{
private $numeracionDocumentosId;
private $nombreDocumento;
private $numeracionSiguiente;

		public function _construct(){}
		public function set_numeracionDocumentosId($numeracionDocumentosId){$this->numeracionDocumentosId=$numeracionDocumentosId;}
		public function get_numeracionDocumentosId(){return $this->numeracionDocumentosId;}

		public function set_nombreDocumento($nombreDocumento){$this->nombreDocumento=$nombreDocumento;}
		public function get_nombreDocumento(){return $this->nombreDocumento;}

		public function set_numeracionSiguiente($numeracionSiguiente){$this->numeracionSiguiente=$numeracionSiguiente;}
		public function get_numeracionSiguiente(){return $this->numeracionSiguiente;}
	}
?>