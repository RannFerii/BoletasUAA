
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
                <div class="col-md-7">
                    <div class="panel ">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw ti-star"></i> Agregar profesor
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <form id="form-validation"  action="?c=maestro&a=Editar" method="post" 
                            enctype="multipart/form-data" class="form-horizontal">

                                 <input type="hidden" name="maestroId" value="<?php echo $maestro->maestroId; ?>" />

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nombre">
                                        Nombre
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="nombre"  name="nombre" 
                                        class="form-control" value="<?php echo $maestro->nombre; ?>"
                                               placeholder="Introduce un nombre" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="val-apellidoPaterno">
                                        Apellido paterno
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="val-apellidoPaterno"  name="apellidoPaterno" 
                                        value="<?php echo $maestro->apellidoPaterno; ?>" class="form-control"
                                               placeholder="Introduce un apellido paterno" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="val-apellidoMaterno">
                                        Apellido materno
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="val-apellidoMaterno"  name="apellidoMaterno" 
                                        value="<?php echo $maestro->apellidoMaterno; ?>" class="form-control"
                                               placeholder="Introduce un apellido materno" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">
                                        Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" name="email" class="form-control"
                                        value="<?php echo $maestro->email; ?>"
                                               placeholder="Introduce un E-mail" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">
                                        Telefono
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="number" name="telefono" class="form-control"
                                        value="<?php echo $maestro->telefono; ?>"
                                               placeholder="Introduce un número telefónico">
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Editar</button>
                                        <button type="reset" class="btn btn-effect-ripple btn-default reset_btn">Borrar campos
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</section>



