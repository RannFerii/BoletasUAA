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
            <a href="?c=maestro&a=Index">Fechas</a>
        </li>
        <li class="active">
                  Agregar      
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-7">
            <div class="panel ">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-fw ti-star"></i> Agregar fecha
                    </h3>
                    <span class="pull-right">
                            <i class="fa fa-fw ti-angle-up clickable"></i>
                            <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                     <form class="box-body "  action="?c=fecha&a=Guardar"  method="post" enctype="multipart/form-data" >
                       <div class="form-group" >
                            <label>
                               Primer departamental
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <input class="form-control fechaPrimerDepartamental" name="primerDepartamental"  placeholder="YYYY-MM-DD" >
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group" >
                            <label>
                               Segundo Departamental
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <input class="form-control fechaSegundoDepartamental" name="segundoDepartamental" placeholder="YYYY-MM-DD" >
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group" >
                            <label>
                               Parcial
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <input class="form-control fechaParcial" name="parcial" placeholder="YYYY-MM-DD" >
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group" >
                            <label>
                               Final A
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <input class="form-control fechaFinalA" name="finalA"  size="40"placeholder="YYYY-MM-DD" >
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group" >
                            <label>
                               Final B
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <!-- Para que no marqeu error se debe utilizar el ID origina del script dateRangePicker-->
                                <input class="form-control fechaFinalB "  name="finalB"  size="40"placeholder="YYYY-MM-DD" >
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="select21" class="control-label">
                               Ciclo escolar
                            </label>
                            <select id="select21" class="form-control select2" style="width:100%" name="cicloEscolarId">
                                <option value="">Seleccionar un ciclo escolar</option>
                                <?php foreach($this->model->ListarCicloEscolar() as $r): ?>
                                  <option value='<?php echo $r->cicloEscolarId; ?>'>
                                     <?php echo $r->nombre; ?>
                                   </option>
                                 <?php endforeach; ?>
                            </select>
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



