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
    <!--page level css -->
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
     
    <!--Sobreescribir clases, siempre al final de todos los css -->
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
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw ti-email black"></i>
                        <span class="label label-success">2</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages table-striped">
                        <li class="dropdown-title">New Messages</li>
                        <li>
                            <a href="" class="message striped-col">
                                <img class="message-image img-circle" src="img/authors/avatar7.jpg" alt="avatar-image">

                                <div class="message-body"><strong>Ernest Kerry</strong>
                                    <br>
                                    Can we Meet?
                                    <br>
                                    <small>Just Now</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="message">
                                <img class="message-image img-circle" src="img/authors/avatar6.jpg" alt="avatar-image">

                                <div class="message-body"><strong>John</strong>
                                    <br>
                                    Dont forgot to call...
                                    <br>
                                    <small>5 minutes ago</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="message striped-col">
                                <img class="message-image img-circle" src="img/authors/avatar5.jpg" alt="avatar-image">

                                <div class="message-body">
                                    <strong>Wilton Zeph</strong>
                                    <br>
                                    If there is anything else &hellip;
                                    <br>
                                    <small>14/10/2014 1:31 pm</small>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a href="" class="message">
                                <img class="message-image img-circle" src="img/authors/avatar1.jpg" alt="avatar-image">
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br>
                                    Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="message striped-col">
                                <img class="message-image img-circle" src="img/authors/avatar.jpg" alt="avatar-image">
                                <div class="message-body">
                                    <strong>Tony</strong>
                                    <br>
                                    Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer"><a href="#"> View All messages</a></li>
                    </ul>

                </li>
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
                                Addison
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
                                <a href="login.html">
                                    <i class="fa fa-fw ti-shift-right"></i>
                                    Logout
                                </a>
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
                            <i class="menu-icon ti-check-box"></i>
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
                                        <a href="?c=maestro&a=Index"> <i class="fa fa-fw ti-write"></i> Ver
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?c=maestro&a=Agregar"> <i class="fa fa-fw ti-write"></i> Agregar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw ti-clipboard"></i> Components
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu p-l-40">
                                    <li>
                                        <a href="form_editors.html">
                                            <i class="fa fa-fw ti-pencil"></i> Form Editors
                                        </a>
                                    </li>
                                    <li>
                                        <a href="form_wizards.html">
                                            <i class="fa fa-fw ti-settings"></i> Form Wizards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dropdowns.html">
                                            <i class="fa fa-fw ti-widget-alt"></i> Drop Downs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="datepicker.html">
                                            <i class="fa fa-fw ti-calendar"></i> Date pickers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="advanceddate_pickers.html">
                                            <i class="fa fa-fw ti-notepad"></i> Advanced Date pickers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="x-editable.html">
                                            <i class="fa fa-fw ti-slice"></i> X-editable
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon ti-desktop"></i>
                            <span>
                                    UI Features
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="general_components.html">
                                    <i class="fa fa-fw ti-plug"></i> General Components
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <i class="fa fa-fw ti-layout-placeholder"></i> Buttons
                                </a>
                            </li>
                            <li>
                                <a href="tabs_accordions.html">
                                    <i class="fa fa-fw ti-layers"></i> Tabs &amp; Accordions
                                </a>
                            </li>
                            <li>
                                <a href="fonts.html">
                                    <i class="fa fa-fw ti-ink-pen"></i> Font Icons
                                </a>
                            </li>
                            <li>
                                <a href="advanced_modals.html">
                                    <i class="fa fa-fw ti-brush-alt"></i> Advanced Modals
                                </a>
                            </li>
                            <li>
                                <a href="timeline.html">
                                    <i class="fa fa-fw ti-time"></i> Timeline
                                </a>
                            </li>
                            <li>
                                <a href="notifications.html">
                                    <i class="fa fa-fw ti-flag-alt"></i> Notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar --> </aside>
    <aside class="right-side">