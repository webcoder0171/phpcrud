<?php
	


	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];



	}

	$conn = mysqli_connect("localhost", "root", "", "crud");

	$insert_sql = "INSERT INTO information VALUES(NULL, '$name', '$address', '$mobile', '$email');";

	$excute_insert_sql = mysqli_query($conn, $insert_sql);

	if($excute_insert_sql){
		echo "Data inserted Successfully";
		header("Location: insert.php");
			
	}else{

		echo "data is not inserted";
	}
				





