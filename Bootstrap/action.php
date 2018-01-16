<?php
	session_start();
	include_once('conexionBD.php');
	if(isset($_POST['bulk_delete_submit'])){
	    $idArr = $_POST['checked_id'];
	    foreach($idArr as $id){
	        mysqli_query($conn,"DELETE FROM maquinaria WHERE idmaquinaria=".$id);
	    }
	    $_SESSION['success_msg'] = 'Users have been deleted successfully.';
	    header("Location:index.php");
	}
?>