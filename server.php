<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'aitprogramufc');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = Password_hash($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
/*function editclient(){


if(isset($_POST['edit']))
{
          $indexnum = $_POST['indexnum'];
         $facility = $_POST['facility'];
		$dateidentified=$_POST["dateidentified"];
		$gender=$_POST["gender"];
		$age=$_POST["age"];
		$category=$_POST["category"];
		$source=$_POST["source"];
		$totcontacts=$_POST["totcontacts"];
		$eligible=$_POST["eligible"];
		    
			$id= mysql_real_escape_string(trim($id));
			$facility= mysql_real_escape_string(trim($facility));
			$dateidentified= mysql_real_escape_string(trim($dateidentified));
			$indexnum= mysql_real_escape_string(trim($indexnum));  
            $age= mysql_real_escape_string(trim(age)); 
            $gender= mysql_real_escape_string(trim($gender));  
			$category= mysql_real_escape_string(trim($category));  
			$source= mysql_real_escape_string(trim($source));  
			$totcontacts= mysql_real_escape_string(trim($totcontacts));  
			$eligible= mysql_real_escape_string(trim($eligible));    
			 
			
         $update= mysql_query("UPDATE indexreg SET id='$id',facility='$facility', dateidentified='$dateidentified',indexnum='$indexnum',age='$age',gender='$gender',
		 category='$category', source='$source', totcontacts='$totcontacts',eligible='$eligible'
		 
		 WHERE ClientID='$ClientID'")or die (mysql_error());
         if($update){
		  editOK();
      
		   }
		   else{ 
		   editfailed();
		   }
}
}*/
?>