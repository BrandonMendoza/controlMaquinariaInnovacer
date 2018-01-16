<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Innovacero Software</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    


</head>

    
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" style="color: #fff">Innovaceros Mxli</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="empleados.php">Empleados</a>
                </li>
                <li>
                    <a href="nominas.html">Nominas</a>
                </li>
                <li>
                    <a href="trabajos.html">Trabajos</a>
                </li>
                <li>
                    <a href="almacen.html">Almacen</a>
                </li>
                <li>
                    <a href="index.php">Mantenimiento</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
    

   
<div class="row" style="height: 100%">
    <div class="col-sm-2" style="background-color: #F2F2F2; height: 100%"> </div>
    <div class="col-sm-8" style="background-color: #fff; height: 100%">



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Maquinaria</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#agregar_nueva_maq_modal"></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="maq_content"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Vehiculos</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#agregar_nuevo_veh_modal"></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="veh_content"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-2" style="background-color: #F2F2F2; height: 100%"></div>
</div>
    

     <!-- Modal - AGREGAR MAQUINARIA-->
<div class="modal fade" id="agregar_nueva_maq_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-toggle="validator">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Maquinaria Nueva</h4>
            </div>
            <div class="modal-body">

                <div class="form-group has-success">
                    <label for="tipo">Tipo</label>
                    <select class="form-control" id="tipo" placeholder="Tipo" required>
                      <option disabled selected value> -- Selecciona Tipo Maquinaria -- </option>
                      <option value="PARA SOLDAR">Para soldar</option>
                      <option value="PLASMA">Plasma</option>
                      <option value="ARCOAIR">Arcoair</option>
                    </select>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="text" id="clave" placeholder="Clave" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="color">Color</label>
                    <select class="form-control" id="color" placeholder="Color">
                    <option disabled selected value> -- Selecciona Color Maquinaria -- </option>
                      <option value="ROJO">Rojo</option>
                      <option value="AZUL">Azul</option>
                      <option value="BLANCO">Blanco</option>
                      <option value="GRIS">Gris</option>
                      <option value="AMARILLO">Amarillo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fecha_servicio">Fecha De Ultimo Servicio</label>
                    <div    class="input-group date form_date col-md-5" id="fecha1">
                        <input  class="form-control" size="16" type="text" value="" disabled/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <input type="hidden" id="dtp_input2" value="" /><br/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger glyphicon glyphicon-remove" data-dismiss="modal"></button>
                <button type="button" id="AgregarMaqBtn" class="btn btn-success glyphicon glyphicon-ok" onclick="addMaquinaria()"></button>
            </div>
        </div>
    </div>
</div>
    <!-- // Modal -->



