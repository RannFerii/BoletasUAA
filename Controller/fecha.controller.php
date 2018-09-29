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
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptDataTableReport.php';
        require_once 'Views/footer/ScriptButton.php';
         require_once 'Views/footer/ScriptSweetAlert.php';
        require_once 'Views/footer/EndFooter.php';
    }

  
    //Llamado a la vista proveedor-nuevo
    public function Agregar(){
        $pvd = new fecha();

        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/fecha/agregar.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptValidation.php';
        require_once 'Views/footer/ScriptNotification.php';
         require_once 'Views/footer/ScriptDatePicker.php';
         require_once 'Views/footer/ScriptDropDownSelect.php';
        require_once 'Views/footer/EndFooter.php';
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

      //Llamado a la vista proveedor-editar
    public function Editar(){
        $fecha = new fecha();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['fechaId'])){
            $fecha = $this->model->Obtener($_REQUEST['fechaId']);
        }

        //Llamado de las vistas.
         require_once 'Views/header/dataTableReport.php';
        require_once 'Views/fecha/editar.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptValidation.php';
        require_once 'Views/footer/ScriptNotification.php';
         require_once 'Views/footer/ScriptDatePicker.php';
         require_once 'Views/footer/ScriptDropDownSelect.php';
        require_once 'Views/footer/EndFooter.php';
  }


    //Método que modifica el modelo de un proveedor.
    public function Actualizar(){
        $fecha = new fecha();

        $fecha->nit = $_REQUEST['nit'];
        $fecha->razonS = $_REQUEST['razonS'];
        $fecha->dir = $_REQUEST['dir'];
        $fecha->tel = $_REQUEST['tel'];

        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }

    //Método que elimina la tupla proveedor con el nit dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['nit']);
        header('Location: index.php');
    }
}
