
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
                        <i class="fa fa-fw ti-move"></i> Grupos
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
                                <th>Aciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td><?php echo $r->nombreGrupo; ?></td>
                                     <td> 
                                      <div class="ui-group-buttons">
                                        <a href="?c=grupo&a=Crud&grupoId=<?php echo $r->grupoId; ?>" class="btn btn-warning" role="button">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <div class="or"></div>
                                        <a href="?c=grupo&a=Eliminar&grupoId=<?php echo $r->grupoId; ?>" class="btn btn-default" role="button">
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



