<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("../db_conexion.php");
 
    // get user id
    $vehiculo_id = $_POST['id'];
 
    // delete User
    $query = "DELETE FROM vehiculo WHERE idvehiculo = '$vehiculo_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>