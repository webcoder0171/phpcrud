<?php 
	$conn = mysqli_connect("localhost", "root", "", "crud");

	if($conn){
		
		$sql = "SELECT * FROM information";

		$sql_execute = mysqli_query($conn, $sql);

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
					<a href="insert.php" class="btn btn-primary">Add New Student</a>

				</div>
				<div class="col-md-10 float-right">
					
					<h1 class="text-center">All Students List</h1>
					<hr />

					<table class="table">
						<tbody>
							<tr>
								<th>ID</th>
								<th>Student Name</th>
								<th>Adress</th>
								<th>Mobile No.</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						<?php $i = 0; ?>
						<?php while($rows = mysqli_fetch_assoc($sql_execute)) { ?>

							<?php $i++; ?>
							<tr class="color"> <!-- This will be looped -->
								<td><?php echo $i; ?></td>
								<td><?php echo $rows['name']; ?></td>
								<td><?php echo $rows['address']; ?></td>
								<td><?php echo $rows['mobile']; ?></td>
								<td><?php echo $rows['email']; ?></td>
								<td class="action">
									<a href="view.php?id=<?php echo $rows['id']; ?>" class="btn btn-info">View</a>
									<a href="edit.php?id=<?php echo $rows['id']; ?>" class="btn btn-warning">Edit</a>
									<a href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure');">Delete</a>
								</td>
							</tr>

						<?php } ?>
							


						</tbody>	
					</table>
				</div>
			</div>

		</div>
		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>

</html>