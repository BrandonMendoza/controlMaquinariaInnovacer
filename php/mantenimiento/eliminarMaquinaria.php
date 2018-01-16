<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("../db_conexion.php");
 
    // get user id
    $maquinaria_id = $_POST['id'];
 
    // delete User
    $query = "DELETE FROM maquinaria WHERE idmaquinaria = '$maquinaria_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>