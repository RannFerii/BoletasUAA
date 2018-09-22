
<section class="content-header">
    <h1>
        Form Elements
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
                        <i class="fa fa-fw ti-move"></i> General Elements
                    </h3>
                    <span class="pull-right">
                        <i class="fa fa-fw ti-angle-up clickable"></i>
                        <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                            <tr>
                                <th>NIT</th>
                                <th style="width:120px;">Razón Social</th>
                                <th style="width:120px;">Dirección</th>
                                <th style="width:120px;">Teléfono</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td><?php echo $r->nit; ?></td>
                                    <td><?php echo $r->razonS; ?></td>
                                    <td><?php echo $r->dir; ?></td>
                                    <td><?php echo $r->tel; ?></td>
                                    <td>
                                        <a href="?c=proveedor&a=Crud&nit=<?php echo $r->nit; ?>">Editar</a>
                                    </td>
                                    <td>
                                        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=proveedor&a=Eliminar&nit=<?php echo $r->nit; ?>">Eliminar</a>
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



