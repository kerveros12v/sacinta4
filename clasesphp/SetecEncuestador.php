<?php
namespace Clasesphp;

class SetecEncuestador{

    private $idsetecEncuestadornumIdentificacion,$nombre,$etnias_etniaId,$setecencuestadorOculto,$setecencuestadorAccion,$setecencuestadorfecha,$setecencuestadoruser;
    private $setecencuestadorperfil;
    public function __construct(){}
    public function set_idsetecEncuestadornumIdentificacion($idsetecEncuestadornumIdentificacion){$this->idsetecEncuestadornumIdentificacion=$idsetecEncuestadornumIdentificacion;}
    public function set_nombre($nombre){$this->nombre=$nombre;}
    public function set_etnias_etniaId($etnias_etniaId){$this->etnias_etniaId=$etnias_etniaId;}
    public function set_setecencuestadorOculto($setecencuestadorOculto){$this->setecencuestadorOculto=$setecencuestadorOculto;}
    public function set_setecencuestadorAccion($setecencuestadorAccion){$this->setecencuestadorAccion=$setecencuestadorAccion;}
    public function set_setecencuestadorfecha($setecencuestadorfecha){$this->setecencuestadorfecha=$setecencuestadorfecha;}
    public function set_setecencuestadoruser($setecencuestadoruser){$this->setecencuestadoruser=$setecencuestadoruser;}
    public function set_setecencuestadorperfil($setecencuestadorperfil){$this->setecencuestadorperfil=$setecencuestadorperfil;}
    public function get_idsetecEncuestadornumIdentificacion(){return $this->idsetecEncuestadornumIdentificacion;}

    public function get_nombre(){return $this->nombre;}
    public function get_etnias_etniaId(){return $this->etnias_etniaId;}
    public function get_setecencuestadorOculto(){return $this->setecencuestadorOculto;}
    public function get_setecencuestadorAccion(){return $this->setecencuestadorAccion;}
    public function get_setecencuestadorfecha(){return $this->setecencuestadorfecha;}
    public function get_setecencuestadoruser(){return $this->setecencuestadoruser;}
    public function get_setecencuestadorperfil(){return $this->setecencuestadorperfil;}
    public function formatoJSON(){
        $myarray=array(
            'idsetecEncuestadornumIdentificacion'=>$this->idsetecEncuestadornumIdentificacion,
            'nombre'=>$this->nombre,
            'etnias_etniaId'=>$this->etnias_etniaId,
            'setecencuestadorperfil'=>$this->setecencuestadorperfil,
            'setecencuestadorOculto'=>$this->setecencuestadorOculto,
            'setecencuestadorAccion'=>$this->setecencuestadorAccion,
            'setecencuestadorfecha'=>$this->setecencuestadorfecha,
            'setecencuestadoruser'=>$this->setecencuestadoruser
        );
        return json_encode($myarray);
    }
    public function formatoArray(){
        $myarray=array(
            'idsetecEncuestadornumIdentificacion'=>$this->idsetecEncuestadornumIdentificacion,
            'nombre'=>$this->nombre,
            'etnias_etniaId'=>$this->etnias_etniaId,
            'setecencuestadorperfil'=>$this->setecencuestadorperfil,
            'setecencuestadorOculto'=>$this->setecencuestadorOculto,
            'setecencuestadorAccion'=>$this->setecencuestadorAccion,
            'setecencuestadorfecha'=>$this->setecencuestadorfecha,
            'setecencuestadoruser'=>$this->setecencuestadoruser
        );
        return $myarray;
    }
}
?>