<?php
require_once 'model/plan_estudio.php';

class Plan_estudioController{

    private $model;


    public function __CONSTRUCT(){
        $this->model = new plan_estudio();
    }

    //Vista por default
    public function Index(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/plan_estudio/index.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    public function Reporte(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/plan_estudio/reportes.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    public function Crud(){
        $plan_estudio = new plan_estudio();
        if(isset($_REQUEST['planEstudioId'])) {
            $plan_estudio = $this->model->Obtener($_REQUEST['planEstudioId']);
        }

       require_once 'Views/header/dataTableReport.php';
        require_once 'Views/plan_estudio/editar.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    public function Agregar(){
        $plan_estudio = new plan_estudio();

        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/plan_estudio/agregar.php';
        require_once 'Views/footer/form.php';
    }

    public function Guardar(){
        $plan_estudio = new plan_estudio();
       
        $plan_estudio->añoPlanEstudios = $_REQUEST['añoPlanEstudios'];
        $plan_estudio->fechaCreacion = $_REQUEST['fechaCreacion'];

        $actionResult= "";
        $this->model->Registrar($plan_estudio);
        $actionResult='Location: index.php?c=plan_estudio';
        
        
        header($actionResult);
       
    }

    public function Editar(){
        $plan_estudio = new plan_estudio();

        $plan_estudio->planEstudioId = $_REQUEST['planEstudioId'];
        $plan_estudio->añoPlanEstudios = $_REQUEST['añoPlanEstudios'];
        $plan_estudio->fechaCreacion = $_REQUEST['fechaCreacion'];

        $this->model->Actualizar($plan_estudio);

        header('Location: index.php?c=plan_estudio');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['planEstudioId']);
        header('Location: index.php');
    }
}
