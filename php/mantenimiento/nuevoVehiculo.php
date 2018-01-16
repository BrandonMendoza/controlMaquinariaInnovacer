<?php
    if(isset($_POST['tipo']) && isset($_POST['marca']) && isset($_POST['modelo']) && isset($_POST['color']) && isset($_POST['placas']) && isset($_POST['fechaUServ']) && isset($_POST['fechaActual']))
    {
        // include Database connection file 
        include("../db_conexion.php");
        // get values 
        $tipo = $_POST['tipo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $placas = $_POST['placas'];
        $fechaUS = $_POST['fechaUServ'];
        $fechaActual = $_POST['fechaActual'];

        $startTimeStamp = strtotime($fechaUS);
        $endTimeStamp = strtotime($fechaActual);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        $numberDays = $timeDiff/86400;
        $numberDays = intval($numberDays);
 
        $query = "INSERT INTO vehiculo(tipoVei,marcaVei,modeloVei,colorVei,placasVei,fechaUServicioVei,diasSinServVei) 
                    VALUES('$tipo', '$marca', '$modelo','$color','$placas','$fechaUS','numberDays')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
    }
?>