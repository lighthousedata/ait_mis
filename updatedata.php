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
    <?php  if (isset($_SESSION['username'])) : 
    ?>
    	
		<ul style="list-style: none" class="list-group">
	<li><span class="fa fa-file"> </span> <a  style="text-decoration:none" href="indexreport.php" class = "btn"> <b>Index clients list</a></li>
	<!--&nbsp;&nbsp;<br><li><span class="fa fa-money"> </span> <a href="contactreport.php" style="color:black">Contacts list</a></li>-->
	
	
	&nbsp;&nbsp;<br><li><span class="fa fa-money"> </span> <a style="text-decoration:none" href="followupcontacts.php" class = "btn">Contacts for followup</a>
	
   	<br><p> 
    <?php endif ?>
	<tr><td><br><br>
<p><input type="button" class="prev-button"value="Previous" onClick="history.go(-1);"></p>
<br></td><td></td><td></td><td><p><a href = "index.php"class="btn" style="background-color: red">Cancel </a></p>
<br> <?php include("Footer.php"); ?>	
	</div>
</ul>		
</body>
</html>