<?php
	
	$id = $_GET['id'];

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];



	}

	$conn = mysqli_connect("localhost", "root", "", "crud");

	$update_sql = "UPDATE information SET name='$name', address='$address', mobile='$mobile', email='$email' WHERE id=$id;";

	$excute_insert_sql = mysqli_query($conn, $update_sql);

	if($excute_insert_sql){
		
		header("Location: index.php");
			
	}else{

		echo "data is not Updated";
	}
		