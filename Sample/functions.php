    
<?php
include "connection.php";
 function showData(){
 	global $connect;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connect,$query);
	if(!$result){
		die('Query failed' . mysqli_error());
	}
  	while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $username = $row['username'];
        $text = "{$id} - {$username}";
        echo "<option value='{$id}'>{$text}</option>";
	}
}


function delete(){
	global $connection;
	$id = $_POST['id'];

	$query = "DELETE from users  where id= '$id'";

	$result = mysqli_query($connect,$query);
		if(!$result){
			die("gg".mysqli_error());
		}
	
}