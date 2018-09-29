<?php
require_once 'model/ciclo_escolar.php';
require_once 'BLL/ciclos_escolaresBLL.php';

class Ciclo_escolarController{

    private $model;
    private $BLL;

    public function __CONSTRUCT(){
        $this->model = new ciclo_escolar();
        $this->BLL = new ciclos_escolaresBLL();
    }

    //Vista por default
    public function Index(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/ciclo_escolar/index.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    public function Reporte(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/ciclo_escolar/reportes.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    public function Crud(){
        $ciclo_escolar = new ciclo_escolar();
        if(isset($_REQUEST['cicloEscolarId'])) {
            $ciclo_escolar = $this->model->Obtener($_REQUEST['cicloEscolarId']);
        }

       require_once 'Views/header/dataTableReport.php';
        require_once 'Views/ciclo_escolar/Editar.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    public function Agregar(){
        $ciclo_escolar = new ciclo_escolar();

        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/ciclo_escolar/agregar.php';
        require_once 'Views/footer/form.php';
    }

    public function Guardar(){
        $ciclo_escolar = new ciclo_escolar();
       
        $ciclo_escolar->nombre = $_REQUEST['nombre'];
        $ciclo_escolar->fechaInicio = $_REQUEST['fechaInicio'];
        $ciclo_escolar->fechaFin = $_REQUEST['fechaFin'];

        $actionResult= "";
        if($this->BLL->checkNombre($ciclo_escolar->nombre)==true)
        {
            $actionResult='Location: index.php?c=ciclo_escolar&a=Agregar';
            
        }else
        {
            $this->model->Registrar($ciclo_escolar);
             $actionResult='Location: index.php?c=ciclo_escolar';
        }

        header($actionResult);
       
    }

    public function Editar(){
        $ciclo_escolar = new ciclo_escolar();
        $ciclo_escolar->cicloEscolarId = $_REQUEST['cicloEscolarId'];
        $ciclo_escolar->nombre = $_REQUEST['nombre'];
        $ciclo_escolar->fechaInicio = $_REQUEST['fechaInicio'];
        $ciclo_escolar->fechaFin = $_REQUEST['fechaFin'];

        $this->model->Actualizar($ciclo_escolar);

        header('Location: index.php?c=ciclo_escolar');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['cicloEscolarId']);
        header('Location: index.php');
    }
}
