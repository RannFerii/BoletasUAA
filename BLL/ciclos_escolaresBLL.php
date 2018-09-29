<?php
require_once 'model/ciclo_escolar.php';

class ciclos_escolaresBLL{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new ciclo_escolar();
    }

    //Verificar si existe un nombre existente
    public function checkNombre($nombreGrupo){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->nombreGrupo==$nombreGrupo)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }
}
