<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
require_once("includes/Connection.php");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $db->real_escape_string($_POST['username']);
  $email = $db->real_escape_string($_POST['email']);
  $password_1 = $db->real_escape_string($_POST['password_1']);
  $password_2 = $db->real_escape_string($_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { 
    array_push($errors, "Username is required"); 
  }
  if (empty($email)) { 
      array_push($errors, "Email is required"); 
  }
  if (empty($password_1)) { 
      array_push($errors, "Password is required"); 
  }
  if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = $db->query($user_check_query);
  $user = $result->fetch_assoc();
    
  if ($user) { // If user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1); // Encrypt the password before saving in the database

    $query = "INSERT INTO users (username, email, password) 
                  VALUES('$username', '$email', '$password')";
    if ($db->query($query) === TRUE) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
      exit; // Exit script after redirection
    } else {
      echo "Error: " . $query . "<br>" . $db->error;
    }
  }
}
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = $db->real_escape_string($_POST['username']);
  $password = $db->real_escape_string($_POST['password']);

  if (empty($username)) {
      array_push($errors, "Username is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
      $password = md5($password); // Avoid using MD5 for password hashing, use more secure methods like password_hash() and password_verify()

      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = $db->query($query);

      if ($result && $result->num_rows == 1) {
          // Login successful, set session variables
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
          exit; // Exit script after redirection
      } else {
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
