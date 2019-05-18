<!DOCTYPE html>

<?php
include("connection.php");
?>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
   	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>

<body>


<div class="header">
</div>

<div id="navbar">
  <a class="active" href="index.php">Home</a>
  <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm" data-whatever="@getbootstrap">Log in</a>
  <a href="javascript:void(0)">Contact</a>
</div>
<!-- <nav class="navbar navbar-expand-lg navbar-fixed-top">
	  <img src="images/logo3.png">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse navbar-right" id="navbarText" >
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active ">
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li>
	      	<a class="nav-link" data-toggle="modal" data-target="#modalLoginForm" data-whatever="@getbootstrap">Log in</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="Register.php">Register</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="records.php">Records</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Admission</a>
	      </li>
		  <li class="nav-item">
	        <a class="nav-link" href="#">About us</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Mission/Vision</a>
	      </li>    
	    </ul>
	  </div>
	</nav> -->

<form method="post" action="register.php" class="text-center p-5 d-flex justify-content-center">

	<div class="container col-md-6 ">
	<p class="pt-2 h2 mb-3" align="center">Sign up</p>
    <div class="form-row mb-4">
        <div class="col">
           <label for="username" class="col-xs-2 col-form-label">Username</label>
            <input type="text" name='username' class="form-control" placeholder="Username" required>
        </div>
        <div class="col">
            <label for="password" class="col-xs-2 col-form-label">Password</label>
            <input type="password" name='password' class="form-control" placeholder="Password" required>
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
            <label for="fname" class="col-xs-2 col-form-label">First Name</label>
            <input type="text" name='fname' class="form-control" placeholder="First Name" required>
        </div>
        <div class="col">
            <label for="lname" class="col-xs-2 col-form-label">Last Name</label>
            <input type="text" name='lname' class="form-control" placeholder="Last Name" required>
        </div>
        <div class="col">
            <label for="mname" class="col-xs-2 col-form-label">Middle Name</label>
            <input type="text" name='mname' class="form-control" placeholder="Middle Name" required>
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col-md-4">
           <label for="bday" class="col-xs-1 col-form-label">Birthdate</label>
            <input type="date" name='bday' class="form-control" required>
        </div>
        <div class="col-md-2">
            <label for="age" class="col-xs-2 col-form-label">Age</label>
            <input type="number" name='age' class="form-control" placeholder="Age" required>
        </div>
        <div class="col">
            <label for="inputEmail3" class="col-xs-3 col-form-label">Gender</label><br>
            <select name='gender' class="form-control" required>
  			<option selected>Choose...</option>
        	<option value="Male">Male</option>
			<option value="Female">Female</option></select>
        </div>
        <div class="col">
	        <label for="inputEmail3" class="col-xs-3 col-form-label">GradeLevel</label><br>
	        <select name='grade' class="form-control" required>
	        <option selected>Choose...</option>
			<option value="Grade1">Grade 1</option>
			<option value="Grade2">Grade 2</option>
			<option value="Grade3">Grade 3</option>
			<option value="Grade4">Grade 4</option>
			<option value="Grade5">Grade 5</option>
			<option value="Grade6">Grade 6</option>
			<option value="Grade7">Grade 7</option>
			<option value="Grade8">Grade 8</option>
			<option value="Grade9">Grade 9</option>
			<option value="Grade10">Grade 10</option>
			<option value="Grade11">Grade 11</option>
			<option value="Grade12">Grade 12</option></select>
	    </div>
  	</div>
		    <label for="address" class="col-xs-2 col-form-label">Address</label>
		    <input type="text" name='address' class="form-control mb-4" placeholder="Complete Address" required>
    <div class="form-row mb-4">
        <div class="col-md-8">
           <label for="guardian" class="col-xs-2 col-form-label">Guardian Name</label>
            <input type="text" name='guardian' class="form-control" placeholder="Guardian Name" required>
        </div>
        <div class="col">
            <label for="relationship" class="col-xs-2 col-form-label">Relationship</label>
            <input type="text" name='relationship' class="form-control" placeholder="Relationship" required>
        </div>
    </div>
 	<div class="form-row mb-4">
        <div class="col">
            <label for="contact" class="col-xs-2 col-form-label">Contact Number</label>
            <input type="number" name='contact' class="form-control" placeholder="Contact Number" required>
        </div>
        <div class="col">
            <label for="email" class="col-xs-2 col-form-label">Email Address</label>
            <input type="email" name='email' class="form-control" placeholder="Email Address" required>
        </div>
    </div>
    <input class="btn btn-info my-4 btn-block" name='submit' type="submit">	
    <p class="p-10">Already have an account?<a type="text" href="index.php">Log in</a></p>

</div>
</form>
</body>
</html>

<?php
	
	if(isset ($_POST ['submit'])){		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fname = $_POST['fname'];
		$lname=$_POST['lname'];
		$mname=$_POST['mname'];
		$bday=$_POST['bday'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$grade=$_POST['grade'];
		$address=$_POST['address'];
		$guardian=$_POST['guardian'];
		$relationship=$_POST['relationship'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		
		
$email_ex = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_ex,$email)) {
	  
		echo "<script>alert('Email $email is not valid')</script>";
		exit();
  }

	$check_email ="select * From users where email='$email'";
	$run = mysqli_query($connect,$check_email);
	
	if(mysqli_num_rows($run)>0) {
		echo "<script>alert('Email $email is already exist in our database. Please try another one')</script>";
		exit();
		}
		
	$check_username="select * From users where username='$username'";
	$rn = mysqli_query($connect,$check_username);
	
	if(mysqli_num_rows($rn)>0){
		echo "<script>alert('Username $username is already exist in our database, plz try another one')</script>";
		exit();
		}
	$check_contact="select * From users where contact='$contact'";
	$r = mysqli_query($connect,$check_contact);
	
	if(mysqli_num_rows($r)>0){
		echo "<script>alert('contact $contact is already exist in our database, plz try another one')</script>";
		exit();
		}

	$query = "INSERT INTO users (username,password,fname,lname,mname,bday,age,gender,grade,address,guardian,relationship,contact,email) VALUES ('$username','$password','$fname','$lname','$mname','$bday','$age','$gender','$grade','$address','$guardian','$relationship','$contact', '$email')";
	$result = mysqli_query($connect, $query);	
	$query = "INSERT INTO usersback (username,password,fname,lname,mname,bday,age,gender,grade,address,guardian,relationship,contact,email) VALUES ('$username','$password','$fname','$lname','$mname','$bday','$age','$gender','$grade','$address','$guardian','$relationship','$contact', '$email')";
	$result = mysqli_query($connect, $query);	

	if ($result) {
		echo "<script> alert('Registration Complete!')</script>";	
	}

	
}		
?> 