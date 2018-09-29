<?php
require_once 'model/alumno.php';

class alumnosBLL{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new alumno();
    }

    //Verificar si existe matriculaUAA repetida
    public function checkMatriculaUAA($matriculaUAA){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->matriculaUAA==$matriculaUAA)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }

    //Verificar si existe matriculaUAA repetida
    public function checkMatriculaUNAM($matriculaUNAM){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->matriculaUNAM==$matriculaUNAM)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }

    //Verificar si existe matriculaUAA repetida
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
}
