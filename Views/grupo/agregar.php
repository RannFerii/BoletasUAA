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
                                <i class="fa fa-fw ti-star"></i> Agregar grupo
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <form id="form-validation"  action="?c=grupo&a=Guardar" method="post" enctype="multipart/form-data"
                                  class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nombreGrupo">
                                        Nombre
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="nombreGrupo"  name="nombreGrupo" 
                                        class="form-control" value="<?php echo $grupo->nombreGrupo; ?>"
                                               placeholder="Introduce un nombre" required="required">
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Agregar</button>
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



