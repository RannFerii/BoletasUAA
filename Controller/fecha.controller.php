<?php
require_once 'model/fecha.php';
require_once 'BLL/fechasBLL.php';

class FechaController{

    private $model;
    private $BLL;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new fecha();
        $this->BLL = new fechasBLL();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/fecha/index.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    //Llamado a la vista proveedor-editar
    public function Crud(){
        $fecha = new fecha();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['fechaId'])){
            $fecha = $this->model->Obtener($_REQUEST['fechaId']);
        }

        //Llamado de las vistas.
         require_once 'Views/header/dataTableReport.php';
        require_once 'Views/fecha/editar.php';
        require_once 'Views/footer/form.php';
  }

    //Llamado a la vista proveedor-nuevo
    public function Agregar(){
        $pvd = new fecha();

        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/fecha/agregar.php';
        require_once 'Views/footer/form.php';
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar(){
        $fecha = new fecha();

        $fecha->primerDepartamental = $_REQUEST['primerDepartamental'];
        $fecha->segundoDepartamental = $_REQUEST['segundoDepartamental'];
        $fecha->parcial = $_REQUEST['parcial'];
        $fecha->finalA = $_REQUEST['finalA'];
        $fecha->finalB = $_REQUEST['finalB'];
        $fecha->cicloEscolarId = $_REQUEST['cicloEscolarId'];

            $this->model->Registrar($this->BLL->dateNotNull($fecha));
             $actionResult='Location: index.php?c=maestro';
        
    }

    //Método que modifica el modelo de un proveedor.
    public function Editar(){
        $pvd = new proveedor();

        $pvd->nit = $_REQUEST['nit'];
        $pvd->razonS = $_REQUEST['razonS'];
        $pvd->dir = $_REQUEST['dir'];
        $pvd->tel = $_REQUEST['tel'];

        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }

    //Método que elimina la tupla proveedor con el nit dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['nit']);
        header('Location: index.php');
    }
}
