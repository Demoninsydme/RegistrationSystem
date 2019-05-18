<?php
include "connection.php";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	
<body>

<center><h1 class="one">All the users information</h1></center>

<form method='post' action="records.php">
<table>
<tr align='center'>
		<th>ID number</th>
		<th>Username</th>
		<th>Password</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Middle Name</th>
		<th>Birthdate</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Grade</th>
		<th>Address</th>
		<th>Guardian</th>
		<th>Relationship</th>
		<th>Contact</th>
		<th>Email</th>
		<th>Status</th>
		<th>Operation</th>

	</tr>


</form>

<?php


$sql = "SELECT * FROM users";
$result = $connect->query($sql);

if($result-> num_rows > 0){
	while ($row = $result-> fetch_assoc()){


?>
	<tr align='center'>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['password']; ?></td>
	<td><?php echo $row['fname']; ?></td>
	<td><?php echo $row['lname']; ?></td>
	<td><?php echo $row['mname']; ?></td>
	<td><?php echo $row['bday']; ?></td>
	<td><?php echo $row['age']; ?></td>
	<td><?php echo $row['gender']; ?></td>
	<td><?php echo $row['grade']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['guardian']; ?></td>
	<td><?php echo $row['relationship']; ?></td>
	<td><?php echo $row['contact']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['status']; ?></td>
	<td><a href="delete.php">Delete</a></td>

</tr>
<?php
	}
	echo "</table>";
}
else{
	echo "0 result";
}

$connect-> close();
?>

</table>
</body>
</html>