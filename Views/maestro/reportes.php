<section class="content-header">
    <h1>
        Administrar
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="Index.php">
                <i class="fa fa-fw ti-home"></i> Boletas
            </a>
        </li>
        <li>
            <a href="?c=maestro&a=Index">Profesores</a>
        </li>
        <li class="active">
                  Reportes      
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-fw ti-move"></i> Profesores
                    </h3>
                    <span class="pull-right">
                        <i class="fa fa-fw ti-angle-up clickable"></i>
                        <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                   <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>email</th>
                                <th>telefono</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td><?php echo $r->nombre; ?></td>
                                    <td><?php echo $r->apellidoPaterno; ?></td>
                                    <td><?php echo $r->apellidoMaterno; ?></td>
                                    <td><?php echo $r->email; ?></td>
                                     <td><?php echo $r->telefono; ?></td>
                                    
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



