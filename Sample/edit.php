<?php
require "connection.php";
include "functions.php";

if (isset($_POST['submit'])) {
	global $connect;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
	$result = mysqli_query($connection, $query);
	if (!$result){
		print_r(mysql_error());
		die('Mysql Error...!');
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container mx-auto border border-success 
	rounded-lg">
	<h1>UPDATE</h1>

		<div class="col-xs-4">
		<form method='post' action=update.php>
			<div class="form-group">
			
				<label>Username:</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control">
			</div>
			<select name="id" id="">
				<?php
					showData();
				?>
			</select>
			<input type="submit" name="submit" value="UPDATE" class="btn btn-primary">

		</form>

		</div>

	</div>


</body>
</html>