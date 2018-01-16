<?php
    // include Database connection file
    include("../db_conexion.php");
     
    // check request
    if(isset($_POST['id']) && isset($_POST['tipo']) && isset($_POST['color']) && isset($_POST['fechaUS']) && isset($_POST['fechaActual']))
    {
        // get values
        $id= $_POST['id'];
        $tipo = $_POST['tipo'];
        $color = $_POST['color'];
        $fechaUS = $_POST['fechaUS'];


        //CALCULAR DIAS
        $startTimeStamp = strtotime($fechaUS);
        $endTimeStamp = strtotime($fechaActual);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        $numberDays = $timeDiff/86400;
        $numberDays = intval($numberDays);
        
     
        // Updaste User details
        $query = "UPDATE maquinaria SET tipoMaq = '$tipo', colorMaq = '$color', fechaUServMaq = '$fechaUS', diasSinServMaq = '$numberDays' WHERE idmaquinaria = '$id'";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
    }
?>