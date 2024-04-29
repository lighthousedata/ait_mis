<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>AIT Database</h2>
	
	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >

      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	
				
	<a style="text-decoration:none" href ="indexclient.php" class="btn" >index Register</a>
	
	<a style="text-decoration:none"href ="contacts.php" class="btn" >Contact Register</a>
	
	<a style="text-decoration:none"href ="quarterlyreports.php" class="btn" >Generate Reports</a>
	
	<a style="text-decoration:none"href ="updatedata.php" class="btn" >Data cleaning</a>
	
	<br><br><br>
	 <a href="index.php?logout='1'" class="btn" style="background-color: red">Logout</a>
    <?php endif ?><br>
<br><br><br>
 <?php include("Footer.php"); ?>	
	</div>
	

</body>
</html>