
<section class="content-header">
    <h1> Forms
      
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="index.html">
                <i class="fa fa-fw ti-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
        <li class="active">
            Form Elements
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-fw ti-move"></i> Ciclo escolar
                    </h3>
                    <span class="pull-right">
                        <i class="fa fa-fw ti-angle-up clickable"></i>
                        <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                   <div class="table-responsive">
                       <table class="table table-striped table-bordered" id="table2">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Final</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td><?php echo $r->nombre; ?></td>
                                    <td><?php echo $r->fechaInicio; ?></td>
                                    <td><?php echo $r->fechaFin; ?></td>
                                     <td> 
                                      <div class="ui-group-buttons">
                                        <a href="?c=ciclo_escolar&a=Crud&cicloEscolarId=<?php echo $r->cicloEscolarId; ?>"" class="btn btn-warning" role="button">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <div class="or"></div>
                                        <a href="?c=ciclo_escolar&a=Eliminar&cicloEscolarId=<?php echo $r->cicloEscolarId; ?>" class="btn btn-default" role="button">
                                            <span class="glyphicon glyphicon-remove"></span> 
                                        </a>
                                    </div>
                                </td>
                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                         </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



