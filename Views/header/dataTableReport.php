<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UAA | Boletas </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" rel="stylesheet" href="css/app.css"/>
    <!-- end of global css -->

    <!--dataTable -->
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/colReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/rowReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/scroller.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
     <!--end of page level css-->

     <!-- Botones -->
     <link href="vendors/hover/css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/laddabootstrap/css/ladda-themeless.min.css">
    <link href="css/buttons_sass.css" rel="stylesheet">
    <link href="css/advbuttons.css" rel="stylesheet">

    <!-- Formularios -->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/passtrength/passtrength.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="vendors/sweetalert2/css/sweetalert2.min.css"/>
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
    <link rel="stylesheet" href="css/custom_css/form2.css"/>
    <link rel="stylesheet" href="css/custom_css/form3.css"/>
    
    <!--DatePicker-->
    <link href="vendors/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="vendors/datedropper/datedropper.css">
    <link rel="stylesheet" type="text/css" href="vendors/timedropper/css/timedropper.css">
    <link rel="stylesheet" type="text/css" href="vendors/jquerydaterangepicker/css/daterangepicker.min.css">
    <!--clock face css-->
    <link rel="stylesheet" type="text/css" href="vendors/clockpicker/css/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">

    <!-- DropDown Select2-->
    <link href="vendors/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">
    <link href="vendors/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="vendors/select2/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="vendors/selectize/css/selectize.css" rel="stylesheet" type="text/css">
    <link href="vendors/selectric/css/selectric.css" rel="stylesheet" type="text/css">
    <link href="vendors/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css">
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css">
    <Link href="vendors/iCheck/css/line/line.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
     
    <!--Estilos modificados, siempre al final de todos para sobreescribirse-->
    <link href="css/main.css" rel="stylesheet"/>

   
</head>
<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index.html" class="logo">
            <!-- Logotipo UAA -->
            <img src="img/computo.png" class="uaa-logo" alt="logo"/>
            <h5 class="navbar-titulo">Boletas</h5>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw ti-menu"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!--rightside toggle-->
                <li>
                    <a href="#" class="dropdown-toggle toggle-right" data-toggle="dropdown">
                        <i class="fa fa-fw ti-view-list black"></i>
                        <span class="label label-danger">9</span>
                    </a>
                </li>
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="img/authors/avatar1.jpg" width="35" class="img-circle img-responsive pull-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>
                                <?php 
                                  if(isset($_SESSION["usuario"]))
                                  {
                                    echo $_SESSION["usuario"];
                                  }
                                  ?>
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                            <p> Addison</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="p-t-3"><a href="user_profile.html"> <i class="fa fa-fw ti-user"></i> My Profile </a>
                        </li>
                        <li role="presentation"></li>
                        <li><a href="edit_user.html"> <i class="fa fa-fw ti-settings"></i> Account Settings </a></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="lockscreen.html">
                                    <i class="fa fa-fw ti-lock"></i>
                                    Lock
                                </a>
                            </div>
                            <div class="pull-right">

                                 <?php 
                                  if(isset($_SESSION["usuario"]))
                                  {

                                    echo "<a href='closeSession.php'><i class='fa fa-fw ti-shift-right'></i> Salir      </a>";
                                  }
                                  ?>
                                
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image"></a>
                        <div class="content-profile">
                            <h4 class="media-heading">Addison</h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users.html" title="user">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html" title="lock">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html" title="settings">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html" title="Login">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="fa fa-fw fa-book"></i>
                            <span>Administrar</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-receipt"></i> Profesores
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu p-l-40">
                                   <li>
                                        <a href="?c=maestro&a=Index"> 
                                            <i class="fa fa-fw fa-eye"></i> Ver todos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=maestro&a=Reporte"> 
                                            <i class="fa fa-fw fa-download"></i>  Reporte
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=maestro&a=Agregar">
                                           <i class="fa fa-fw fa-plus"></i> Agregar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                         <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-receipt"></i> Alumnos
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu p-l-40">
                                   <li>
                                        <a href="?c=maestro&a=Index"> <i class="fa fa-fw ti-write"></i> Ver todos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=maestro&a=Reporte"> <i class="fa fa-fw ti-write"></i> 
                                            Reporte
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=maestro&a=Agregar"> <i class="fa fa-fw ti-write"></i> Agregar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                         <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-receipt"></i> Fechas
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu p-l-40">
                                   <li>
                                        <a href="?c=fecha&a=Index"> <i class="fa fa-fw ti-write"></i> Ver todas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=fecha&a=Reporte"> <i class="fa fa-fw ti-write"></i> 
                                            Reporte
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=fecha&a=Agregar"> <i class="fa fa-fw ti-write"></i> Agregar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-receipt"></i> Grupos
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu p-l-40">
                                   <li>
                                        <a href="?c=grupo&a=Index"> <i class="fa fa-fw ti-write"></i> Ver todos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=grupo&a=Reporte"> <i class="fa fa-fw ti-write"></i> 
                                            Reporte
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=grupo&a=Agregar"> <i class="fa fa-fw ti-write"></i> Agregar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-receipt"></i> Ciclo Escolar
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu p-l-40">
                                   <li>
                                        <a href="?c=ciclo_escolar&a=Index"> <i class="fa fa-fw ti-write"></i> Ver todos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=ciclo_escolar&a=Reporte"> <i class="fa fa-fw ti-write"></i> 
                                            Reporte
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=ciclo_escolar&a=Agregar"> <i class="fa fa-fw ti-write"></i> Agregar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>


                    </li>
                </ul>
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar --> </aside>
    <aside class="right-side">