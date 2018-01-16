<?php
    // include Database connection file
    include("../db_conexion.php");
     
    // check request
    if(isset($_POST['id']) && isset($_POST['tipo']) && isset($_POST['marca']) && isset($_POST['modelo']) && isset($_POST['color']) && isset($_POST['placas']) && isset($_POST['fechaUS']) && isset($_POST['fechaActual']))
    {
        // get values
        $id= $_POST['id'];
        $tipo = $_POST['tipo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $placas = $_POST['placas'];
        $fechaUS = $_POST['fechaUS'];
        $fechaActual = $_POST['fechaActual'];

        //CALCULAR DIAS
        $startTimeStamp = strtotime($fechaUS);
        $endTimeStamp = strtotime($fechaActual);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        $numberDays = $timeDiff/86400;
        $numberDays = intval($numberDays);
     
        // Updaste User details
        $query = "UPDATE vehiculo SET tipoVei = '$tipo', marcaVei = '$marca', modeloVei = '$modelo', colorVei = '$color',placasVei = '$placas', fechaUServicioVei = '$fechaUS' , diasSinServVei = '$numberDays' WHERE idvehiculo = '$id'";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
    }
?>