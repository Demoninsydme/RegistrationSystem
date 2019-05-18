<?php
require('connection.php');
// include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
</head>
<body>

<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Id No</strong></th>
<th><strong>Username</strong></th>
<th><strong>Password</strong></th>
<th><strong>FirstName</strong></th>
<th><strong>LastName</strong></th>
<th><strong>MiddleName</strong></th>
<th><strong>Birthdate</strong></th>
<th><strong>Age</strong></th>
<th><strong>Gender</strong></th>
<th><strong>Grade</strong></th>
<th><strong>Address</strong></th>
<th><strong>Guardian</strong></th>
<th><strong>Relationship</strong></th>
<th><strong>Contact No.</strong></th>
<th><strong>EmailAddres</strong></th>
<th><strong>Status</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>

<tbody>
<?php
$count=1;
$query="SELECT * FROM users ORDER BY id desc;";
$result = mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
	<td align="center"><?php echo $row["username"]; ?></td>
	<td align="center"><?php echo $row["password"]; ?></td>
	<td align="center"><?php echo $row["fname"]; ?></td>
	<td align="center"><?php echo $row["lname"]; ?></td>
	<td align="center"><?php echo $row["mname"]; ?></td>
	<td align="center"><?php echo $row["bday"]; ?></td>
	<td align="center"><?php echo $row["age"]; ?></td>
	<td align="center"><?php echo $row["gender"]; ?></td>
	<td align="center"><?php echo $row["grade"]; ?></td>
	<td align="center"><?php echo $row["address"]; ?></td>
	<td align="center"><?php echo $row["guardian"]; ?></td>
	<td align="center"><?php echo $row["relationship"]; ?></td>
	<td align="center"><?php echo $row["contact"]; ?></td>
	<td align="center"><?php echo $row["email"]; ?></td>
	<td align="center"><?php echo $row["status"]; ?></td>
	<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
	<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>

</tbody>
</table>

</div>
</body>
</html>
