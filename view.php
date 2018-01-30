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
					<a href="index.php" class="btn btn-primary">Student List</a>

				</div>
				<div class="col-md-10 float-right">
					
					<h1 class="text-center">Brief Information</h1>
					<hr />
					<div class="viewtable"> 
						<table class="table" style="">
						<tbody>
							<tr>
								<th class="nbg">Name :</th>
								<td><?php echo $std['name']; ?></td>
								
							</tr>
							<tr>
								
								<th class="nbg">Address :</th>
								<td><?php echo $std['address']; ?></td>
							</tr>

							<tr>
								<th class="nbg">Mobile :</th>
								<td><?php echo $std['mobile']; ?></td>
							</tr>

							<tr>
								
								<th class="nbg">Email :</th>
								<td><?php echo $std['email']; ?></td>
							</tr>
						</tbody>
						</table>
					</div>
					

					

				</div>
			</div>

		</div>
		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>

</html>