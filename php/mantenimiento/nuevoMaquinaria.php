<?php
    if(isset($_POST['tipo']) && 
        isset($_POST['clave']) && 
        isset($_POST['color']) && 
        isset($_POST['fechaUS']) && 
        isset($_POST['fechaActual']))
    {
        // include Database connection file 
        include("../db_conexion.php");
        // get values 
        $tipo = $_POST['tipo'];
        $clave = $_POST['clave'];
        $color = $_POST['color'];
        $fechaUS = $_POST['fechaUS'];
        $fechaActual = $_POST['fechaActual'];

        $startTimeStamp = strtotime($fechaUS);
        $endTimeStamp = strtotime($fechaActual);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        $numberDays = $timeDiff/86400;
        $numberDays = intval($numberDays);
        // 86400 seconds in one day
        
 
        $query = "INSERT INTO maquinaria(tipoMaq,claveMaq,colorMaq,fechaUServMaq,diasSinServMaq) 
                VALUES('$tipo', '$clave', '$color','$fechaUS','$numberDays')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
    }
?>