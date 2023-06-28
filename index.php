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
	<h2>Home Page</h2>
	
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
    	
		<ul style="list-style: none" class="list-group">
	<li><span class="fa fa-file"> </span> <a href="manageindex.php"><b>Manage Index clients</a></li>
	
	<br><li><span class="fa fa-money"> </span> <a href="managecontacts.php"><b>Manage Contacts</a></li>
	
	<br><li><span class="fa fa-money"> </span> <a href="quarterlyreports.php"><b>Generate Reports</a></li>
	
	<br> <li> <span class="fa fa-money"></span>	<a href="register.php">Add new user</a>
  	
	
    	<br><br><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?><br>

 <?php include("Footer.php"); ?>	
	</div>
</ul>	

</body>
</html>