<?php
require_once 'model/maestro.php';

class maestrosBLL{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new maestro();
    }

    //AGREGAR

    //Verificar si existe un email existente
    public function checkEmail($email){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->email==$email)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }

    //EDITAR

    //Verificar si existe email repetido
    public function checkEditEmail($email,$maestroId){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->email==$email && $r->maestroId!=$maestroId)
                {
                    $result=true;
                }
            endforeach;
        return $result;
    }
}
