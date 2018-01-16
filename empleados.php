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

    <!-- Input File -->
    <link href="css/fileinput.min.css" rel="stylesheet" type="text/css">


    


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
    

<div class="container">
    <div class="row" style="height: 100%">
        
        <div class="col-sm-10" style="background-color: #fff; height: 100%">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="page-header">
                        <h1>Empleados</h1>
                    </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <button class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#agregar_nuevo_emp_modal"></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="emp_contenido"></div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>

    <?php include 'php/empleados/subirArchivo.php'; ?>

     <!-- Modal - AGREGAR EMPLEADO-->
    <form id="formSub" action="" method="POST" enctype="multipart/form-data" onsubmit="agregarEmp()">
    <div class="modal fade" id="agregar_nuevo_emp_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-toggle="validator" style="max-height: calc(100vh - 210px);
    overflow-y: auto">
    
    
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Empleado nuevo</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group has-success">
                        <label for="nom">Nombre</label>
                        <input type="text" id="nom" placeholder="Nombre" class="form-control"/>
                    </div>

                    <div class="form-group has-success">
                        <label for="ap">Apellido Paterno</label>
                        <input type="text" id="ap" placeholder="Apellido Paterno" class="form-control"/>
                    </div>

                    <div class="form-group has-success">
                        <label for="am">Apellido Materno</label>
                        <input type="text" id="am" placeholder="Apellido Materno" class="form-control"/>
                    </div>

                    <div class="form-group has-success">
                        <label for="puesto">Puesto</label>
                        <select class="form-control" id="puesto" placeholder="Puesto" required>
                          <option disabled selected value> -- Selecciona Puesto  -- </option>
                          <option value="SOLDADOR">Soldador</option>
                          <option value="ARMADOR">Armador</option>
                          <option value="AYUDANTE">Ayudante</option>
                          <option value="OPERADOR DE GRUA">Operador de grua</option>
                          <option value="ADMINISTRACION">ADMINISTRACION</option>
                        </select>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group has-success">
                        <label for="Sueldo">Sueldo</label>
                        <input type="text" id="sueldo" placeholder="Sueldo" class="form-control"/>
                    </div>

                    
                    <div class="form-group">
                        <label for="fechaNac">Fecha De Nacimiento</label>
                        <div class="input-group date form_date col-md-5" id="fechaNac">
                            <input  class="form-control" size="16" type="text" value="" disabled/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <input type="hidden" id="fechaNac" value="" /><br/>
                    </div>


                    


                     <div class="form-group">
                        <label for="RFC">RFC</label>
                        <input id="image" name="image" class="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                    </div>

                    <div class="form-group">
                        <label for="curp">Curp</label>
                        <input class="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                    </div>

                    <div class="form-group">
                        <label for="curp">No imss</label>
                        <input class="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                    </div>

                    <div class="form-group">
                        <label for="curp">IFE</label>
                       <input class="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                    </div>

                    <div class="form-group">
                        <label for="curp">Acta de Nac.</label>
                        <input class="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                    </div>

                    <div class="form-group">
                        <label for="curp">Comprobante de Domicilio</label>
                        <input class="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                    </div>

                    <div class="form-group">
                        <label for="curp">Carta de no antecedentes</label>
                        <input class="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger glyphicon glyphicon-remove" data-dismiss="modal"></button>
                    <button type="submit" id="AgregarMaqBtn" class="btn btn-success glyphicon glyphicon-ok"></button>
                </div>
                
            </div>
        </div>

        


    </div>
    </form>
    <!-- // Modal -->






    <!-- Modal -MODIFICAR EMPLEADO  update_user_modal-->
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



    


    <!-- jQuery -->
    <script src="Bootstrap/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Bootstrap/bootstrap.min.js"></script>
    <script src="Bootstrap/jquery.dataTables.min"></script>
    <script src="Bootstrap/dataTables.bootstrap.min.js"></script>
    <script src="Bootstrap/bootbox.min.js"></script>
    <script type="text/javascript" src="js/empleadosScripts.js"></script>
    <script src="Bootstrap/bootstrap-datetimepicker.min.js"></script>
    <script src="Bootstrap/bootstrap-datetimepicker.js"></script>
    <script src="Bootstrap/jquery-ui.js"></script>
    <script src="Bootstrap/jquery-ui.min.js"></script>
    <!-- UPLOAD FILE PLUGIN -->
    <script type="text/javascript" src="js/plugins/fileinput.min.js"></script>
</body>
</html>