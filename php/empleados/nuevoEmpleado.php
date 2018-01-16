<?php
    if(isset($_POST['nom']) && 
        isset($_POST['ap']) && 
        isset($_POST['am']) && 
        isset($_POST['puesto']) && 
        isset($_POST['sueldo']))
    {
        // include Database connection file 
        include("../db_conexion.php");
        // get values 
        
        //&& 
        //isset($_POST['fechaNac']) && 
        //isset($_POST['fechaActual'])

        $nom = $_POST['nom'];
        $ap = $_POST['ap'];
        $am = $_POST['am'];
        $puesto = $_POST['puesto'];
        $sueldo = $_POST['sueldo'];
        //echo $nom." ".$ap." ".$am." ".$puesto." ".$sueldo;
        echo "hola";
 
        $query = "INSERT INTO empleado(nomEmp,apEmp,amEmp,puesto,sueldo) VALUES('$nom','$ap','$am','$puesto','$sueldo')";

                
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }

        
        
    }
?>