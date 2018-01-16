<?php
	include("../db_conexion.php");

    // get values
   

	if(isset($_POST['fechaActual'])){


		$fechaActual= $_POST['fechaActual'];
	    //CALCULAR DIAS
	    
		
		$query = mysqli_query($con,"SELECT * FROM maquinaria");

		
		while ($row=mysqli_fetch_assoc($query)) {
			
			$id= $row['idmaquinaria'];
	    	/*$tipo = $row[''];
	    	$color = $row[''];
	    	*/
	    	//$fechaUS = date('yyyy/mm/dd');
	    	$fechaUS = $row['fechaUServMaq'];
	    	

	    	$startTimeStamp = strtotime($fechaUS);
	    	$endTimeStamp = strtotime($fechaActual);
	    	$timeDiff = abs($endTimeStamp - $startTimeStamp);
	    	$numberDays = $timeDiff/86400;
	    	$numberDays = intval($numberDays);


			



	    	$query2 = "UPDATE maquinaria SET diasSinServMaq = '$numberDays' WHERE idmaquinaria = '$id'";
        	if (!$result2 = mysqli_query($con, $query2)) {
            	exit(mysqli_error($con));
        	}
		}


		/*
		$to = "brandon.mendoza.tovar@uabc.edu.mx";
		$subject = "Hi!";
		$body = "Hi,\n\nHow are you?";
		if (mail($to, $subject, $body)) {
			echo("<p>Email successfully sent!</p>");
		} else {
			echo("<p>Email delivery failed…</p>");
		}
		*/
		// the message
		
		$msg = "First line of text\nSecond line of text";

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: Brandon mendoza <info@address.com>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// send email

		if (mail("brandontovar@msn.com","My subject",$msg,$headers)) {
			echo("<p>Email successfully sent!</p>");
		} else {
			echo("<p>Email delivery failed…</p>");
		}

		$query = mysqli_query($con,"SELECT * FROM vehiculo");
		while ($row=mysqli_fetch_assoc($query)) {
			
			$idV= $row['idvehiculo'];
	        /*
	        $tipoV = $row[''];
	        $marcaV = $row[''];
	        $modeloV = $row[''];
	        $colorV = $row[''];
	        $placasV = $row[''];*/
	        //$fechaUSV = date('yyyy/mm/dd');
	        $fechaUSV = $row['fechaUServicioVei'];

	    	$startTimeStampV = strtotime($fechaUSV);
	    	$endTimeStampV = strtotime($fechaActual);
	    	$timeDiffV = abs($endTimeStampV - $startTimeStampV);
	    	$numberDaysV = $timeDiffV/86400;
	    	$numberDaysV = intval($numberDaysV);

	    	$query2 = "UPDATE vehiculo SET diasSinServVei = '$numberDaysV' WHERE idvehiculo = '$idV'";
        	if (!$result2 = mysqli_query($con, $query2)) {
            	exit(mysqli_error($con));
        	}
		}
	}
?>
