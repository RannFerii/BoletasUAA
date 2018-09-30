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
            <a href="?c=maestro&a=Index">Alumnos</a>
        </li>
        <li class="active">
                  Editar Alumno      
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
                <div class="col-md-7">
                    <div class="panel ">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw ti-star"></i> Editar alumno
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <form id="form-validation"  action="?c=alumno&a=Actualizar" method="post" enctype="multipart/form-data"
                                  class="form-horizontal">
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="nombre">
                                        Matrícula UAA
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="nombre"  name="matriculaUAA" 
                                        class="form-control" value="<?php echo $alumno->matriculaUAA; ?>"
                                               placeholder="Introduce un nombre" readonly required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nombre">
                                        Matrícula UNAM
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="nombre"  name="matriculaUNAM" 
                                        class="form-control" value="<?php echo $alumno->matriculaUNAM; ?>"
                                               placeholder="Introduce un nombre" required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nombre">
                                        Nombre
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="nombre"  name="nombre" 
                                        class="form-control" value="<?php echo $alumno->nombre; ?>"
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
                                        value="<?php echo $alumno->apellidoPaterno; ?>" class="form-control"
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
                                        value="<?php echo $alumno->apellidoMaterno; ?>" class="form-control"
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
                                        value="<?php echo $alumno->email; ?>"
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
                                        value="<?php echo $alumno->telefono; ?>"
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



