<?php 

	$id = $_GET['id'];

	$conn = mysqli_connect("localhost", "root", "", "crud");

	if($conn){
		
		$sql = "SELECT * FROM Information WHERE id=$id;";

		$result = mysqli_query($conn, $sql);

		$std = mysqli_fetch_assoc($result);





		

	} else {
		
		echo "Connection Failed";

	}

	

	

	

 ?>



<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>CRUD Application</title>
		<meta name="viewport" content="width=device-width" initial-scale="1.0" />
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		

		<div class="app-body"> 
			<div class="container"> 
				
				<div class="col-md-2 float-left">
					<a href="index.php" class="btn btn-primary">All Student List</a>

				</div>
				<div class="col-md-10 float-right">
					
					<h1 class="text-center">Update Student Informaiton</h1>
					<hr />


					<form action="update.php?id=<?php echo $id; ?>" method="post">

					  <div class="form-group">
					    <label for="name" >Name:</label>
					    <input type="text" value="<?php echo $std['name']; ?>" class="form-control" id="name" name="name" placeholder="Student Name" required>
					  </div>

					  <div class="form-group">
					    <label for="add">Address:</label>
					    <input type="text" class="form-control" id="add" name="address" value="<?php echo $std['address']; ?>" placeholder="Student Address">
					  </div>

					  <div class="form-group">
					    <label for="mobile" >Mobile:</label>
					    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Parents Phone Number" value="<?php echo $std['mobile']; ?>" required>

					    
					  </div>

					  <div class="form-group">
					    <label for="email" >Email:</label>
					    <input type="text" class="form-control" id="name" name="email" placeholder="Email Address" value="<?php echo $std['email']; ?>" required>
					  </div>
					  
					  <input type="submit" name="submit" class="btn btn-primary" value="Update Data">

					</form>

				</div>
			</div>

		</div>
		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>

</html>