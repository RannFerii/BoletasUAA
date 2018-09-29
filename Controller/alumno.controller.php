<?php
require_once 'model/alumno.php';
require_once 'BLL/alumnosBLL.php';

class AlumnoController{

    private $model;
    private $BLL;
  

    //En caso de error

    public function __CONSTRUCT(){
        $this->model = new alumno();
        $this->BLL = new alumnosBLL();
    }

    //Vista por default
    public function Index(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/alumno/index.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptDataTableReport.php';
        require_once 'Views/footer/ScriptButton.php';
         require_once 'Views/footer/ScriptSweetAlert.php';
        require_once 'Views/footer/EndFooter.php';
    }

    public function Reporte(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/alumno/reportes.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptDataTableReport.php';
        require_once 'Views/footer/EndFooter.php';
    }

    //formulario  reutilizable
    public function AlumnoForm($alumno){
        $alumno=$alumno;
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/alumno/agregar.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptValidation.php';
        require_once 'Views/footer/ScriptNotification.php';
        require_once 'Views/footer/ScriptMessageError.php';
        require_once 'Views/footer/EndFooter.php';
    }

    public function Agregar(){
        $alumno= new alumno();
        $this->AlumnoForm($alumno);
    }

    //Guardar form 
    public function Guardar() {
        $alumno = new alumno();
        $alumno->matriculaUAA = $_REQUEST['matriculaUAA'];
        $alumno->matriculaUNAM = $_REQUEST['matriculaUNAM'];
        $alumno->nombre = $_REQUEST['nombre'];
        $alumno->apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $alumno->apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $alumno->email = $_REQUEST['email'];
        $alumno->telefono = $_REQUEST['telefono'];
        $matriculaUAA = $alumno->matriculaUAA;

        $actionResult= "";

        //Validaciones
        if($this->BLL->checkMatriculaUAA($alumno->matriculaUAA)==true)
        {
            $_SESSION['mensajeError'] = "Matrícula UAA repetida, prueba otra";
            if($this->BLL->checkMatriculaUNAM($alumno->matriculaUNAM)==true)
            {
                $_SESSION['mensajeError'] = "Matrícula UNAM repetida, prueba otra";
                if($this->BLL->checkEmail($alumno->email)==true)
                {
                    $_SESSION['mensajeError'] = "Correo electrónico existente,prueba con otro";
                }
            }

            $actionResult='Location: index.php?c=alumno&a=Agregar';
             $this->AlumnoForm($alumno);
            
        }else
        {
            $this->model->Registrar($alumno);
             header('Location: index.php?c=alumno');
        }    
    }


    public function Editar(){
        $alumno = new alumno();
        if(isset($_REQUEST['matriculaUAA'])) {
            $alumno = $this->model->Obtener($_REQUEST['matriculaUAA']);
        }
        $this->AlumnoForm($alumno);
    }

    //Guardar nuevos cambios
    public function Actualizar(){
        $alumno = new alumno();
        $alumno->matriculaUAA = $_REQUEST['matriculaUAA'];
        $alumno->matriculaUNAM = $_REQUEST['matriculaUNAM'];
        $alumno->nombre = $_REQUEST['nombre'];
        $alumno->apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $alumno->apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $alumno->email = $_REQUEST['email'];
        $alumno->telefono = $_REQUEST['telefono'];

        $actionResult= "";
        //Validaciones
        if($this->BLL->checkMatriculaUAA($alumno->matriculaUAA)==true)
        {
            $_SESSION['mensajeError'] = "Matrícula UAA repetida, prueba otra";
            if($this->BLL->checkMatriculaUNAM($alumno->matriculaUNAM)==true)
            {
                $_SESSION['mensajeError'] = "Matrícula UNAM repetida, prueba otra";
                if($this->BLL->checkEmail($alumno->email)==true)
                {
                    $_SESSION['mensajeError'] = "Correo electrónico existente,prueba con otro";
                }
            }

            $actionResult='Location: index.php?c=alumno&a=Agregar';
             $this->AlumnoForm($alumno);
            
        }else
        {
            $this->model->Actualizar($alumno);
             header('Location: index.php?c=alumno');
        }   
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['matriculaUAA']);
        header('Location: index.php');
    }
}
