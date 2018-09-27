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
                        <i class="fa fa-fw ti-star"></i> Agregar fecha
                    </h3>
                    <span class="pull-right">
                            <i class="fa fa-fw ti-angle-up clickable"></i>
                            <i class="fa fa-fw ti-close removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                     <form class="box-body "  action="?c=fecha&a=Guardar"  method="post" enctype="multipart/form-data" >
                        <!--Se ocultan puesto que si se eliminan marca error en el script,
                            lo anterior sucede ya que el scrip invoca los id's de todos los datepicker,
                            es recomendable no borrar esos scripts por si se llegaran a utilizar
                            Corroborar con el inspector de codigo ------------>
                        <div class="form-group" style="display:none"> 
                            <label>
                                Batch mode ( week ):
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <input class="form-control" id="date-range14" size="60" value=""
                                       placeholder="YYYY-MM-DD to YYYY-MM-DD">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group" style="display:none">
                            <label>
                                Date picker:
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="date-range0"
                                       placeholder="YYYY-MM-DD to YYYY-MM-DD"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group" style="display:none">                  
                            <label>
                                Date and Time Picker:
                            </label>
                            <div class="input-group ">
                                <input type="text" class="form-control" id="dateclock"
                                       placeholder="YYYY-MM-DD HH:MM ~ YYYY-MM-DD HH:MM">
                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group" style="display:none"> 
                            <label>
                                Span instead of Input:
                            </label>
                            <div class="input-group">
                                <span id="date-range9"
                                      style="background-color:#6699cc; color:white;padding:3px; cursor:pointer; border-radius:4px;">YYYY-MM-DD to YYYY-MM-DD</span>
                            </div>
                        </div>
                        <div class="form-group" style="display:none"> 
                            <label>
                                Date picker with Animation:
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-time"></i>
                                </div>
                                <input id="date-range50" size="30" value="" class="form-control"
                                       placeholder="YYYY-MM-DD to YYYY-MM-DD">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group" style="display:none"> 
                            <label>
                                Hotel booking:
                            </label>
                            <div class="input-group">

                                <input id="hotel-booking" class="form-control" size="60" value=""
                                       placeholder="Days Booked">
                                <span>
                                </span>
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="display:none">
                            <label>
                                Select backward:
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <input class="form-control" id="date-range26" size="30" value=""
                                       placeholder="YYYY-MM-DD to YYYY-MM-DD">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group" style="display:none">
                            <label for='datetimepicker1'>
                                Date Picker:
                            </label>
                            <div class="input-group ">
                                <input type="text" class="form-control" id="datetimepicker1">
                                <span class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <!--Aqui terminan los dapickers a ignorar--------------------------------------------------------------->
                        <!--Comienza el formulario de fecha-->
                       <div class="form-group" >
                            <label>
                               Primer departamental
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-fw ti-calendar"></i>
                                </div>
                                <input class="form-control fechaPrimerDepartamental " value="<?php echo $fecha->primerDepartamental; ?>" name="primerDepartamental"   >
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
                                <input class="form-control fechaSegundoDepartamental " value="<?php echo $fecha->segundoDepartamental; ?>" name="segundoDepartamental" placeholder="YYYY-MM-DD" >
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
                                <input class="form-control fechaParcial" value="<?php echo $fecha->parcial; ?>" name="parcial" placeholder="YYYY-MM-DD" >
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
                                <input class="form-control fechaFinalA" value="<?php echo $fecha->finalA; ?>" name="finalA"  size="40"placeholder="YYYY-MM-DD" >
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
                                <!-- Para que no marque error se debe utilizar el ID origina del script dateRangePicker-->
                                <input class="form-control " value="<?php echo $fecha->finalB; ?>" id="date-range13-2" name="finalB"  size="40" placeholder="YYYY-MM-DD" >
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="select21" class="control-label">
                               Ciclo escolar
                            </label>
                            <select id="select21" class="form-control select2" style="width:100%" name="cicloEscolarId">
                                <option value="">Seleccionar un ciclo escolar</option>

                                <?php 
                                    $actualCicloEscolar= $this->model->CicloEscolarNombre($fecha->cicloEscolarId);
                                    foreach($this->model->ListarCicloEscolar() as $r)
                                    {
                                      
                                        if($r->nombre == $actualCicloEscolar )
                                        {
                                            echo "<option selected='selected' value='".$r->cicloEscolarId."'>".$r->nombre."</option>";
                                        }else
                                        {
                                            echo "<option value='".$r->cicloEscolarId."'>".$r->nombre."</option>";
                                        }
                                    }
                                ?>
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