<!-- Modal - AGREGAR VEHICULO-->
    <div class="modal fade" id="agregar_nuevo_veh_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Vehiculo Nuevo</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" id="tipoV" placeholder="Tipo">
                          <option disabled selected value> -- Selecciona Tipo Vehiculo -- </option>
                          <option value="AUTOMOVIL">Automovil</option>
                          <option value="ELEVADOR">Elevador</option>
                          <option value="PICKUP">Pickup</option>
                          <option value="GRUA MECANICA">Grua mecanica</option>
                          <option value="TROQUE">Troque</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" id="marcaV" placeholder="Marca" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" id="modeloV" placeholder="Modelo" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="color">Color</label>
                        <select class="form-control" id="colorV" placeholder="Color">
                            <option disabled selected value> -- Selecciona color Vehiculo -- </option>
                          <option value="ROJO">Rojo</option>
                          <option value="AZUL">Azul</option>
                          <option value="BLANCO">Blanco</option>
                          <option value="GRIS">Gris</option>
                          <option value="AMARILLO">Amarillo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="placas">Placas</label>
                        <input type="text" id="placasV" placeholder="Placas" class="form-control"/>
                    </div>

                    <div class="form-group">


                        <label for="fecha_servicio">Fecha De Ultimo Servicio</label>

                        <div    class="input-group date form_date col-md-5" 
                                id="fechaV">
                            <input  class="form-control" 
                                    size="16"
                                    type="text" 
                                    value="" 
                                    disabled/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>

                        <input type="hidden" id="dtp_input2" value="" /><br/>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger glyphicon glyphicon-remove" data-dismiss="modal"></button>
                    <button type="button" class="btn btn-success glyphicon glyphicon-ok" onclick="addVehiculo()"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal -->


    <!-- Modal -MODIFICAR MAQUINARIA  update_user_modal-->
    <div class="modal fade" id="actualizar_maquinaria_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Actualizar Maquinaria</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="tipo">Tipo</label>

                         <select class="form-control" id="actualizar_tipoM" placeholder="Tipo">
                         <option disabled selected value> -- Selecciona Tipo Maquinaria -- </option>
                          <option value="PARA SOLDAR">Para soldar</option>
                          <option value="PLASMA">Plasma</option>
                          <option value="ARCOAIR">Arcoair</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="color">Color</label>
                        <select class="form-control" id="actualizar_colorM" placeholder="Color">
                        <option disabled selected value> -- Selecciona color Maquinaria -- </option>
                          <option value="ROJO">Rojo</option>
                          <option value="AZUL">Azul</option>
                          <option value="BLANCO">Blanco</option>
                          <option value="GRIS">Gris</option>
                          <option value="AMARILLO">Amarillo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fecha_servicio">Fecha De Ultimo Servicio</label>
                        <div    class="input-group date form_date col-md-5" id="actualizar_fechaM">
                            <input  class="form-control" size="16" type="text" value="" disabled/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <input type="hidden" id="dtp_input2" value="" /><br/>
                    </div>
     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger glyphicon glyphicon-remove" data-dismiss="modal"></button>
                    <button type="button" class="btn btn-success glyphicon glyphicon-ok" onclick="actualizarInformacionMaq()" ></button>
                    <input type="hidden" id="escondido_idM">
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal -->



    <!-- Modal -MODIFICAR VEHICULO -->
    <div class="modal fade" id="actualizar_vehiculo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Actualizar Vehiculo</h4>
                </div>
                <div class="modal-body">
     
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" id="actualizar_tipoV" placeholder="Tipo">
                        <option disabled selected value> -- Selecciona Tipo Vehiculo -- </option>
                          <option value="PARA SOLDAR">Para soldar</option>
                          <option value="PLASMA">Plasma</option>
                          <option value="ARCOAIR">Arcoair</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" id="actualizar_marcaV" placeholder="Marca" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" id="actualizar_modeloV" placeholder="Modelo" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="color">Color</label>    
                        <select class="form-control" id="actualizar_colorV" placeholder="Color">
                          <option disabled selected value> -- Selecciona Color -- </option>
                          <option value="ROJO">Rojo</option>
                          <option value="AZUL">Azul</option>
                          <option value="BLANCO">Blanco</option>
                          <option value="GRIS">Gris</option>
                          <option value="AMARILLO">Amarillo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="placas">Placas</label>
                        <input type="text" id="actualizar_placasV" placeholder="Placas" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="fecha_servicio">Fecha De Ultimo Servicio</label>
                        <div    class="input-group date form_date col-md-5" id="actualizar_fechaV">
                            <input  class="form-control" size="16" type="text" value="" disabled/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <input type="hidden" id="dtp_input2" value=""/><br/>
                    </div>
     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger glyphicon glyphicon-remove" data-dismiss="modal"></button>
                    <button type="button" class="btn btn-success glyphicon glyphicon-ok" onclick="actualizarInformacionVeh()"></button>
                    <input type="hidden" id="escondido_idV">
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="Bootstrap/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Bootstrap/bootstrap.min.js"></script>
    <script src="Bootstrap/jquery.dataTables.min"></script>
    <script src="Bootstrap/dataTables.bootstrap.min.js"></script>
    <script src="Bootstrap/bootbox.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="Bootstrap/bootstrap-datetimepicker.min.js"></script>
    <script src="Bootstrap/bootstrap-datetimepicker.js"></script>
    <script src="Bootstrap/jquery-ui.js"></script>
    <script src="Bootstrap/jquery-ui.min.js"></script>
</body>

</html>