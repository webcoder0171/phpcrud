<?php 
	
	$id = $_GET['id'];
	$conn = mysqli_connect("localhost", "root", "", "crud");

	$sql = "DELETE FROM information WHERE id=$id";

	$execute = mysqli_query($conn, $sql);

	

	if($execute){

		header("Location: index.php");

	}else{

		echo "Not Deleted";
	}



 ?>